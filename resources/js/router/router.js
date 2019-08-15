import Vue from 'vue';
import VueRouter from 'vue-router';
import HomeMap from "../components/HomeMap";
import ExampleComponent from "../components/ExampleComponent";
import RouteIndex from "../components/RouteIndex";
import RouteView from "../components/topo/RouteView";
import NotFound from "../components/errors/NotFound"

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeMap
        },
        {
            path: '/hello',
            name: 'hello',
            component: ExampleComponent,
        },
        {
            path: '/routes',
            name: 'route.index',
            component: RouteIndex,
        },
        {
            path: '/routes/:id',
            name: 'route.view',
            component: RouteView,
            props: true
        },
        {
            path: '*',
            component: NotFound
        }
    ],
});
