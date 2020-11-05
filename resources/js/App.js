/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";
import Vuex from "vuex";
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

import VueRoutes from "./VueRoutes";

import * as axios from "axios";


window.axios = axios;
window.Vue = Vue;

Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    VueRoutes,
    el: '#app',
});
