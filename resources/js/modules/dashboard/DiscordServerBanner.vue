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
    background-image: url('https://cdn-sharing.adobecc.com/id/urn:aaid:sc:US:174d3a92-a150-49b5-ac80-92b8c7ddc2dc;version=0?component_id=b2d23282-6cf0-4f49-8ed2-495629022f4f&api_key=CometServer1&access_token=1605482465_urn%3Aaaid%3Asc%3AUS%3A174d3a92-a150-49b5-ac80-92b8c7ddc2dc%3Bpublic_5928d9894c0429ce383b967bd287b56673ad7980');
}
</style>

<script>
export default {
    name: "DiscordServerBanner",
    mounted () {
    },
}
</script>
