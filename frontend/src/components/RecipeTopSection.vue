<template>
  <div class="ma-8">
    <div>

      <v-breadcrumbs class="text-h5 pl-6 mt-4">Recipe / {{ $route.name }}</v-breadcrumbs>
    </div>
    <div class="ml-5 mt-4">
      <router-link class="border mx-1 py-4 px-4 rounded-lg text-decoration-none" to="favorite">

        Favorites

      </router-link>
      <router-link class="border mx-1 py-4 px-4 rounded-lg text-decoration-none " to="meal-plan">

        Meal Plans

      </router-link>
    </div>
  </div>
</template>
<style>
.aifit-active {
  background-color: #00bfa5;
  font-weight: bold;
  color: white;
}
</style>
