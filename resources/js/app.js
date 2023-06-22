require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import ElementPlus from 'element-plus';
// import 'element-plus/dist/index.css';
// import 'tailwindcss/tailwind.css';

createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        const app = createApp({ render: () => h(App, props) });
        // app.use(ElementPlus);
        app.mount(el);
    },
});
