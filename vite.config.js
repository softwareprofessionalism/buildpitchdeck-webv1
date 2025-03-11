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
        outDir: 'public/build', // ✅ Make sure assets are placed in public
        emptyOutDir: true, // ✅ Clears old assets
        manifest: true, // ✅ Required for Laravel to find assets
        rollupOptions: {
            input: {
                main: 'resources/js/app.js',
            },
            output: {
                assetFileNames: 'assets/[name].[hash][extname]', // ✅ Ensures unique hashed filenames
                chunkFileNames: 'assets/[name].[hash].js',
                entryFileNames: 'assets/[name].[hash].js',
            }
        }
    },
    server: {
        strictPort: true,
        hmr: {
            host: 'buildpitchdeck.com',
        },
    }
});
