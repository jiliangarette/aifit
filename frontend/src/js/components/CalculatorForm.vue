<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'


const recipes = ref([])
const selectedRecipeId = ref(null)
const ingredients = ref([])
const numServings = ref(1)
const servingSize = ref(100)
const nutritionValues = ref(null)

const loadRecipes = async () => {
  const response = await axios.get('/api/recipes')
  recipes.value = response.data
}

const loadIngredients = async () => {
  if (selectedRecipeId.value) {
    const response = await axios.get(`/api/recipes/${selectedRecipeId.value}/ingredients`)
    ingredients.value = response.data
  }
}

const calculateNutrition = async () => {
  const response = await axios.post('/api/calculate-nutrition', {
    recipe_id: selectedRecipeId.value,
    num_servings: numServings.value,
    serving_size: servingSize.value
  })
  nutritionValues.value = response.data
}

onMounted(() => {
  loadRecipes()
})
</script>

<template>
  <div>
      
    <v-container>
        <p class="my-6 text-subtitle-1 font-weight-bold">Easily calculate the nutritional value of your favorite recipes and meals with just a few clicks</p>
      <v-card width="700" height="750" class="bg-teal-lighten-5">
        <v-row>
          <v-col cols="12" class="pa-10 py-5  text-subtitle-1 font-weight-bold mt-6 ">Recipe
            <v-select class="rounded-pill  border-l-gray-400 "
              v-model="selectedRecipeId"
              :items="recipes"
              item-title="name"
              item-value="id"
              label="Select a recipe"
              @update:model-value="loadIngredients"
            ></v-select>
          </v-col>
        </v-row>

        <div>
          <v-container class="ml-3 text-subtitle-1 font-weight-bold ">Recipe Ingredients
            <v-card border="sm" class="fixed-square " style="width: 640px">
              <v-row>
                <v-col cols="12">
                  <v-list class="scrollable-list">
                    <v-list-item v-if="ingredients.length === 0">
                      
                    </v-list-item>
                    <v-list-item v-for="ingredient in ingredients" :key="ingredient.id">
                      {{ ingredient.name }}
                    </v-list-item>
                  </v-list>
                </v-col>
              </v-row>
            </v-card>
          </v-container>
        </div>

        <v-row class="mx-4 ">
          <v-col cols="12" sm="6" class="text-subtitle-1 font-weight-bold">
            No. of servings
            <v-text-field
              v-model.number="numServings"
              type="number"
              
              width="280"
            ></v-text-field>
          </v-col>
          <v-col cols="12" sm="6" class="text-subtitle-1 font-weight-bold">
            Serving size
            <v-text-field
              v-model.number="servingSize"
              type="number"
              
            ></v-text-field>
          </v-col>
        </v-row>

        <v-row>
          <v-col cols="12" class="d-flex justify-start ml-7 ">
            <v-btn color="primary" height="60" width="200" class="rounded-lg mr-4 text-capitalize bg-teal-darken-4" @click="calculateNutrition">Calculate recipe</v-btn>
          </v-col>
        </v-row>

        <v-row v-if="nutritionValues">
          <v-col cols="12">
            <v-card>
              <v-card-title>Nutrition Values:</v-card-title>
              <v-card-text>
                <p>Calories: {{ nutritionValues.calories }}</p>
                <p>Fat: {{ nutritionValues.fat }}g</p>
                <p>Carbs: {{ nutritionValues.carbs }}g</p>
                <p>Protein: {{ nutritionValues.protein }}g</p>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-card>
    </v-container>
  </div>
</template>

<style>
.fixed-square {
  width: 100px;
  height: 300px;
  overflow-y: scroll;
}

.scrollable-list {
  max-height: 100%;
  overflow-y: auto;
}
</style>
