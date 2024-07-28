<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const recipes = ref([])
const selectedRecipeId = ref(null)
const ingredients = ref([])
const numServings = ref(1)
const servingSize = ref(100)
const nutritionValues = ref(null)
</script>
<template>
    <div>

        <!-- for adding ingredient -->
        <v-select class="rounded-xl"
              v-model="selectedRecipeId"
              :items="recipes"
              item-title="name"
              item-value="id"
              label="Select a recipe"
              @update:model-value="loadIngredients"
              style="width: 780px; height: 50px;"
            ></v-select>


        <v-card border="sm" class="fixed-square" style="width: 780px">
            <v-row>
              <v-col cols="12">
                <v-list class="scrollable-list">
                  <v-list-item v-if="ingredients.length === 0">
                  </v-list-item>
                  <v-list-item v-for="ingredient in ingredients" :key="ingredient.id">
                    {{ ingredient.pivot.amount}}
                    {{ ingredient.pivot.unit}}
                    {{ ingredient.name}}
                  </v-list-item>
                </v-list>
              </v-col>
            </v-row>
          </v-card>
    </div>
</template>