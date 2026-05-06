import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy'
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
            ],
            refresh: true
        }),
        vue(),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/images/*',
                    dest: 'assets/images'
                }
            ]
        })
    ]
});
