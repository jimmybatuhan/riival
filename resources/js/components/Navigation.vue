<template>
    <header class="header bg-transparent">
        <div class="header-fixed">
            <nav class="navbar border-0 bg-transparent navbar-expand-lg header-nav px-5">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="index" class="navbar-brand logo">
                        <img src="/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index" class="menu-logo">
                            <img src="/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <router-link to="/">Dashboard</router-link>
                        </li>
                        <li>
                            <router-link to="/classes">Classes</router-link>
                        </li>
                        <li>
                            <router-link to="/videos">Videos</router-link>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0)">John Doe <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li>
                                    <router-link to="/settings">Settings</router-link>
                                </li>
                                <li>
                                    <form method="POST" action="/logout">
                                        <input type="hidden" name="_token" v-model="$csrf" />
                                        <button type="submit" class="btn btn-link">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</template>

<style scoped>
    .navbar {
        background-color: #021925 !important;
    }
    .main-nav li a {
        color: #fff;
        font-weight: 700;
    }
</style>
<script>
    export default {
        name: "Navigation",
        created () {

        },
    }
</script>