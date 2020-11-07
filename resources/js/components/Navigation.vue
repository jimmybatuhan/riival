<template>
    <header class="header">
        <div class="header-fixed">
            <nav class="navbar navbar-expand-lg header-nav">
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
                                    <a href="change-password">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
    export default {
        name: "Navigation",
        created () {

        },
    }
</script>