import { createRouter, createWebHistory } from 'vue-router'
import HomePage from '@/pages/HomePage.vue'
import AboutPage from '@/pages/AboutPage.vue'
import RecipePage from '@/pages/RecipePage.vue'
import CommunityPage from '@/pages/CommunityPage.vue'
import RegisterPage from '@/pages/auth/RegisterPage.vue'
import LoginPage from '@/pages/auth/LoginPage.vue'
import NotFound from '@/pages/NotFound.vue'
import FavoriteRecipes from '@/pages/food/FavoriteRecipes.vue'
import MealPlan from '@/pages/food/MealPlan.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: HomePage
  },
  {
    path: '/about',
    name: 'About',
    component: AboutPage
  },
  {
    path: '/community',
    name: 'Community',
    component: CommunityPage
  },
  {
    path: '/register',
    name: 'Register',
    component: RegisterPage
  },
  {
    path: '/login',
    name: 'Login',
    component: LoginPage
  },
  {
    path: '/recipe',
    name: 'Recipe',
    component: RecipePage,
    children: [
      {
        path: 'favorite',
        name: 'Favorite',
        component: FavoriteRecipes
      },
      {
        path: 'meal-plan',
        name: 'MealPlan',
        component: MealPlan
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
