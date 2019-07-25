import Vue from 'vue';
import VueRouter from 'vue-router';
import HomeMap from "../components/HomeMap";
import ExampleComponent from "../components/ExampleComponent";
import RouteIndex from "../components/RouteIndex";

Vue.use(VueRouter);

export const router = new VueRouter({
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
    ],
});
