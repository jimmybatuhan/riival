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
                            <input type="text" class="form-control" id="search-input" placeholder="SEARCH" v-model="keyword">
                        </div>
                    </form>
                    <hr class="search-hr">
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5 class="course-title pt-1 font-weight-bold text-white mb-0">ALL CLASSES</h5>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-4" v-for="course in courses">
                <course-card
                    v-bind:key ="course.id"
                    v-bind:title = "course.title"
                    v-bind:name = "course.coach_profile.in_game_name"
                    v-bind:image = "course.thumbnail_url"
                />
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

import CourseCard from "src/components/CourseCard";

export default {
    name: "Classes",
    components: {
        CourseCard,
    },
    data() {
        return {
            courses: [],
            keyword: "",
            awaitingSearch: false,
        }
    },
    mounted() {
        var self = this;

        self.getCourses();
    },
    watch: {
        keyword: function (val) {
            var self = this;

            if (!this.awaitingSearch) {
                setTimeout(() => {
                    self.getCourses();
                    this.awaitingSearch = false;
                }, 1000); // 1 sec delay
            }
            this.awaitingSearch = true;
        },
    },
    methods: {
        getCourses: function() {
            var self = this;

            self.$axios.get('/courses', {
                params: {
                    keyword: self.keyword
                }
            })
            .then(resp => {
                self.courses = resp.data.data;
            })
        },
    }
}
</script>
