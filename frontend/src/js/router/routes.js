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
    {
        path: "/register",
        component: () => import("@/pages/auth/RegisterPage.vue"),
    },
    {
        path: "/login",
        component: () => import("@/pages/auth/LoginPage.vue"),
    },
    {
        path: "/favorite",
        component: () => import("@/pages/food/FavoriteRecipes.vue"),
    },
    
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
