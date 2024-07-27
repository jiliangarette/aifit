<template>
 <v-row class="w-screen  pa-4">
  <v-col class=" w-full d-flex justify-center py-8" cols="12" md="3" xl="2">
   <v-col>
    <ContentCard background="teal-lighten-5">
     <!-- you can remove the bg color -->
     <v-col>
      <h2 class="py-4 d-flex align-center justify-center">Meal Planning</h2>
      <v-col class="meal-day rounded-lg" v-for="(props, index) in meals" :key="index">
       <a :href="`#mealDay${index + 1}`" class="text-decoration-none text-teal-darken-3">
        <v-row class="py-2 px-4">Day {{ index + 1 }}</v-row>
       </a>
      </v-col>
     </v-col>
    </ContentCard>
   </v-col>
  </v-col>

  <v-col class=" pa-8">
   <ContentCard background="teal-lighten-5" v-for="(meal, index) in meals" :key="meal" :id="`mealDay${index + 1}`">
    <h2>Day {{ index + 1 }}</h2>
    <p class="my-1">
     {{ meal.breakfast }}
    </p>

    <p class="my-1">
     {{ meal.launch }}
    </p>

    <p class="my-1">
     {{ meal.dinner }}
    </p>
   </ContentCard>
  </v-col>
 </v-row>
</template>
<script setup>
 import ContentCard from '@/components/ui/ContentCard.vue';
 import { ref } from 'vue';


 // onMounted(async () => {
 //        try {
 //            const response = await axios.get('/api/meal-plan');
 //            tasks.value = response.data.map((todo) => ({
 //                id: todo.id,
 //                name: todo.name,
 //                username: todo.username
 //            }));
 //        } catch (error) {
 //            console.log(`error ${error}`);
 //        }
 //    });
 // IF BACKEND API IS READY THEN SWITCH TO THIS
 const meals = ref(
  [
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
   {
    breakfast: 'Breakfast: Avocado Toast - 2 slices of whole-grain toast, 1 ripe avocado, sliced, 1 tomato, diced, 1 tablespoon of lemon juice, salt and pepper to taste.',
    launch: ' Lunch: Grilled Chicken Salad - 4 ounces of grilled chicken breast, mixed greens, cherry tomatoes, cucumber, red onion, 1 tablespoon of balsamic vinaigrette.',
    dinner: ' Dinner: Quinoa and Black Bean Stuffed Bell Peppers - 4 large bell peppers, 1 cup of cooked quinoa, 1 can of black  beans, 1 diced tomato, 1/2 diced onion, 1 clove of minced garlic, 1/2 teaspoon of chili powder, salt and pepper to taste.'
   },
  ]
 );
</script>
<style scoped>

 /* targets id attributes that has 'mealDay word in it' */
 .meal-day:hover {
  background-color: #00bfa5;
 }
</style>