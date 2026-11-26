# CoffeeOS Architecture

## Chosen architecture

CoffeeOS uses one Laravel application with an integrated Svelte frontend. It is not a separately deployed SvelteKit application.

- Laravel serves the application entry page and owns server-side routing, authentication, authorization, validation, domain logic, and persistence.
- Blade provides the HTML application shell.
- Svelte 5 renders interactive application screens and reusable components.
- Tailwind CSS provides utility styling and design tokens.
- Vite compiles frontend assets through the Laravel Vite plugin.
- MySQL remains the intended relational database, subject to confirmation from the active environment.

## Request flow

1. The browser requests a Laravel web route.
2. Laravel middleware checks the session and authorization.
3. Laravel returns a Blade application shell.
4. Vite-built JavaScript mounts the Svelte application.
5. Svelte requests data or submits actions to same-origin Laravel routes/endpoints.
6. Laravel validates and authorizes the operation, applies business rules, and accesses the database.
7. Laravel returns HTML or JSON as appropriate.

## Suggested source organization

Keep the Laravel project at the repository root. Use the existing Laravel conventions and introduce frontend organization gradually:

```text
resources/
  views/
    app.blade.php
  js/
    app.js
    app.css
    components/
    layouts/
    pages/
    stores/
    services/
    lib/
```

This is a target organization, not a claim that these paths already exist. Adapt it after inspecting the current frontend and Blade templates.

## Authentication and security

- Prefer Laravel's existing session authentication for the same-origin integrated app, if the audit confirms it is correctly configured.
- Preserve and verify CSRF protection for state-changing requests.
- Apply authorization in Laravel middleware, policies, gates, and controllers/services; hiding UI controls is not authorization.
- Validate all input on the server.
- Do not expose secrets or privileged business rules in frontend code.
- Review the existing Sanctum setup before changing authentication behavior.

## Migration rules

- Migrate one module at a time.
- Keep Vue available while unmigrated screens depend on it.
- Avoid loading Vue and Svelte on the same page unless a temporary, documented transition requires it.
- Remove Vue packages, plugins, aliases, and components only after repository-wide reference checks and successful regression tests.
- Confirm compatible versions before changing Composer or npm dependencies.
- Do not move the Laravel application into a new backend directory.
