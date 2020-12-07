"use strict";

import Vue from "vue";
import Vuex from "vuex";
import Axios from "src/config/http";
import Router from "src/config/router";

import Global from "src/mixins/global";
import App from "src/modules/App";

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

window.Vue = Vue;

Vue.use(Vuex);
Vue.mixin(Global);

Vue.prototype.$axios = Axios;
Vue.prototype.$csrf = document.head.querySelector('meta[name="csrf-token"]').content;

const app = new Vue({
    router: Router,
    el: '#app',
    render: h => h(App),
});
