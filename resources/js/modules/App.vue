<template>
    <div>
        <navigation />
        <div class="ge-main-background main-wrapper">
            <breadcrumbs />
            <div class="content ge-bg-color-primary">
                <router-view></router-view>
            </div>
            <footer-template />
        </div>
    </div>
</template>

<style scoped>
    .content {
        border-color:#000;
    }
</style>
<script>

import Navigation from "src/components/Navigation";
import FooterTemplate from "src/components/Footer";
import Breadcrumbs from "src/components/BreadCrumbs";

export default {
    name: "App",

    components: {
        Navigation,
        FooterTemplate,
        Breadcrumbs,
    },

    mounted () {
    },
}
</script>
