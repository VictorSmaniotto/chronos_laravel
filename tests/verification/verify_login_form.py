import re
import os
from playwright.sync_api import sync_playwright

# Define paths
TEMPLATE_PATH = "resources/views/site/_formulario.blade.php"
MOCK_CLEAN_PATH = "tests/verification/mock_clean.html"
MOCK_ERROR_PATH = "tests/verification/mock_error.html"

def generate_mocks():
    with open(TEMPLATE_PATH, "r") as f:
        content = f.read()

    # Wrap in a basic HTML structure for valid parsing
    html_wrapper = """
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Mock Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form>
                {form_content}
            </form>
        </div>
    </body>
    </html>
    """

    # --- Generate Clean Mock (No Errors) ---
    # Remove @csrf
    clean_content = content.replace("@csrf", "")
    # Remove @error blocks entirely
    clean_content = re.sub(r'@error\(\'(.*?)\'\)(.*?)@enderror', '', clean_content, flags=re.DOTALL)
    # Remove blade echo {{ ... }} for values or replace with empty
    clean_content = re.sub(r'value="\{\{.*?\}\}"', '', clean_content)
    # Remove dynamic classes logic for simplicity in clean mock, assuming the blade logic is clean
    clean_content = re.sub(r'@error\(\'(.*?)\'\)\s*is-invalid\s*@enderror', '', clean_content)
    clean_content = re.sub(r'@error\(\'(.*?)\'\)\s*aria-describedby="(.*?)"\s*@enderror', '', clean_content)

    with open(MOCK_CLEAN_PATH, "w") as f:
        f.write(html_wrapper.format(form_content=clean_content))

    # --- Generate Error Mock (With Errors) ---
    error_content = content.replace("@csrf", "")

    # Simulate @error('email') is-invalid @enderror -> is-invalid
    error_content = re.sub(r'@error\(\'email\'\)\s*is-invalid\s*@enderror', 'is-invalid', error_content)
    # Simulate @error('password') is-invalid @enderror -> is-invalid
    error_content = re.sub(r'@error\(\'password\'\)\s*is-invalid\s*@enderror', 'is-invalid', error_content)

    # Simulate @error('email') aria-describedby="email-error" @enderror -> aria-describedby="email-error"
    error_content = re.sub(r'@error\(\'email\'\)\s*aria-describedby="(.*?)"\s*@enderror', r'aria-describedby="\1"', error_content)
    # Simulate @error('password') aria-describedby="password-error" @enderror -> aria-describedby="password-error"
    error_content = re.sub(r'@error\(\'password\'\)\s*aria-describedby="(.*?)"\s*@enderror', r'aria-describedby="\1"', error_content)

    # Simulate @error('email') ... @enderror block content
    # We replace the block with the content inside + the message
    def replace_error_block(match):
        field = match.group(1)
        inner_html = match.group(2)
        # Replace {{ $message }} with a dummy message
        return inner_html.replace('{{ $message }}', f'Error message for {field}')

    error_content = re.sub(r'@error\(\'(.*?)\'\)(.*?)@enderror', replace_error_block, error_content, flags=re.DOTALL)

    # Replace old('email') with a value
    error_content = error_content.replace("{{ old('email') }}", "test@example.com")

    with open(MOCK_ERROR_PATH, "w") as f:
        f.write(html_wrapper.format(form_content=error_content))

    print("Mocks generated.")

def verify_mocks():
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page()

        # Verify Clean Mock
        print(f"Verifying {MOCK_CLEAN_PATH}...")
        page.goto(f"file://{os.path.abspath(MOCK_CLEAN_PATH)}")

        # Check required attributes
        email_input = page.locator("#email")
        password_input = page.locator("#password")

        if email_input.get_attribute("required") is None:
            print("FAIL: Email input missing 'required' attribute.")
        else:
            print("PASS: Email input has 'required'.")

        if password_input.get_attribute("required") is None:
            print("FAIL: Password input missing 'required' attribute.")
        else:
            print("PASS: Password input has 'required'.")

        # Check autocomplete
        if email_input.get_attribute("autocomplete") != "email":
             print(f"FAIL: Email input autocomplete is '{email_input.get_attribute('autocomplete')}', expected 'email'.")
        else:
             print("PASS: Email input has autocomplete='email'.")

        if password_input.get_attribute("autocomplete") != "current-password":
             print(f"FAIL: Password input autocomplete is '{password_input.get_attribute('autocomplete')}', expected 'current-password'.")
        else:
             print("PASS: Password input has autocomplete='current-password'.")


        # Verify Error Mock
        print(f"Verifying {MOCK_ERROR_PATH}...")
        page.goto(f"file://{os.path.abspath(MOCK_ERROR_PATH)}")

        email_input = page.locator("#email")
        password_input = page.locator("#password")

        # Check is-invalid class
        if "is-invalid" not in email_input.get_attribute("class"):
            print("FAIL: Email input missing 'is-invalid' class in error state.")
        else:
            print("PASS: Email input has 'is-invalid' class.")

        if "is-invalid" not in password_input.get_attribute("class"):
            print("FAIL: Password input missing 'is-invalid' class in error state.")
        else:
            print("PASS: Password input has 'is-invalid' class.")

        # Check aria-describedby
        email_desc = email_input.get_attribute("aria-describedby")
        if email_desc != "email-error":
            print(f"FAIL: Email input aria-describedby is '{email_desc}', expected 'email-error'.")
        else:
            print("PASS: Email input has aria-describedby='email-error'.")
            # Verify the element exists
            if page.locator(f"#{email_desc}").count() == 0:
                 print(f"FAIL: Element with id '{email_desc}' not found.")
            else:
                 print(f"PASS: Element with id '{email_desc}' exists.")

        password_desc = password_input.get_attribute("aria-describedby")
        if password_desc != "password-error":
            print(f"FAIL: Password input aria-describedby is '{password_desc}', expected 'password-error'.")
        else:
            print("PASS: Password input has aria-describedby='password-error'.")
            if page.locator(f"#{password_desc}").count() == 0:
                 print(f"FAIL: Element with id '{password_desc}' not found.")
            else:
                 print(f"PASS: Element with id '{password_desc}' exists.")

        # Check value retention
        if email_input.input_value() != "test@example.com":
            print(f"FAIL: Email value not retained. Got '{email_input.input_value()}'.")
        else:
            print("PASS: Email value retained.")

        browser.close()

if __name__ == "__main__":
    try:
        generate_mocks()
        verify_mocks()
    except Exception as e:
        print(f"An error occurred: {e}")
