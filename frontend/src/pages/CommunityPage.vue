<template>
    <MainLayout>
        <div class="h-screen">
            <router-link v-for="destination in destinations.recipe_" :key="destination.id" :to="`/${destination.slug}`">{{
                destination.name }}
                <img :src="`/images/${destination.image}`" :alt="destination.name"></router-link>
        </div>
    </MainLayout>
</template>
<script setup>
    import MainLayout from "@/layout/MainLayout.vue";
    import sourceData from '@/data.json';
    import { ref } from "vue";

    const destinations = ref(sourceData.recipes)
</script>
