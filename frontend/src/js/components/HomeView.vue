<template>
  <div>
    <select v-model="selectedRecipeId" @change="loadIngredients">
      <option v-for="recipe in recipes" :key="recipe.id" :value="recipe.id">
        {{ recipe.name }}
      </option>
    </select>

    <ul v-if="ingredients.length">
      <li v-for="ingredient in ingredients" :key="ingredient.id">
        {{ ingredient.name }}
      </li>
    </ul>

    <input v-model.number="numServings" type="number" placeholder="Number of servings">
    <input v-model.number="servingSize" type="number" placeholder="Serving size">

    <button @click="calculateNutrition">Calculate</button>

    <div v-if="nutritionValues">
      <h3>Nutrition Values:</h3>
      <p>Calories: {{ nutritionValues.calories }}</p>
      <p>Fat: {{ nutritionValues.fat }}g</p>
      <p>Carbs: {{ nutritionValues.carbs }}g</p>
      <p>Protein: {{ nutritionValues.protein }}g</p>
    </div>
  </div>
</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const recipes = ref([]);
const selectedRecipeId = ref(null);
const ingredients = ref([]);
const numServings = ref(1);
const servingSize = ref(100);
const nutritionValues = ref(null);

const loadRecipes = async () => {
  const response = await axios.get('/api/recipes');
  recipes.value = response.data;
};

const loadIngredients = async () => {
  if (selectedRecipeId.value) {
    const response = await axios.get(`/api/recipes/${selectedRecipeId.value}/ingredients`);
    ingredients.value = response.data;
  }
};

const calculateNutrition = async () => {
  const response = await axios.post('/api/calculate-nutrition', {
    recipe_id: selectedRecipeId.value,
    num_servings: numServings.value,
    serving_size: servingSize.value
  });
  nutritionValues.value = response.data;
};

onMounted(() => {
  loadRecipes();
});
</script>