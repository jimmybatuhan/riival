<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-box">
                    <form action="search">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <img src="/img/search-submit.png">
                                </div>
                            </div>
                            <input type="text" class="form-control" id="search-input" placeholder="SEARCH">
                        </div>
                    </form>
                    <hr class="search-hr">
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h5 class="coach-title pt-1 font-weight-bold text-white mb-0">ALL CLASSES</h5>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h5 class="coach-title pt-1 font-weight-bold text-white mb-0">MATCHING LESSONS</h5>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
                <div class="col-12 col-md-4">
                    <coach-card />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.coach-box {
    border: none !important;
    box-shadow: 0px 3px 6px #00000029;
    background: #021925 0% 0% no-repeat padding-box;
}
.coach-box > .card-header {
    border: none !important;
    background: #021925;
}
.coach-title {
    font-size: 18px;
    text-transform: Uppercase;
}
.input-group-text {
    background: none;
    border: none;
}
.search-hr {
    margin-top:0px;
    border-top: 1px solid #F77F00
}
#search-input {
    background: none;
    border: none;
    padding-left: 5px;
    box-shadow: none;
    color: white;
}
</style>

<script>

import CoachCard from "src/components/CoachCard";

export default {
    name: "Classes",
    components: {
        CoachCard,
    },
}
</script>
