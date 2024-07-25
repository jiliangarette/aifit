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
                <v-btn-group color="#b2d7ef" density="comfortable" rounded="pill" divided>
                    <v-btn class="bg-transparent">
                        <CircleUser class="text-white" />
                        <v-menu activator="parent" location="bottom end" transition="fade-transition">
                            <v-list density="compact" min-width="250" rounded="lg"
                                class="d-flex justify-between flex-column">
                                <router-link to="/register"
                                    class="text-teal-accent-4 underline-none font-weight-bold text-decoration-none">
                                    <v-list-item
                                        class="text-h6 text-teal-accent-4 underline-none font-weight-semibold text-decoration-none pt-4 mx-2"
                                        title="Register"></v-list-item>
                                </router-link> <router-link to="/login"
                                    class="text-teal-accent-4 underline-none font-weight-bold text-decoration-none">
                                    <v-list-item
                                        class="text-h6 text-teal-accent-4 underline-none font-weight-semibold text-decoration-none pt-4 mx-2"
                                        title="Login"></v-list-item>
                                </router-link>
                                <v-list-item min-height="24"> </v-list-item>
                            </v-list>
                        </v-menu>
                    </v-btn>
                </v-btn-group>

            </v-list-item-content>

        </row>
    </v-container>
</template>
<script setup>
    import { CircleUser } from "lucide-vue-next";
</script>
