<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item">
                        <a class="nav-link" href="#bottom-tab1" data-toggle="tab">Guides</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bottom-tab2" data-toggle="tab">Analysis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#bottom-tab3" data-toggle="tab">Live Streams</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show" id="bottom-tab1">
                        Tab content 1
                    </div>
                    <div class="tab-pane" id="bottom-tab2">
                        Tab content 2
                    </div>
                    <div class="tab-pane active" id="bottom-tab3">
                        Tab content 3
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Videos",

        created() {

        },
    }
</script>

<style>

</style>