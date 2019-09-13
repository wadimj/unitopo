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

           <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa <b>strong</b>. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                dictum felis eu pede <a href="javascript:void 0">link</a> mollis pretium.
                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                ultricies nisi.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa <b>strong</b>. Cum sociis natoque penatibus
                et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                dictum felis eu pede <a href="javascript:void 0">link</a> mollis pretium.
                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
                Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
                ultricies nisi.
            </p>
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
</style>
