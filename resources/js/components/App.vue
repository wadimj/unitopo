<template>
    <div>
        <the-menubar></the-menubar>
        <div class="main">
            <keep-alive include="route.index">
                <router-view></router-view>
            </keep-alive>
        </div>
    </div>
</template>

<script>
    import TheMenubar from './TheMenubar'
    import store from '../store/store';
    import NProgress from 'nprogress/nprogress';

    NProgress.configure({ easing: 'ease', speed: 500, showSpinner: false });

    store.watch(
        state => state.loader.loading,
        (newVal, oldVal) => {
            if (newVal === 0) return NProgress.done();
            if (oldVal === 0) return NProgress.start();
            NProgress.set(1.8 / Math.max(oldVal, newVal));
        },
    );

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
