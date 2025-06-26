import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/site/app.scss',
                'resources/js/site/app.js',
                'resources/css/site/blog.css',
                'resources/css/site/artigo.css',
            ],
            refresh: true,
        }),
    ],
});
