<template>
    <div class="card video-box flex-fill">
        <img alt="Card Image" src="/img/dota23@2x.png" class="card-img-top">
        <div class="card-header px-3">
            <h5 class="card-title pt-1 font-weight-bold text-white mb-0">Card with image and links</h5>
        </div>
        <div class="card-body px-3 pt-1">
            <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk
                of the
                card's content.</p>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Advanced</a>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Offlane</a>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Farming</a>
        </div>
    </div>
</template>

<style scoped>
.video-box {
    border: 1px solid black !important;
}

.video-box>.card-header {
    border-top: 2px solid black !important;
}

.video-box,
.video-box>.card-header {
    background: #021925;
    border: none;
    color: #fff !important;
}
</style>

<script>
import VideoCard from "src/components/VideoCard";

export default {
    name: "Dashboard",

    components: {
        VideoCard,
    },

    props: {
        title: {
            type: String,
            required: true,
        },

        description: {
            type: String,
            required: true,
        },

        image: {
            type: String,
            required: true,
        },

        tags: {
            type: Array,
            required: true,
        }
    }
}
</script>