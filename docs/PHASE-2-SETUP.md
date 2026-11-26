# Phase 2 — Svelte Foundation Setup

## Implemented on this branch

- Svelte 5 is added to the frontend dependency manifest.
- Vite is moved to the Vite 5 line, with Laravel Vite Plugin 1.
- The official Svelte Vite plugin is configured alongside Vue temporarily.
- Tailwind CSS 3.4 scans Blade, JavaScript, Vue, and Svelte source.
- A dedicated Svelte entry point and Blade shell are added.
- A preview screen is available at `/admin/svelte-preview` behind the existing `auth` and `admin` middleware.
- Existing Vue entry points are retained.

## Build and dependency verification

- The npm lockfile has been regenerated from the updated manifest and committed to this branch by the frontend workflow.
- The GitHub Actions frontend build completed successfully after switching the Vite configuration to native ESM.
- The workflow runs `npm install` and `npm run build` for this phase branch and pull requests targeting `master`.

For a fresh local checkout, run:

```bash
nvm use
npm ci
npm run build
```

## Remaining Laravel runtime verification

Verify the Laravel app using a local environment:

```bash
php artisan route:list --path=admin/svelte-preview
php artisan serve
```

Sign in with an account that passes the existing `auth` and `admin` middleware, then visit `/admin/svelte-preview`.

## Acceptance checklist

- [x] Dependency installation completes without peer dependency conflicts in CI.
- [x] GitHub Actions frontend build workflow passes.
- [x] The lockfile is regenerated and committed.
- [x] `npm run build` completes successfully in CI.
- [ ] Laravel route list includes the protected preview route.
- [ ] The preview route is accessible to an authorized admin.
- [ ] An unauthenticated user is redirected/denied by existing middleware.
- [ ] The existing Vue-backed pages still build and work.
- [x] No production business workflow has been replaced by preview data.

## Notes

The preview cards intentionally use sample values and are clearly labeled as preview data. They are not connected to the database. No Laravel controller, model, migration, or production order workflow has been changed.
