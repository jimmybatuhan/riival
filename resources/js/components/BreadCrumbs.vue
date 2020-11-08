<template>
    <div v-if="$route.meta.name" class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h3 class="font-weight-bold">{{ $route.meta.name }}</h3>
                    <h2>{{ $route.meta.description }}</h2>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BreadCrumbs",
}
</script>