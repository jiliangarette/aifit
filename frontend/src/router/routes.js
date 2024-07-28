import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '@/pages/HomePage.vue'
import NotFound from '@/pages/NotFound.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: HomePage
  },
  {
    path: '/about',
    name: 'About',
    component: () => import('@/pages/AboutPage.vue')
  },
  {
    path: '/community',
    name: 'Community',
    component: () => import('@/pages/CommunityPage.vue')
  },
  {
    path: '/register',
    name: 'Register',
    component: () => import('@/pages/auth/RegisterPage.vue')
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('@/pages/auth/LoginPage.vue')
  },
  {
    path: '/recipe',
    name: 'Recipe',
    component: () => import('@/pages/RecipePage.vue'),
    children: [
      {
        path: 'meal-plan',
        name: 'MealPlan',
        component: () => import('@/pages/food/MealPlan.vue')
      },
      {
        path: 'favorite',
        name: 'Favorite',
        component: () => import('@/pages/food/FavoriteRecipes.vue'),
        children: [
          {
            path: 'nutrition-facts/:id',
            name: 'NutritionFacts',
            component: () => import('@/pages/food/NutritionFactsPage.vue')
          }
        ]
      }
    ]
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound
  }
]

export default createRouter({
  history: createWebHistory(),
  routes,
  linkActiveClass: 'aifit-active'
})
