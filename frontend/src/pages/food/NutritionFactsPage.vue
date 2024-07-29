<template>
  <ContentCard class="rounded-xl ma-8 d-flex flex-column ">
    <v-col class=" px-8 mt-16">
      <v-row>
        <h1 class="my-8">{{ selectedRecipe.name }}</h1>
      </v-row>
      <v-img class="bg-grey-lighten-2 rounded-xl" height="450" :src="selectedRecipe.image_url" cover />
    </v-col>
    <v-row class="my-6 text-subtitle px-12">
      <p> {{ selectedRecipe.description }}</p>
    </v-row>
    <v-row class="px-16">

      <v-col class="d-flex flex-column">
        <v-row class="">
          <v-col>
            <h2>Ingredients</h2>
          </v-col>
          <v-col>
            <h2>Nutrition Facts</h2>
          </v-col>
        </v-row>
        <v-table class="transparent-table">
          <thead>
            <tr>
              <th class="text-h5 ">Ingredient</th>
              <th class="text-h6 ">Calories</th>
              <th class="text-h6 ">Total Fat</th>
              <th class="text-h6 "> Carbohydrates</th>
              <th class="text-h6 ">Protein</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="ingredient in selectedRecipe.recipe_ingredients" :key="ingredient.id">
              <td class="ingredient-col">
                {{ ingredient.ingredient.name }} ({{ ingredient.amount }} {{ ingredient.unit }})
              </td>
              <td class="nutrifact">
                {{ ingredient.ingredient.calories }}
              </td>
              <td class="nutrifact">
                {{ ingredient.ingredient.total_fat }}
              </td>
              <td class="nutrifact">
                {{ ingredient.ingredient.total_carbohydrates }}
              </td>
              <td class="nutrifact">
                {{ ingredient.ingredient.protein }}
              </td>
            </tr>
          </tbody>
        </v-table>
      </v-col>
    </v-row>
    <v-row>
      <v-col class="pa-8 pb-0">
        <h2>Health Benifits</h2>
        <p class="pa-8 pt-4">{{ selectedRecipe.healthAndBenefits }}</p>
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
    const response = await axios.get('/api/recipes'); //api/recipes

    foods.value = response.data; //remove recipes
    console.log(response.data)
  } catch (error) {
    console.log(`Error : ${error}`)
  }
})

const selectedRecipe = computed(() => {
  return foods.value.find(food => food.id === routeId.value) || {};
});

</script>
<style scoped>
.banner-image {
  object-fit: cover;
  object-position: center;

}

.transparent-table {
  width: 100%;
  border-collapse: collapse;
  background-color: transparent;
}

.nutrifact {
  width: 15%;
}
</style>