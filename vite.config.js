import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
require('dotenv').config();

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        // configure vite for HMR with Gitpod
        hmr: process.env.VITE_GITPOD_WORKSPACE_URL ? {
            // removes the protocol and replaces it with the port we're connecting to
            host: process.env.VITE_GITPOD_WORKSPACE_URL.replace('https://', '5173-'),
            protocol: 'wss',
            clientPort: 443
        }
        : true
    },
    ssr: {
        noExternal: ['@inertiajs/server'],
    },
});
