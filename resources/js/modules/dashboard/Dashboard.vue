<template>
    <div>
        <div class="container">
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="text-white font-weight-bold">New Videos</h2>
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
        <analysis />
        <div class="container mt-5">
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="text-white font-weight-bold">Continue Watching</h2>
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
        <discord-server-banner />
        <div class="container mt-5">
            <div class="row mb-2">
                <div class="col-12">
                    <h2 class="text-white font-weight-bold">More Lessongs</h2>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <div class="mb-3 d-block text-center">
                                    <h3 class="text-white font-weight-bold">GET ACCESS TO EVERYTHING </h3>
                                </div>
                                <div class="d-block">
                                    <button class="btn btn-default font-weight-bold rounded-0 ge-button-primary w-100">START FOR FREE</button>
                                    <p class="d-block text-center mt-3 text-white">Get instant access to all our classes and community for only $9.99/month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>

<script>

import VideoCard from "src/components/VideoCard";
import Analysis from "./Analysis";
import DiscordServerBanner from "./DiscordServerBanner";

export default {
    name: "Dashboard",

    components: {
        Analysis,
        VideoCard,
        DiscordServerBanner,
    },
}
</script>