<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

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
  <v-container>
    <v-row>
      <v-col cols="12">
        <v-select v-model="selectedRecipeId" :items="recipes" item-title="name" item-value="id" label="Select a recipe"
          @update:model-value="loadIngredients"></v-select>
      </v-col>
    </v-row>

    <v-row v-if="ingredients.length">
      <v-col cols="12">
        <v-list>
          <v-list-item v-for="ingredient in ingredients" :key="ingredient.id">
            {{ ingredient.name }}
          </v-list-item>
        </v-list>
      </v-col>
    </v-row>

    <v-row>
      <v-col cols="12" sm="6">
        <v-text-field v-model.number="numServings" type="number" label="Number of servings"></v-text-field>
      </v-col>
      <v-col cols="12" sm="6">
        <v-text-field v-model.number="servingSize" type="number" label="Serving size"></v-text-field>
      </v-col>
    </v-row>

    <v-row>
      <v-col cols="12">
        <v-btn color="primary" @click="calculateNutrition">Calculate Recipe</v-btn>
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
  </v-container>
</template>
