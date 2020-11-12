<template>
    <div v-if="$route.meta.name" class="breadcrumb-bar border-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="font-weight-bold page-title">{{ $route.meta.name }}</h2>
                    <h3 class="page-description">{{ $route.meta.description }}</h3>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .page-title {
        color: #F77F00;
    }

    .page-description {
        color: #fff;
        font-weight: lighter;
    }

    .breadcrumb-bar {
        background-color: #021925;
    }
</style>

<script>
export default {
    name: "BreadCrumbs",
}
</script>