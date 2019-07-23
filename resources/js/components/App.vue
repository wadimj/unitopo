<template>
    <div>
        <menubar></menubar>
        <div class="main">
            <keep-alive>
                <router-view></router-view>
            </keep-alive>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style>
    .main{
        padding-top: 40px;
    }
</style>
