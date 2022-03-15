require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { createStore } from 'vuex'

import Layout from './components/Layout';

const store = createStore({
    state () {
        return {
            activeTask: false
        }
    },
    mutations: {
        setActive (state) {
            state.activeTask = !state.activeTask
        }
    }
})

createInertiaApp({
    resolve: name => {
        let page = require(`./Pages/${name}`).default;
        page.layout ??= Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(store)
            .mount(el)
    },
});
