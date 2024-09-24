import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";




export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/theme_2/sass/app.scss",
                "themes/theme_2/js/app.js"
            ],
            buildDirectory: "theme_2",
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
            '@': '/themes/theme_2/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
