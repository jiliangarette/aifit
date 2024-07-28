<template>
    <div class="d-flex justify-center my-4">
      <v-btn 
        class="rounded-lg mr-4 text-capitalize bg-teal-darken-4"
        height="60"
        width="400"
        @click="dialog = true"
      >
        Add Recipe
      </v-btn>
  
      <v-dialog v-model="dialog" max-width="800">
        <v-card>
          <v-row>
            <v-col cols="12" class="text-center">
              <p class="my-6 text-subtitle-2 font-weight-bold">Easily calculate the nutritional value of your favorite recipes and meals with just a few clicks</p>
            </v-col>
          </v-row>
  
          <v-row>
            <!-- Column for the Recipe Card -->
            <v-col cols="12" class="pa-0">
              <v-container class="mx-0 my-0 pa-0 ml-10">
                <v-card width="100%" height="100%" class="bg-teal-lighten-5">
                  <v-row>
                    <v-col cols="12" class="pa-10 py-5 text-subtitle-1 font-weight-normal mt-6 ml-2">
                      Recipe
                      <v-select class="rounded-xl"
                        v-model="selectedRecipeId"
                        :items="recipes"
                        item-title="name"
                        item-value="id"
                        label="Select a recipe"
                        @update:model-value="loadIngredients"
                        style="width: 780px; height: 50px;"
                      ></v-select>
                    </v-col>
                  </v-row>
  
                  <div>
                    <v-container class="ml-9 text-subtitle-1 font-weight-bold mx-0 pa-0 mt-7">
                      Recipe Ingredients
                      <v-card border="sm" class="fixed-square" style="width: 780px">
                        <v-row>
                          <v-col cols="12">
                            <v-list class="scrollable-list">
                              <v-list-item v-if="ingredients.length === 0">
                                No ingredients available.
                              </v-list-item>
                              <v-list-item v-for="ingredient in ingredients" :key="ingredient.id">
                                {{ ingredient.pivot.amount }} {{ ingredient.pivot.unit }} {{ ingredient.name }}
                              </v-list-item>
                            </v-list>
                          </v-col>
                        </v-row>
                      </v-card>
                    </v-container>
                  </div>
  
                  <v-row class="mx-7 mt-4">
                    <v-col cols="12" sm="6" class="text-subtitle-1 font-weight-bold">
                      No. of servings
                      <v-text-field
                        v-model.number="numServings"
                        type="number"
                        class="w-70"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6" class="text-subtitle-1 font-weight-bold">
                      Serving size
                      <v-text-field
                        v-model.number="servingSize"
                        type="number"
                        class="w-70"
                      ></v-text-field>
                    </v-col>
                  </v-row>
  
                  <v-row>
                    <v-col cols="12" class="d-flex justify-start ml-7">
                      <v-btn height="60" width="250" class="rounded-lg mr-4 text-capitalize bg-teal-darken-4" @click="calculateNutrition">Calculate recipe</v-btn>
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
            </v-col>
          </v-row>
  
          <v-divider></v-divider>
  
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn variant="plain" @click="dialog = false">Close</v-btn>
            <v-btn color="primary" variant="tonal" @click="dialog = false">Save</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue'
  import axios from 'axios'
  
  const dialog = ref(false)
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
  
  <style scoped>
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
  