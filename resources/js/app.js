"use strict";

import Vue from "vue";
import Vuex from "vuex";
// import Echo from 'laravel-echo';

import axios from "axios";

import router from "src/config/router";
import App from "src/modules/App";

import global from "src/mixins/global";

// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

window.Vue = Vue;

Vue.use(Vuex);
Vue.mixin(global);

let token = document.head.querySelector('meta[name="csrf-token"]');
axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content

Vue.prototype.$axios = axios;
Vue.prototype.$csrf = token.content;

const app = new Vue({
    router,
    el: '#app',
    render: h => h(App),
});
