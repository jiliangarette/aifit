<template>
  <MainLayout>
    <RecipeTopSection />
    <router-view />
    <RecipeCallToAction />

    <CreateRecipeForm /> 

    <RecipeDescription />
  </MainLayout>
</template>
<script setup>

  import CreateRecipeForm from "@/components/CreateRecipeForm.vue";

  import MainLayout from "@/layout/MainLayout.vue";
  import RecipeTopSection from "@/components/RecipeTopSection.vue";
  import RecipeCallToAction from "@/components/RecipeCallToAction.vue";
  import RecipeDescription from "@/components/RecipeDescription.vue";
</script>
