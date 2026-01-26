from playwright.sync_api import sync_playwright
import os
import sys

def run():
    with sync_playwright() as p:
        browser = p.chromium.launch()
        page = browser.new_page()

        # Load the mock HTML file
        mock_path = os.path.abspath('tests/verification/mock_admin.html')
        page.goto(f'file://{mock_path}')

        # Check for the skip link
        skip_link = page.locator('a[href="#main-content"]')

        if skip_link.count() == 0:
            print("FAILURE: Skip link not found.")
            browser.close()
            sys.exit(1)

        print("Skip link found.")

        # Check class
        classes = skip_link.get_attribute('class')
        required_classes = ['visually-hidden-focusable', 'fixed-top', 'bg-white']

        missing_classes = [c for c in required_classes if c not in classes]
        if missing_classes:
            print(f"WARNING: Skip link missing classes: {missing_classes}. Found: {classes}")
        else:
            print("All required classes found.")

        # Simulate Tab key to focus the first element
        page.keyboard.press('Tab')

        # Check if skip link is focused
        is_focused = skip_link.evaluate('el => el === document.activeElement')
        if not is_focused:
            print("FAILURE: Skip link is not the first focused element.")
            browser.close()
            sys.exit(1)

        print("Skip link received focus.")

        # Check visibility (it should be visible when focused)
        if not skip_link.is_visible():
             print("FAILURE: Skip link is not visible when focused.")
             browser.close()
             sys.exit(1)

        print("Skip link is visible when focused.")

        # Verify main content id
        main_content = page.locator('#main-content')
        if main_content.count() == 0:
            print("FAILURE: Element with id='main-content' not found.")
            browser.close()
            sys.exit(1)

        print("Element #main-content found.")

        # Click the link and verify navigation/focus
        skip_link.click()

        if '#main-content' not in page.url:
             print(f"FAILURE: URL did not update to #main-content. URL: {page.url}")
             browser.close()
             sys.exit(1)

        print("Skip link navigation works (hash updated).")

        browser.close()
        print("SUCCESS: All checks passed.")

if __name__ == "__main__":
    run()
