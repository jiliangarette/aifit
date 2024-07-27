<template>
  <MainLayout>
    <RecipeTopSection />
    <router-view />
  </MainLayout>
</template>
<script setup>
  import MainLayout from "@/layout/MainLayout.vue";
  import RecipeTopSection from "@/components/RecipeTopSection.vue";
</script>
