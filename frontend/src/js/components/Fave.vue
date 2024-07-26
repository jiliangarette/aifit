<template>
  <div>
    <div>
      <v-breadcrumbs class="text-h5 text-decoration-underline pl-6 mt-4">Recipe</v-breadcrumbs>
    </div>
    <div class="ml-5">
      <router-link to="favorite">
        <v-btn class="rounded-0 mr-4 bg-teal-accent-4 text-capitalize font-weight-bold" height="60" width="160">
          Favorites
        </v-btn>
      </router-link>
      <router-link to="meal-plan">
        <v-btn class="rounded-0 mr-4 text-capitalize text-teal-accent-4" height="60" width="160">
          Meal Plans
        </v-btn>
      </router-link>
    </div>
  </div>
</template>
