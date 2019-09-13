<!--suppress ALL -->
<template>
    <div class="RouteIndex">

        <sui-table celled>
            <sui-table-header>
                <sui-table-row>
                    <sui-table-header-cell>Region</sui-table-header-cell>
                    <sui-table-header-cell>Name</sui-table-header-cell>
                    <sui-table-header-cell>Grade</sui-table-header-cell>
                    <sui-table-header-cell>Type</sui-table-header-cell>
                    <sui-table-header-cell>Description</sui-table-header-cell>
                </sui-table-row>
            </sui-table-header>

            <sui-table-body v-if="loading" class="loading">
                <sui-table-row colspan="5">
                    <sui-table-cell>Loading...</sui-table-cell>
                </sui-table-row>
            </sui-table-body>

            <sui-table-body v-if="error" class="error">
                <sui-table-row>
                    <sui-table-cell colspan="5">{{ error }}</sui-table-cell>
                </sui-table-row>
                <sui-table-row>
                    <sui-table-cell colspan="5">
                        <button @click.prevent="fetchData">
                            Try Again
                        </button>
                    </sui-table-cell>
                </sui-table-row>
            </sui-table-body>

            <sui-table-body v-if="!loading">
                <sui-table-row v-for="route in routes" :key="route.id">
                    <sui-table-cell>
                        <v-region-formatter :regions=route.regions></v-region-formatter>
                    </sui-table-cell>
                    <sui-table-cell>
                        <router-link :to="{ name: 'route.view', params: {id: route.id, route: route}}">
                            {{ route.name }}
                        </router-link>
                    </sui-table-cell>
                    <sui-table-cell>
                        <v-grade-formatter :grades=route.grades ></v-grade-formatter>
                    </sui-table-cell>
                    <sui-table-cell>
                        <v-type-formatter :tags=route.tags ></v-type-formatter>
                    </sui-table-cell>
                    <sui-table-cell>{{ route.description }}</sui-table-cell>
                </sui-table-row>
            </sui-table-body>

            <sui-table-footer>
                <sui-table-row>
                    <sui-table-header-cell colspan="4">
                        <sui-menu v-sui-floated:right pagination>
                            <a is="sui-menu-item" :disabled="! prevPage" @click.prevent="goToPrev">
                                <sui-icon name="left chevron" />
                            </a>

                            <a is="sui-menu-item" :disabled="! nextPage" @click.prevent="goToNext">
                                <sui-icon name="right chevron" />
                            </a>
                        </sui-menu>
                    </sui-table-header-cell>
                </sui-table-row>
            </sui-table-footer>
        </sui-table>

    </div>
</template>

<script>
    import store from '../store/store';
    import {mapState} from 'vuex';
    import VGradeFormatter from './topo/VGradeFormatter'
    import VTypeFormatter from './topo/VTypeFormatter'
    import VRegionFormatter from './topo/VRegionFormatter'

    export default {
        components: {
            VGradeFormatter, VTypeFormatter, VRegionFormatter
        },
        beforeRouteEnter (to, from, next) {
            store.dispatch('routes/getRoutes', to.query.page);
            next();
        },
        beforeRouteUpdate (to, from, next) {
            store.dispatch('routes/getRoutes', to.query.page);
            next();
        },
        methods: {
            goToNext() {
                this.$router.push({
                    query: {
                        page: this.nextPage,
                    },
                });
            },
            goToPrev() {
                this.$router.push({
                    name: 'route.index',
                    query: {
                        page: this.prevPage,
                    }
                });
            },
        },
        computed: {
            ...mapState({
                routes: state => state.routes.routes,
                meta: state => state.routes.meta,
                links: state => state.routes.links,
                loading: state => state.loader.loading,
                error: state => state.loader.error,
            }),
            nextPage() {
                if (! this.meta || this.meta.current_page === this.meta.last_page) {
                    return;
                }

                return this.meta.current_page + 1;
            },
            prevPage() {
                if (! this.meta || this.meta.current_page === 1) {
                    return;
                }

                return this.meta.current_page - 1;
            },
            paginatonCount() {
                if (! this.meta) {
                    return;
                }

                const { current_page, last_page } = this.meta;
                return `${current_page} of ${last_page}`;
            },
        },
    }
</script>

<style>
    .grade-label{
        display: inline-flex !important;
    }
</style>
