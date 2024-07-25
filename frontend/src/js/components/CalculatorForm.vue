<template>
    <div class="flex">
    <v-card color="#ebf2f3" style="width: 55%;">
      <v-card-title>Select Recipe</v-card-title>
      <v-select
        v-model="selectedRecipeId"
        :items="recipes"
        item-text="name"
        item-value="id"
        label="Select"
        @change="loadIngredients"
        style="width: 95%; padding-left: 1rem;"
      ></v-select>
      
        <v-textarea
            label="Ingredients"
            variant="outlined"
            auto-grow="auto-grow"
            style="width: 95%; padding-left: 1rem;"></v-textarea>

            <v-row>
            <v-col>
          <v-text-field
            v-model.number="numServings"
            label="No. of Serving(s)"
            type="number"
            variant="outlined"
            style="width: 90%; padding-left: 1rem;"
          ></v-text-field>
        </v-col>
        <v-col>
          <v-text-field
            v-model.number="servingSize"
            label="Serving Size"
            type="number"
            variant="outlined"
            style="width: 90%; padding-left: 1rem;"
          ></v-text-field>
        </v-col>
      </v-row>
      <v-col cols="auto">
            <v-btn color="#024A42" size="x-large">Calculate Recipe</v-btn>
        </v-col>
    </v-card>
    <v-row>
        <v-col cols="6">
      <v-card color="#ebf2f3" style="width: 100%;">
        </v-card>
    </v-col>
    <v-col cols="6">
      <!-- <v-container class="bg-surface-variant">
        </v-container> -->
    </v-col>
    </v-row>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const recipes = ref([]);
const selectedRecipeId = ref(null);
const ingredients = ref([]);
const numServings = ref(0);
const servingSize = ref(0);
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