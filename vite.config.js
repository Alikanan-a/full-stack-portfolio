import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/admin/admin.scss' ,'resources/scss/admin/dashboard.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
