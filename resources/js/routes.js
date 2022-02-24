import {createRouter, createWebHistory} from "vue-router";
import Logo from './components/Logo.vue';
import LogoSymbol from './components/LogoSymbol.vue';
import Colors from './components/Colors.vue';
import Typography from './components/Typography.vue';
import Mascot from './components/Mascot.vue';
import Illustrations from './components/Illustrations.vue';
import Wallpapers from './components/Wallpapers.vue';
import NotFound from './components/NotFound.vue';
import SiteStats from './components/SiteStats.vue';
import Achievements from "./components/Achievements";

let LoadersAnimations = () => import(/* webpackChunkName: "loaders" */'./components/LoadersAnimations.vue');

const routes = [
    {
        path: '/',
        component: Logo
    },
    {
        path: '/logo-symbol',
        component: LogoSymbol
    },
    {
        path: '/colors',
        component: Colors
    },
    {
        path: '/typography',
        component: Typography
    },
    {
        path: '/mascot',
        component: Mascot
    },
    {
        path: '/illustrations',
        component: Illustrations
    },
    {
        path: '/loaders-animations',
        component: LoadersAnimations
    },
    {
        path: '/wallpapers',
        component: Wallpapers
    },
    {
        path: '/site-stats',
        component: SiteStats
    },
    {
        path: '/achievements',
        component: Achievements
    },
    {
        path: '/:catchAll(.*)',
        component: NotFound
    },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
});

export default router;
