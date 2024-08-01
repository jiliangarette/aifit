<script setup>
  import axios from 'axios';
  import { onMounted, ref } from 'vue';
  //https://run.mocky.io/v3/dfaf5225-4e83-4415-bace-46ac8813d812
  //https://run.mocky.io/v3/977e1b1d-c8d5-4872-bcff-f1db518931f5
  //https://run.mocky.io/v3/47f89c81-b9b8-41e5-aba9-564b61f66eb5
  const foods = ref([]);
  onMounted(
    async () => {
      try {
        const response = await axios.get('api/recipes'); // 'api/recipes'
        foods.value = response.data; //remove recipes after switch
      } catch (error) { console.log(`Error: ${error}`) }
    }
  )


</script>
<template>
  <v-row class="pa-6 mt-6  ">
    <v-row v-if="$route.name === 'NutritionFacts'"><router-view /></v-row>
    <v-row v-else class="w-100 d-flex items-center justify-center">
      <router-link v-for="food in foods" :key="food"
        :to="`favorite/nutrition-facts/${food.id}/${food.name.toLowerCase().replace(/\s+/g, '-')}`"
        class="link d-flex justify-center items-center flex-column ma-2" cols="12" md="4">
        <v-col>
          <v-card elevation="0" class="recipe-card pa-6 rounded-xl">
            <v-card class="mx-auto" :image="food.image_url" height="350" width="350" rounded="lg" />
            <div class="mt-2 text-h6 font-weight-bold text-h6">{{ food.name }}</div>
            <p>{{ food.description }}</p>
          </v-card>
        </v-col>
      </router-link>
    </v-row>
  </v-row>
</template>
<style scoped>
  .recipe-card:hover {
    box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3) !important;
  }

  .link {
    text-decoration: none;
  }
</style>
