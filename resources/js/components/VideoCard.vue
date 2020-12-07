<template>
    <div class="card video-box flex-fill" @click="$router.push(videoLink)">
        <img alt="Card Image" src="/img/dota23@2x.png" class="card-img-top">
        <div class="card-header px-3">
            <h5 class="card-title pt-1 font-weight-bold text-white mb-0">{{ title }}</h5>
        </div>
        <div class="card-body px-3 pt-1">
            <p class="card-text text-secondary">{{ description }}</p>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Advanced</a>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Offlane</a>
            <a class="card-link font-weight-bold ge-text-color-secondary" href="#">Farming</a>
        </div>
    </div>
</template>

<style scoped>
.video-box {
    border: 1px solid black !important;
    cursor: pointer;
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
"use strict";

import { toKebabCase } from "src/helpers/string";

export default {
    name: "VideoCard",

    props: {
        lessonId: {
            type: Number,
            required: true,
        },

        gameTitle: {
            type: String,
            required: true,
        },

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
            type: [String, Array],
            default:  () => [],
        },
    },

    computed: {
        videoLink : function () {
            return `games/${toKebabCase(this.gameTitle)}/video/${this.lessonId}`;
        },
    },
}
</script>