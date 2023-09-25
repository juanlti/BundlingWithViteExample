import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [    'resources/css/style.css',     'resources/js/my_file.js'],
            refresh: true,
        }),
    ],
});
