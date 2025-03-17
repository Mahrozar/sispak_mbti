import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss({
            content: ["./resources/**/*.{js,jsx,ts,tsx,vue,blade.php}"], // Sesuaikan path dengan proyek Laravel
            theme: {
                extend: {},
            },
            plugins: [],
        }),
    ],
});
