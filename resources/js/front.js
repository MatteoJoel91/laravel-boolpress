window.Vue = require('vue');

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';

import App from './views/App';

// Per usare vue-router faccio questo import
import router from './router';

const app = new Vue({

    el:'#root',
    render: h=> h(App),
    router
});