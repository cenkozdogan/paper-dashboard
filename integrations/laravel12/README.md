# Laravel 12 integration

This folder contains a Vite-friendly setup you can drop into a fresh Laravel 12 project to use **Paper Dashboard 2** without the legacy Gulp pipeline.

## What is included
- `resources/css/paper-dashboard.scss` and `resources/js/paper-dashboard.js` Vite entry points
- A base layout (`resources/views/layouts/paper.blade.php`) wired to `@vite` assets
- A sample dashboard page (`resources/views/pages/dashboard.blade.php`) using existing styles and components
- A placeholder `resources/vendor/paper-dashboard/assets` directory where the design assets should live

## How to use in a Laravel 12 project
1. Copy this repository's `assets` folder into your Laravel app at `resources/vendor/paper-dashboard/assets`.
2. Copy everything from `integrations/laravel12/resources` into the matching locations of your Laravel app's `resources` directory.
3. Update `vite.config.js` to register the new entry points. The example below keeps the default Laravel setup and adds Paper Dashboard:
   ```js
   import { defineConfig } from 'vite';
   import laravel from 'laravel-vite-plugin';

   export default defineConfig({
       plugins: [
           laravel({
               input: [
                   'resources/css/app.css',
                   'resources/js/app.js',
                   'resources/css/paper-dashboard.scss',
                   'resources/js/paper-dashboard.js',
               ],
               refresh: true,
           }),
       ],
   });
   ```
4. Add a route for the dashboard page, for example in `routes/web.php`:
   ```php
   Route::view('/dashboard', 'pages.dashboard')->name('dashboard');
   ```
5. Install and build your frontend:
   ```bash
   npm install
   npm run dev   # or npm run build for production
   ```

## Quick copy script from this repository
If you are working directly inside this repository, you can mirror the assets into the Laravel integration stub with:
```bash
npm run prepare:laravel12
```
This copies the top-level `assets` directory into `integrations/laravel12/resources/vendor/paper-dashboard` so Vite can resolve fonts, images, and scripts.
