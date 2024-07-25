<template>
    <MainLayout>

        <Fave />
        <router-view />
    </MainLayout>
</template>
<script setup>
    import MainLayout from "@/layout/MainLayout.vue";
    import Fave from "@/components/Fave.vue";
</script>
