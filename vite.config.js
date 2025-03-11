import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/custom-gsap.js',
                'resources/js/script.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // 👈 Make sure the build output is inside public
        manifest: true, // 👈 Ensure manifest.json is generated
    },
    server: {
        origin: 'http://localhost/bpd', // 👈 Fix Vite URL
    }
});
