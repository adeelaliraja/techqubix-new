import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/bootstrap.min.css',
                'resources/lib/wow/wow.min.js',
                'resources/lib/easing/easing.min.js',
                'resources/lib/waypoints/waypoints.min.js',
                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/lib/lightbox/css/lightbox.min.css',
                'resources/lib/lightbox/js/lightbox.js',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
