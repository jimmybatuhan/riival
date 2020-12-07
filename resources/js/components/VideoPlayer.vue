<template>
     <vue-vimeo-player
        :player-height="height"
        :video-id="videoID"
        @ready="onReady"
        ref="player"
    >
    </vue-vimeo-player>
</template>

<script>

import { vueVimeoPlayer } from 'vue-vimeo-player';

export default {
    name: "VideoPlayer",

    components: {
        vueVimeoPlayer,
    },
    data () {
        return {
            videoID: 487794349,
            height: 500,
            options: {
                muted: true,
                autoplay: true,
            },
            playerReady: false
        };
    },

    props: {
        videoId: {
            type: Number,
            required: true,
        },
    },

    methods: {
        onReady() {
            this.playerReady = true
        },
        play () {
            this.$refs.player.play()
        },
        pause () {
            this.$refs.player.pause()
        },
    },
}

</script>
