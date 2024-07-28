<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const name = ref('')
const description = ref('')
const healthAndBenefits = ref('')
const image = ref(null)
const servingSize = ref(100)
const postIngredients = ref([])

const selectedIngredientId = ref(null)
const ingredientAmount = ref('')
const ingredientUnit = ref('')
const ingredients = ref([])

const onFileChange = (e) => {
  image.value = e.target.files[0]
}

const loadIngredients = async () => {
  const response = await axios.get('/api/ingredients')
  ingredients.value = response.data
}

const addIngredient = () => {
  if (selectedIngredientId.value && ingredientAmount.value && ingredientUnit.value) {
    const selectedIngredient = ingredients.value.find(
      (ingredient) => ingredient.id === selectedIngredientId.value
    )

    if (selectedIngredient) {
      postIngredients.value.push({
        id: selectedIngredientId.value,
        name: selectedIngredient.name, // Store the name along with the id
        amount: ingredientAmount.value,
        unit: ingredientUnit.value
      })
    }

    // Reset the fields
    selectedIngredientId.value = null
    ingredientAmount.value = ''
    ingredientUnit.value = ''
  }
}

const addRecipe = async () => {
  const formData = new FormData()
  formData.append('name', name.value)
  formData.append('description', description.value)
  formData.append('healthAndBenefits', healthAndBenefits.value)
  formData.append('serving_size', servingSize.value)
  formData.append('image', image.value)

  postIngredients.value.forEach((ingredient, index) => {
    formData.append(`ingredients[${index}][id]`, ingredient.id)
    formData.append(`ingredients[${index}][amount]`, ingredient.amount)
    formData.append(`ingredients[${index}][unit]`, ingredient.unit)
  })

  // Log the formData
  for (let [key, value] of formData.entries()) {
    console.log(key, value)
  }

  try {
    const response = await axios.post('/api/recipes', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    })
    console.log('Response:', response.data)
    postIngredients.value = ref([])
  } catch (error) {
    console.error('Error during request:', error)
    if (error.response) {
      console.error('Response data:', error.response.data)
    }
  }
}

onMounted(() => {
  loadIngredients()
})
</script>

<template>
  <div>
    <!-- for name -->
    <v-text-field v-model="name" type="text" class="w-70" label="Name"></v-text-field>

    <!-- for description -->
    <v-textarea label="Description" v-model="description" required></v-textarea>

    <!-- for health and benefits -->
    <v-textarea label="Health and Benefits" v-model="healthAndBenefits" required></v-textarea>

    <!-- for image -->
    <v-file-input
      label="Image"
      v-model="image"
      accept="image/*"
      @change="onFileChange"
      required
    ></v-file-input>

    <!-- for adding serving size -->
    <v-text-field
      v-model.number="servingSize"
      type="number"
      class="w-70"
      label="Serving Size"
    ></v-text-field>

    <!-- for adding ingredient -->
    <v-select
      class="rounded-xl"
      v-model="selectedIngredientId"
      :items="ingredients"
      item-title="name"
      item-value="id"
      label="Select ingredient"
      style="width: 780px; height: 50px"
    ></v-select>

    <!-- for ingredient amount -->
    <v-text-field v-model="ingredientAmount" type="text" class="w-70" label="Amount"></v-text-field>

    <!-- for ingredient unit -->
    <v-text-field v-model="ingredientUnit" type="text" class="w-70" label="Unit"></v-text-field>

    <v-btn @click="addIngredient">Add Ingredient</v-btn>

    <!-- display added ingredients -->
    <div v-if="!postIngredients.value">
      <v-list>
        <v-list-item v-for="(ingredient, index) in postIngredients" :key="index">
          <v-list-item-content>
            <v-list-item-title>
              {{ ingredient.name }} - Amount: {{ ingredient.amount }} Unit: {{ ingredient.unit }}
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </div>

    <v-row>
      <v-col cols="12" class="d-flex justify-start ml-7">
        <v-btn
          height="60"
          width="250"
          class="rounded-lg mr-4 text-capitalize bg-teal-darken-4"
          @click="addRecipe"
          >Add recipe</v-btn
        >
      </v-col>
    </v-row>
  </div>
</template>
