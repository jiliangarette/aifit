<template>
    <MainLayout>
        <HomeBanner />
        <CalculatorForm />
        <ExploreMore />
    </MainLayout>
</template>

<script setup>
    import MainLayout from "@/layout/MainLayout.vue";
    import CalculatorForm from "@/components/CalculatorForm.vue";
    import HomeBanner from "@/components/HomeBanner.vue";
    import ExploreMore from "@/components/ExploreMore.vue";
</script>
