<template>
    <div>
        <HomeHeader/>
        <router-view></router-view>
    </div>
</template>

<script>
// import Vue from 'vue'
import HomeHeader from "./HomeHeader.vue"
    export default {
        name: "AppComponents",
        components: {
            HomeHeader,
        }
    }
</script>
