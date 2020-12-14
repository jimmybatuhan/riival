<template>
    <div class="container">
        <all-classes />
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <h5 class="course-title pt-1 font-weight-bold text-white mb-0">MATCHING LESSONS</h5>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
                </div>
                <div class="col-12 col-md-4">
                    <course-card />
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

import AllClasses from "src/components/AllClasses";
import CourseCard from "src/components/CourseCard";

export default {
    name: "Classes",
    components: {
        CourseCard,
        AllClasses,
    },
}
</script>
