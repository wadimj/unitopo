<template>
    <div class="not-found">
        <div class="ui grid middle aligned segment red inverted" style="height: 100%; margin: 0;">
            <div class="ui column center aligned">
                <div class="ui inverted statistic">
                    <div class="value">404</div>
                    <div class="label">Error</div>
                </div>

                <div class="ui message red inverted">
                    <div class="header">Description</div>
                    <p>Not found</p>
                </div>

                <div class="ui message red inverted" v-if="env === 'development'">
                    <pre>{{error.data}}</pre>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        computed: {
            ...mapState({
                error: state => state.loader.error,
            }),
            env(){
                return process.env.NODE_ENV;
            }
        }
    }
</script>
<style>
    .not-found{
        height: 100vh;
        margin-top: -40px;
        padding-top: 40px;
    }
    pre{
        text-align: left;
    }
</style>
