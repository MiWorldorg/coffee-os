# Phase 2 — Svelte Foundation Setup

## Implemented on this branch

- Svelte 5 is added to the frontend dependency manifest.
- Vite is moved to the Vite 5 line, with Laravel Vite Plugin 1.
- The official Svelte Vite plugin is configured alongside Vue temporarily.
- Tailwind CSS 3.4 scans Blade, JavaScript, Vue, and Svelte source.
- A dedicated Svelte entry point and Blade shell are added.
- A preview screen is available at `/admin/svelte-preview` behind the existing `auth` and `admin` middleware.
- Existing Vue entry points are retained.

## Required local setup before build verification

The GitHub file-edit workflow cannot run npm to regenerate the dependency lockfile. The current `package-lock.json` therefore still describes the old Vue/Vite dependency graph and must not be used with `npm ci` until regenerated.

From a clean checkout of this branch:

```bash
npm install
npm run build
```

Review the resulting `package-lock.json` diff and commit it. Then verify the Laravel app using a local environment:

```bash
php artisan route:list --path=admin/svelte-preview
php artisan serve
```

Sign in with an account that passes the existing `auth` and `admin` middleware, then visit `/admin/svelte-preview`.

## Acceptance checklist

- [ ] `npm install` completes without peer dependency conflicts.
- [ ] The lockfile is regenerated and committed.
- [ ] `npm run build` completes successfully.
- [ ] Laravel route list includes the protected preview route.
- [ ] The preview route is accessible to an authorized admin.
- [ ] An unauthenticated user is redirected/denied by existing middleware.
- [ ] The existing Vue-backed pages still build and work.
- [ ] No production business workflow has been replaced by preview data.

## Notes

The preview cards intentionally use sample values and are clearly labeled as preview data. They are not connected to the database. No Laravel controller, model, migration, or production order workflow has been changed.
