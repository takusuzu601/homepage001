import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/pro001/app.css",
                "resources/js/pro001/app.js",
            ],
            refresh: true,
        }),
    ],
});
