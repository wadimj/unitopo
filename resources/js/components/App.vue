<template>
    <div class="app">
        <the-menubar></the-menubar>
        <div class="main">
            <keep-alive include="route.index">
                <router-view v-if="!error"></router-view>
            </keep-alive>
            <not-found v-if="error.status == 404"></not-found>
        </div>
    </div>
</template>

<script>
    import TheMenubar from './TheMenubar'
    import store from '../store/store';
    import {mapState} from 'vuex';
    import NProgress from 'nprogress/nprogress';
    import NotFound from './errors/NotFound'

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
            NotFound
        },
        computed: {
            ...mapState({
                loading: state => state.loader.loading,
                error: state => state.loader.error,
            }),
        }
    }
</script>

<style scoped>
    .main{
        padding-top: 40px;
    }
</style>
