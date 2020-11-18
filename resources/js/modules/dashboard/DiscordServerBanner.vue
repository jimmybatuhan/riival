<template>
<div ref="container" class="container-fluid improve-banner mt-4">
    <div ref="overlay" class="improve-banner-overlay"></div>
    <div class="row">
        <div class="col-12 py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="h2 text-white font-weight-bold mb-3 d-block">Improve with other players</div>
                        <div class="d-block">
                            <button class="btn btn-default bg-white rounded-0 px-5 ge-text-color-secondary font-weight-bold">JOIN SERVER</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
.improve-banner-overlay {
    background: #FF0404 0% 0% no-repeat padding-box;
    width: 100%;
    position: absolute;
    opacity: 0.6;
    height:100%;
    left: 0;
}

.improve-banner {
    position: relative;
    background-size: cover;
    background-image: url('/img/improve-banner-bg.png');
}
</style>

<script>
export default {
    name: "DiscordServerBanner",
    mounted () {
    },
}
</script>
