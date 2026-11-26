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
- [x] Select a Svelte 5 / Vite 5 integration path compatible with the Laravel Vite plugin upgrade.
- [x] Add the Svelte Vite plugin while retaining Vue temporarily for unmigrated screens.
- [x] Configure Tailwind CSS 3.4 to scan Svelte components and remove the unrelated duplicate `tailwind` package from the manifest.
- [x] Add a Blade shell, Svelte entry point, and initial CoffeeOS preview screen.
- [x] Regenerate and commit `package-lock.json` from the updated manifest.
- [x] Add GitHub Actions frontend verification and pass dependency installation plus the production build.
- [ ] Verify the protected preview route and existing Vue pages in a running Laravel environment.
- Exit criteria: a minimal Svelte screen loads through Laravel in development and production builds.

**Status:** Foundation code, synchronized npm lockfile, and successful CI production build are on `feat/phase-2-svelte-foundation`. Laravel runtime/authentication checks remain outstanding.

### Phase 3 — CoffeeOS design system and application shell
- [x] Establish visual palette, typography defaults, surfaces, borders, and responsive behavior.
- [x] Build the navigation shell, café switcher, overview heading, KPI cards, sample chart, product list, orders table, and responsive sidebar.
- [x] Add preview banner, navigation state, order-table filtering, and mobile sidebar toggle.
- [ ] Extract and expand reusable primitives as module migrations progress.
- Exit criteria: a responsive shell that establishes the shared UI direction; further primitives will be extracted during module work.

**Status:** Initial design-system shell is implemented on `feat/phase-3-design-system`. The dashboard is illustrative and intentionally not connected to live business data.

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
- Phase 2: implementation and frontend build verification complete; Laravel runtime verification pending
- Phase 3: initial design-system shell implemented on `feat/phase-3-design-system`

See [Phase 1 Audit](PHASE-1-AUDIT.md) and [Architecture](ARCHITECTURE.md).
