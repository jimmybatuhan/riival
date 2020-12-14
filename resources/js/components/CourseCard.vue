<template>
    <div class="card course-box flex-fill">
        <img alt="course Image" :src="image" class="card-img-top">
        <div class="card-header px-3">
            <h5 class="card-title course-title pt-1 font-weight-bold text-white mb-0">{{ title }}</h5>
        </div>
        <div class="card-body px-3 pt-1">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <p class="course-name">{{ name }}</p>
                    </div>
                    <div class="col-12 col-md-5 course-button-box">
                        <button class="btn ge-button-primary btn-block" v-bind:href="link"><span class="button-text">WATCH NOW →</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.course-box {
    border: none !important;
    box-shadow: 0px 3px 6px #00000029;
    background: #021925 0% 0% no-repeat padding-box;
}
.course-box > .card-header {
    border: none !important;
    background: #021925;
}
.course-title {
    font-size: 18px;
    text-transform: Uppercase;
}
.button-text {
    font-size: 14px;
    text-transform: Uppercase;
}
.course-name {
    color: #F77F00;
    font-size: 18px;
    text-transform: Uppercase;
    font-weight: 300;
}
.course-box > .card-body {
    padding-bottom: 0px;
    padding-right: 0px !important;
}
.course-button-box {
    padding: 0px !important;
}
</style>

<script>
export default {
    name: "CourseCard",
    props: {
        title: {
            type: String,
            required: true,
        },
        name: {
            type: String,
            required: true,
        },
        image: {
            type: String,
            required: true,
        },
        link: {
            type: String,
            required: true,
        },
    }
}
</script>
