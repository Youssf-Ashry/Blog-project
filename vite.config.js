import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js', // Your main JS entry point
                'resources/css/app.css', // Your main CSS entry point
            ],
            refresh: true,
        }),
    ],
});
