<template>
    <div>
        <the-menubar></the-menubar>
        <div class="main">
            <keep-alive>
                <router-view></router-view>
            </keep-alive>
        </div>
    </div>
</template>

<script>
    import TheMenubar from './TheMenubar'

    export default {
        components: {
            TheMenubar,
        }
    }
</script>

<style scoped>
    .main{
        padding-top: 40px;
    }
</style>
