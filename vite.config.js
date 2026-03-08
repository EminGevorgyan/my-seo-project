import {defineConfig, loadEnv} from 'vite';
import laravel from 'laravel-vite-plugin';
// import tailwindcss from '@tailwindcss/vite';
export default defineConfig(({ mode }) => {
    // 2. Загружаем переменные из .env
    const env = loadEnv(mode, process.cwd(), '');

    return {
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                    'resources/css/welcome.css',
                    'resources/css/dub.css',
                    'resources/css/about.css',
                    'resources/css/auth/register.css',
                    'resources/css/auth/login.css'

                ],
                refresh: true,
            }),
        ],
        server: {
            host: '0.0.0.0',
            watch: {
                ignored: ['**/storage/framework/views/**'],
            },
            hmr: {
                // 3. Используем загруженный объект env
                host: env.VITE_HMR_HOST || 'localhost',
            },
        },
    };
});
// export default defineConfig({
//
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/app.js',
//                 'resources/css/welcome.css','resources/css/dub.css', "resources/css/about.css"],
//             refresh: true,
//         }),
//         // tailwindcss(),
//     ],
//     server: {
//         host: '0.0.0.0',
//         watch: {
//             ignored: ['**/storage/framework/views/**'],
//         },
//         hmr: {
//             // host: '192.168.10.13',
//             host: process.env.VITE_HMR_HOST || 'localhost',
//         },
//     },
// });
