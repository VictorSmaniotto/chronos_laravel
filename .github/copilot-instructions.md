# Copilot Instructions for Chronos Laravel

## Project Overview

This is a Laravel 9 web application project built with PHP 8.0.2+. The project uses Vite for frontend asset compilation and follows Laravel framework conventions.

## Technology Stack

- **Backend**: Laravel 9.x, PHP 8.0.2+
- **Frontend**: Vite, Bootstrap Icons
- **Testing**: PHPUnit
- **Code Quality**: Laravel Pint (code style)

## Development Commands

### Setup
```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### Running the Application
```bash
# Start development server
php artisan serve

# Compile frontend assets (development)
npm run dev

# Build frontend assets (production)
npm run build
```

### Testing
```bash
# Run all tests
php artisan test
# or
./vendor/bin/phpunit

# Run specific test suite
./vendor/bin/phpunit --testsuite=Unit
./vendor/bin/phpunit --testsuite=Feature
```

### Code Quality
```bash
# Run Laravel Pint for code style fixes
./vendor/bin/pint
```

## Code Style Guidelines

### PHP Code Style
- Follow PSR-12 coding standards
- Use 4 spaces for indentation (as defined in `.editorconfig`)
- Use LF line endings
- Include DocBlocks for methods with parameter and return type annotations
- Follow Laravel naming conventions:
  - Controllers: PascalCase with `Controller` suffix (e.g., `UserController`)
  - Models: Singular PascalCase (e.g., `User`)
  - Routes: kebab-case for URLs (e.g., `/user-profile`)
  - Variables: camelCase (e.g., `$userData`)
  - Database tables: plural snake_case (e.g., `users`, `order_items`)

### File Organization
- Controllers: `app/Http/Controllers/`
- Models: `app/Models/`
- Middleware: `app/Http/Middleware/`
- Routes: `routes/` (separate files for `web.php`, `api.php`, etc.)
- Views: `resources/views/`
- Database migrations: `database/migrations/`
- Tests: `tests/Feature/` and `tests/Unit/`

### Laravel-Specific Conventions
- Use Eloquent ORM for database interactions
- Use route model binding where appropriate
- Use form requests for validation in complex scenarios
- Use resource controllers for RESTful operations
- Follow the Single Responsibility Principle for controllers and services
- Use dependency injection via constructor or method parameters
- Leverage Laravel's service container for dependency resolution

### Testing Guidelines
- Write feature tests for HTTP endpoints in `tests/Feature/`
- Write unit tests for isolated logic in `tests/Unit/`
- Use Laravel's testing helpers and assertions
- Mock external services in tests
- Use factories for test data generation when available

### Frontend Guidelines
- Use Vite for asset compilation
- JavaScript dependencies are managed via npm
- Follow the existing project structure in `resources/`

## Security Practices
- Never commit `.env` file or sensitive credentials
- Use Laravel's built-in CSRF protection
- Sanitize user input and use parameter binding for database queries
- Use Laravel's authentication and authorization features (Gates, Policies)
- Keep dependencies up to date

## Common Patterns
- Use middleware for request filtering and authentication checks
- Use service providers for binding services into the container
- Use events and listeners for decoupled application logic
- Use queues for long-running tasks
- Use Laravel's validation rules and form requests

## Notes
- The project uses PHP type hints extensively in newer code
- Maintain backward compatibility with PHP 8.0.2+
- Follow the existing code structure and patterns when adding new features
