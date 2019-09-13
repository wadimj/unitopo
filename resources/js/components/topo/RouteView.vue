<template>
    <div class="RouteView">
        <header class="py-5 bg-image-full" style="background-image: url('/images/sections/msw_1.jpg');">
        </header>

       <sui-container text class="ui raised very padded text container segment">

           <h1 is="sui-header" class="ui placeholder header" v-if="loading">
               <div class="line"></div>
               <div class="line"></div>
               <div class="line"></div>
           </h1>
           <h1 is="sui-header" v-if="!loading">{{ route.name }}</h1>
           <i v-if="!loading">{{ route.description }}</i>

           <div class="ui divider"></div>

           <div v-if="!loading" class="tag-info">
                <v-region-formatter :regions=route.regions ></v-region-formatter>
                <v-grade-formatter :grades=route.grades ></v-grade-formatter>
                <v-type-formatter :tags=route.tags v-bind:all-tags="true"></v-type-formatter>
           </div>
           <div class="ui placeholder" v-if="loading">
               <sui-label>&nbsp;</sui-label>
               <sui-label>&nbsp;</sui-label>
               <sui-label>&nbsp;</sui-label>
           </div>

           <div class="ui divider"></div>

           <div v-if="!loading" v-html="route.articles[0].content"></div>
           <div v-if="loading" class="ui placeholder">
               <div class="line" v-for="i in 15"></div>
           </div>
        </sui-container>
    </div>
</template>

<script>
    import store from '../../store/store';
    import {mapState} from 'vuex';
    import VGradeFormatter from './VGradeFormatter'
    import VTypeFormatter from './VTypeFormatter'
    import VRegionFormatter from './VRegionFormatter'

    export default {
        props: ['id'],
        components: {
            VGradeFormatter, VTypeFormatter, VRegionFormatter
        },
        beforeRouteEnter (to, from, next) {
            store.dispatch("routes/getFullRoute", to.params.id)
                .catch(error => {
                if (error.response) {
                    this.checkResponse(error.response.status);
                }
            });
            next();
        },
        computed: {
            ...mapState({
                route: state => state.routes.activeRoute,
                loading: state => state.loader.loading,
            }),
        }
    };
</script>

<style scoped>
    .bg-image-full{
        background-repeat: no-repeat;
        background-position: center;
        overflow: hidden;
        min-height: 15vh;
    }
    .GradeFormatter, .TypeFormatter, .RegionFormatter{
        display: inline-block;
    }
    .RegionFormatter{
        font-weight: bold;
    }
    .tag-info{
        line-height: 2em;
    }
    .ui.placeholder{
        max-width: 100%;
    }
</style>
