import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";




export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/theme_1/sass/app.scss",
                "themes/theme_1/js/app.js"
            ],
            buildDirectory: "theme_1",
        }),
        
        
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            '@': '/themes/theme_1/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
