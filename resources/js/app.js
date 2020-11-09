"use strict";

require('./bootstrap');

import Vue from "vue";
import Vuex from "vuex";

import router from "src/config/router";
import App from "src/modules/App";

import global from "src/mixins/global";

window.Vue = Vue;

Vue.use(Vuex);

Vue.mixin(global);

Vue.prototype.$csrf = document.head.querySelector('meta[name="csrf-token"]').content;

const app = new Vue({
    router,
    el: '#app',
    render: h => h(App),
});
