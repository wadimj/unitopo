<template>
    <div>
        <menubar></menubar>

        <sui-container class="main" text>
            <router-view></router-view>
        </sui-container>
    </div>
</template>

<script>
    export default {}
</script>

<style>
    .main{
        padding-top: 50px;
    }
</style>
