<template>
    <MainLayout>
        <div class="">
            <!-- Loop through the first recipe's ingredients -->
            <div v-for="(ingredientName, index) in recipe_ingredients" :key="index">
                {{ ingredientName.ingredient.name }}
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
    import MainLayout from "@/layout/MainLayout.vue";
    import sourceData from '@/data.json';
    import { ref } from "vue";

    // Assuming sourceData.recipes is an array and we are using the first recipe
    const recipe = ref(sourceData.recipes[1]); // Get the first recipe
    const recipe_ingredients = ref(recipe.value.recipe_ingredients); // Access its ingredients
</script>
