import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/css/style.css',
                'public/css/bootstrap.min.css',
                'public/js/main.js',
                'public/lib/',
                'public/scss/'],
            refresh: true,
        }),
    ],
});
