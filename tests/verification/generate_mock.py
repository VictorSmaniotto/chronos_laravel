import re
import os

def generate_mock():
    source_path = 'resources/views/layouts/admin.blade.php'
    dest_path = 'tests/verification/mock_admin.html'

    with open(source_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Replace @yield('titulo')
    content = re.sub(r"@yield\('titulo'\)", "Admin Panel", content)

    # Replace @yield('conteudo') with dummy content
    dummy_content = """
    <h1 id="page-title">Dashboard</h1>
    <p>This is some dummy content to simulate the page content.</p>
    <button class="btn btn-primary">Action</button>
    """ + ("<p>More content...</p>" * 20)

    content = re.sub(r"@yield\('conteudo'\)", dummy_content, content)

    # Replace {{ route(...) }} with #
    content = re.sub(r"\{\{ route\(.*?\)\s*\}\}", "#", content)

    # Replace other blade directives if any (basic ones)
    content = re.sub(r"@csrf", "", content)
    content = re.sub(r"@method\(.*?\)", "", content)

    with open(dest_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print(f"Generated {dest_path}")

if __name__ == "__main__":
    generate_mock()
