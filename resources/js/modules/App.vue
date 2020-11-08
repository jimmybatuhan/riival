<template>
    <div>
        <navigation />
        <div  class="main-wrapper">
            <breadcrumbs />
            <div class="content">
                <router-view></router-view>
            </div>
            <footer-template />
        </div>
    </div>
</template>

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
