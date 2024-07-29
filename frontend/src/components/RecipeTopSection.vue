<template>
  <div class="ma-8">
    <div>
      <div v-if="$route.name === 'MealPlan' || $route.name === 'Favorite'"> <v-breadcrumbs
          class="text-h5 pl-6 mt-4">Recipe / {{ $route.name }}</v-breadcrumbs></div>
      <div v-else> <v-breadcrumbs class="text-h5 pl-6 mt-4">Recipe / Favorite / {{ $route.name }}</v-breadcrumbs></div>
    </div>
    <div v-if="$route.name === 'MealPlan' || $route.name === 'Favorite'">

      <div class="ml-5 mt-4">
        <router-link class="button-link mx-1 py-5 px-12 rounded-md text-decoration-none" to="favorite">
          Favorites
        </router-link>
        <router-link class="button-link  mx-1 py-5 px-12 rounded-md text-decoration-none " to="meal-plan">
          Meal Plans
        </router-link>
      </div>
    </div>
    <div class="ml-5 mt-4" v-else>
      <router-link to="/recipe/favorite"
        class="button-link text-center pa-2 pt-10 px-15 rounded-md text-decoration-none">
        <MoveLeft size="42" color="white" strokeWidth="1" />
      </router-link>
    </div>
  </div>
</template>
<script setup>
  import { MoveLeft } from 'lucide-vue-next';</script>
<style>
  .button-link {
    border: 1px solid #00bfa5;
    color: #00bfa5;
  }

  .aifit-active {
    background-color: #00bfa5;
    font-weight: bold;
    color: white;
  }

  .button-link:hover {
    opacity: .9;
  }
</style>
