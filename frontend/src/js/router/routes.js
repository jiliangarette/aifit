import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("@/pages/HomePage.vue"),
    },
    {
        path: "/about",
        component: () => import("@/pages/AboutPage.vue"),
    },
    {
        path: "/recipe",
        component: () => import("@/pages/RecipePage.vue"),
    },
    {
        path: "/community",
        component: () => import("@/pages/CommunityPage.vue"),
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
