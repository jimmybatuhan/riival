<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link font-weight-bold active" href="#">Guides</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" href="#">Live</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
                <div class="col-4">
                    <video-card />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .navbar {
        background: #011C2A !important;
    }
</style>

<script>
import VideoCard from "src/components/VideoCard";

export default {
    name: "Videos",

    components: {
        VideoCard,
    },
}
</script>
