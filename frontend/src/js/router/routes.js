import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("@/pages/Home.vue"),
    },
    {
        path: "/about",
        component: () => import("@/pages/About.vue"),
    },
    {
        path: "/recipe",
        component: () => import("@/pages/Recipe.vue"),
    },
    {
        path: "/community",
        component: () => import("@/pages/Community.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
