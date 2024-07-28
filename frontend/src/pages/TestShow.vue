<template>
 <div>
  <h2>Hello {{ routeParamsId }}</h2>
  <h1>{{ destination.name }}</h1>
  <img :src="`/images/${destination.image}`" :alt="destination.name">
  <p>{{ destination.description }}</p>
 </div>
</template>

<script setup>
 import { computed } from 'vue';
 import { useRoute } from 'vue-router';
 import sourceData from '@/data.json';

 // Access the route
 const route = useRoute();

 // Get the destination ID from route params
 const routeId = computed(() => parseInt(route.params.id));

 // Find the destination based on the ID
 const destination = computed(() => {
  return sourceData.destinations.find(destination => destination.id === routeId.value);
 });
</script>
