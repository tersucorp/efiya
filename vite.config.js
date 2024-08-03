import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default defineConfig({
    server: {
        host: "0.0.0.0",
        port: process.env.VITE_PORT || 5173,
        hmr: {
            host: "localhost",
            protocol: "ws",
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss,
                autoprefixer,
            ],
        },
    },
});
