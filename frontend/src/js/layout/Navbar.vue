<template>
    <v-container fluid class="w-screen d-flex align-center justify-between pl-8 bg-teal-accent-4">
        <v-row class="">
            <v-list-item-content class="mx-6">
                <router-link to="/" class="text-white font-weight-bold text-decoration-none">AiFIT</router-link>
            </v-list-item-content>
        </v-row>
        <row class=" d-flex align-center justify-evenly pr-8">
            <v-list-item-content class="mx-6">
                <router-link to="/" class="text-white font-weight-semibold text-decoration-none">Home</router-link>
            </v-list-item-content>
            <v-list-item-content class="mx-6">
                <router-link to="/recipe"
                    class="text-white font-weight-semibold text-decoration-none">Recipe</router-link>
            </v-list-item-content>
            <v-list-item-content class="mx-6">
                <router-link to="/community"
                    class="text-white font-weight-semibold text-decoration-none">Community</router-link>
            </v-list-item-content>
            <v-list-item-content class="mx-6">
                <router-link to="/about" class="text-white font-weight-semibold text-decoration-none">About
                    us</router-link>
            </v-list-item-content>
            <v-list-item-content class="mx-6">
                <CircleUser class="text-white" />
            </v-list-item-content>
        </row>
    </v-container>
</template>
<script setup>
    import { CircleUser } from "lucide-vue-next";
</script>
