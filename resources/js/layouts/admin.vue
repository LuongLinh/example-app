<template>
    <TheHeader />
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">SIDE BAR</div>
            <div class="col-sm-9">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
<script>
import TheHeader from "../components/TheHeader.vue";

export default {
    components: {
        TheHeader,
    },
};
</script>
