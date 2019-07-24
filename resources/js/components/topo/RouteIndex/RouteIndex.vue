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

            <sui-table-body v-if="routes">
                <sui-table-row v-for="{ id, name, grades, tags, description, regions } in routes" :key="id">
                    <sui-table-cell>
                        <region-formatter :regions=regions></region-formatter>
                    </sui-table-cell>
                    <sui-table-cell>{{ name}}</sui-table-cell>
                    <sui-table-cell>
                        <grade-formatter :grades=grades ></grade-formatter>
                    </sui-table-cell>
                    <sui-table-cell>
                        <type-formatter :tags=tags ></type-formatter>
                    </sui-table-cell>
                    <sui-table-cell>{{ description }}</sui-table-cell>
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
    import axios from 'axios';
    import GradeFormatter from '../GradeFormatter/GradeFormatter'
    import TypeFormatter from '../TypeFormatter/TypeFormatter'
    import RegionFormatter from '../RegionFormatter/RegionFormatter'

    const getRoutes = (page, callback) => {
        const params = { page };

        axios
            .get('/api/routes', { params })
            .then(response => {
                callback(null, response.data);
            }).catch(error => {
            callback(error, error.response.data);
        });
    };

    export default {
        data() {
            return {
                loading: false,
                routes: null,
                meta: null,
                links: {
                    first: null,
                    last: null,
                    next: null,
                    prev: null,
                },
                error: null,
            };
        },
        components: {
            GradeFormatter, TypeFormatter, RegionFormatter
        },
        computed: {
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
        beforeRouteEnter (to, from, next) {
            getRoutes(to.query.page, (err, data) => {
                next(vm => vm.setData(err, data));
            });
        },
        beforeRouteUpdate (to, from, next) {
            this.loading = true;
            this.routes = this.links = this.meta = null
            getRoutes(to.query.page, (err, data) => {
                this.setData(err, data);
                next();
            });
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
            setData(err, { data: routes, links, meta }) {
                this.loading = false;
                if (err) {
                    this.error = err.toString();
                } else {
                    this.routes = routes;
                    this.links = links;
                    this.meta = meta;
                }
            },
        }
    }
</script>
