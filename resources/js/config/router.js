"use strict";

import Vue from "vue";
import VueRouter from "vue-router";

import Routes from "src/constants/routes";

import PageNotFound from "src/modules/PageNotFound";
import Dashboard from "src/modules/Dashboard";

Vue.use(VueRouter);

Routes.push({ path: "/", component: Dashboard });
Routes.push({ path: "*", component: PageNotFound });

const appRoutes = new VueRouter({
    base: "/",
    mode: "history",
    routes: Routes,
});

appRoutes.beforeResolve((to, from, next) => {
    next();
});

appRoutes.afterEach((to, from) => {
});

export default appRoutes;