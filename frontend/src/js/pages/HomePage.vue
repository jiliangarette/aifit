<template>
    <MainLayout>
        <HomeView />
        <HomeBanner />
        <CalculatorForm />

    </MainLayout>
</template>

<script setup>

import MainLayout from "@/layout/MainLayout.vue";
import HomeView from "@/components/HomeView.vue";
import CalculatorForm from "@/components/CalculatorForm.vue";
import HomeBanner from "@/components/HomeBanner.vue";

</script>
