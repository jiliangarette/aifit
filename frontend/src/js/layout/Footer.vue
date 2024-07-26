<template>
    <v-container fluid class="w-screen d-flex align-center justify-center pl-8 py-12 bg-teal-darken-4" cols="3">
        <row class=" d-flex flex-column align-center justify-center pr-8 mr-8">
            <v-row class="">
                <v-list-item-content class="mx-6">
                    <router-link to="/community"
                        class="text-white font-weight-bold text-decoration-none text-h3">AiFIT</router-link>
                </v-list-item-content>

            </v-row>
            <v-row class=" ">
                <v-list-item-content class="mx-1">
                    <router-link to="/community" class="text-white text-decoration-none">c 2023
                        AiFit inc.</router-link>
                </v-list-item-content>
                <v-list-item-content class="mx-1">
                    <router-link to="/community" class="text-white  text-decoration-none">All rights
                        reserve.</router-link>
                </v-list-item-content>
            </v-row>

        </row>
        <row class=" d-flex flex-column  justify-evenly pr-8 w-33 ml-15">
            <v-row class="">
                <v-list-item-content class="mx-6">
                    <router-link to="/community" class="text-white font-weight-bold text-decoration-none">Subscribe
                        to our news letter</router-link>
                </v-list-item-content>

            </v-row>
            <v-row class=" px-4">
                <v-text-field placeholder="email address" variant="solo" class="input-height" />
                <v-btn class="btn-height px-8 font-weight-bold bg-cyan-accent-2" rounded="0">Subscribe</v-btn>
            </v-row>

        </row>
        <row class=" d-flex flex-column align-center justify-evenly pr-8">
            <v-row class=" py-2">

                <v-list-item-content class="mx-6">
                    <router-link to="/community"
                        class="text-white font-weight-semibold text-decoration-none pr-8">Follow us</router-link>
                </v-list-item-content>

                <v-list-item-content class="mx-3 ">
                    <Twitter class="text-white" fill="white" :size='32' />
                </v-list-item-content>
                <v-list-item-content class="mx-3 ">
                    <Instagram class="text-white" :size='32' />
                </v-list-item-content>
                <v-list-item-content class="mx-3 ">
                    <Facebook class="text-white" :size='32' />
                </v-list-item-content>

            </v-row>
            <v-row class=" py-2">
                <v-list-item-content class="mx-3">
                    <router-link to="/community" class="text-white font-weight-semibold text-decoration-none">Terms and
                        Conditions</router-link>
                </v-list-item-content>
                <v-list-item-content class="mx-3">
                    <router-link to="/about" class="text-white font-weight-semibold text-decoration-none">Privacy
                        Policy</router-link>
                </v-list-item-content> <v-list-item-content class="mx-3">
                    <router-link to="/about" class="text-white font-weight-semibold text-decoration-none">Contact
                        us</router-link>
                </v-list-item-content>
            </v-row>

        </row>
    </v-container>
</template>
<script setup>
import { Instagram, Facebook, Twitter } from "lucide-vue-next";
</script>
<style scoped>
.input-height {
    height: 57px;

}

.btn-height {
    height: 56px;
    z-index: 1;
    margin-left: -2px;
    font-size: 12px;
    text-transform: none;
}
</style>
