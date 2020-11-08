<template>
    <div>
        <navigation />
        <div  class="main-wrapper">
            <router-view></router-view>
            <footer-template />
        </div>
    </div>
</template>

<script>

import Navigation from "src/components/Navigation";
import FooterTemplate from "src/components/Footer";

export default {
    name: "App",

    components: {
        Navigation,
        FooterTemplate,
    },

    mounted () {
    },
}
</script>
