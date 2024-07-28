<template>
 <ContentCard class="rounded-xl ma-8 d-flex flex-column ">
  <v-col class="border px-8 mt-16">
   <v-row>
    <h1 class="my-8">{{ selectedFood.name }}</h1>
   </v-row>
   <v-img class="bg-grey-lighten-2 rounded-xl" height="450"
    src="https://i.pinimg.com/236x/a5/7a/da/a57ada9962153de831f02e5d2f643797.jpg" cover />
  </v-col>
  <v-row class="my-6 text-subtitle px-12">
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta tempora nihil, mollitia, nostrum vero nam labore
    inventore dolor pariatur voluptate consectetur officiis nemo tenetur doloremque est odio sunt quia!
    Repudiandae.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quaerat, commodi animi obcaecati
    maxime modi incidunt natus facere laborum itaque officiis doloremque provident sunt dicta ex alias recusandae,
    cumque rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque dolor culpa maxime nam. Tempore
    cupiditate nam a beatae doloremque itaque similique? Perspiciatis saepe praesentium at tenetur vitae iure quo
    impedit.</p>
  </v-row>
  <v-row class="px-16">
   <v-col class="d-flex flex-column">
    <h3 class="py-12">Ingredients</h3>
    <v-row v-for="ingredient in selectedFood.recipe_ingredients" :key="ingredient.id">
     {{ ingredient.ingredient.name }} ({{ ingredient.amount }} {{ ingredient.unit }})
    </v-row>

   </v-col>
   <v-col class="d-flex flex-column">
    <h3 class="py-12">Nutrition Facts (per serving, based on 8 servings):</h3>
    <v-row>engredients</v-row>
    <v-row>engredients</v-row>
    <v-row>engredients</v-row>
    <v-row>engredients</v-row>
    <v-row>engredients</v-row>
    <v-row>engredients</v-row>
   </v-col>

  </v-row>
 </ContentCard>
</template>
<script setup>
 import ContentCard from '@/components/ui/ContentCard.vue';
 import axios from 'axios';
 import { computed, onMounted, ref } from 'vue';
 import { useRoute } from 'vue-router';



 const route = useRoute();
 const foods = ref([])

 const routeId = computed(() => parseInt(route.params.id))

 onMounted(async () => {
  try {
   const response = await axios.get('https://run.mocky.io/v3/47f89c81-b9b8-41e5-aba9-564b61f66eb5');
   foods.value = response.data.recipes;
  } catch (error) {
   console.log(`Error : ${error}`)
  }
 })

 const selectedFood = computed(() => {
  return foods.value.find(food => food.id === routeId.value) || {};
 });

 // get the params id and convert into number
 // find the recipe id and through axios
 // compare both params id is equal to recipe id ex: 1 === 1
 // use computed property
</script>
<style scoped>
 .banner-image {
  object-fit: cover;
  object-position: center;

 }
</style>