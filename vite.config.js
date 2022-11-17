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
        hmr: process.env.VITE_GITPOD == 'true' ? (process.env.VITE_GITPOD_WORKSPACE_URL ? {
            // removes the protocol and replaces it with the port we're connecting to
            host: process.env.VITE_GITPOD_WORKSPACE_URL.replace('https://', process.env.VITE_PORT),
            protocol: process.env.FORCE_SCHEME == 'http' ? 'ws':'wss',
            clientPort: 443
        }
        : true)
        :({
            host: process.env.VITE_GITPOD_WORKSPACE_URL,
            protocol: process.env.FORCE_SCHEME == 'http' ? 'ws':'wss',
            clientPort: process.env.VITE_PORT
        })
    },
    ssr: {
        noExternal: ['@inertiajs/server'],
    },
});
