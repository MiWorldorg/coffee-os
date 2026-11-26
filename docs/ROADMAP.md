# CoffeeOS Revival Roadmap

CoffeeOS is being revived as a Laravel application with an integrated Svelte 5 and Tailwind CSS frontend. Laravel remains responsible for routing, authentication, validation, business rules, persistence, and server-side security. Svelte provides the interactive application interface and is compiled by Vite.

## Principles

- Preserve working Laravel functionality and existing data structures where practical.
- Migrate Vue screens incrementally; do not remove Vue until equivalent Svelte screens are verified.
- Keep business rules and authorization on the Laravel server.
- Prefer same-origin Laravel session authentication for the integrated application, subject to an authentication audit.
- Upgrade dependencies in controlled, testable steps.
- Keep the existing default branch stable; develop on feature branches and use pull requests.

## Phases

### Phase 1 — Discovery and stabilization
- Audit Laravel, PHP, Composer dependencies, Node dependencies, Vite, Tailwind, routes, authentication, migrations, models, controllers, frontend entry points, and tests.
- Establish a reproducible local setup and baseline checks.
- Record known risks and migration dependencies.
- Do not make broad dependency upgrades or remove Vue during discovery.
- Exit criteria: a reviewed technical inventory, reproducible baseline, and prioritized remediation list.

### Phase 2 — Integrated Svelte foundation
- Confirm compatible versions for the current Laravel/Vite environment.
- Add Svelte 5 through the existing Laravel Vite pipeline.
- Configure Tailwind CSS using one supported version and remove duplicate/conflicting packages only after verifying usage.
- Create the Blade application shell and Svelte entry point.
- Prove development and production builds work.
- Exit criteria: a minimal Svelte screen loads through Laravel in development and production builds.

### Phase 3 — CoffeeOS design system and application shell
- Establish typography, color tokens, spacing, responsive breakpoints, and theme behavior.
- Build reusable navigation, layout, buttons, forms, tables, dialogs, notifications, and loading/empty/error states.
- Exit criteria: a responsive, accessible shell with reusable UI primitives.

### Phase 4 — Authentication and first migrated modules
- Verify login, logout, session handling, CSRF, middleware, and role/permission behavior.
- Migrate dashboard and products first, then customers and orders.
- Keep authorization and validation server-side.
- Exit criteria: migrated modules pass functional and authorization checks.

### Phase 5 — POS and sales workflows
- Implement cart, checkout, order lifecycle, payment recording, and sales history.
- Verify totals and state transitions on the server.
- Exit criteria: tested end-to-end order workflow.

### Phase 6 — Inventory and customer operations
- Implement ingredients, stock movements, recipe consumption, low-stock alerts, and customer history/loyalty where requirements are defined.
- Exit criteria: inventory changes reconcile with order workflows.

### Phase 7 — Analytics, settings, and Vue retirement
- Complete reports, settings, and remaining migrated screens.
- Remove Vue dependencies and legacy components only after confirming no remaining references.
- Exit criteria: Svelte is the sole application frontend and regression checks pass.

### Phase 8 — Release readiness
- Complete security, accessibility, performance, backup, deployment, and documentation checks.
- Prepare release notes, demo data, and v1.0.0.
- Exit criteria: repeatable production deployment and documented release.

## Current status

- Repository: `MiWorldorg/coffee-os`
- Default branch: `master`
- Phase 1: initial configuration and route review started
- Phase 2+: not started

See [Phase 1 Audit](PHASE-1-AUDIT.md) and [Architecture](ARCHITECTURE.md).
