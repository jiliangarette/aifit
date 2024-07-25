<script setup>
import MainLayout from "@/layout/MainLayout.vue";
</script>
<template>
    <MainLayout>
        <div class="h-screen d-flex justify-center">

            <v-form v-model="valid" class="pa-10 py-5 w-50 ">
                <v-container class="border-sm spacing-playground pa-6 ">
                    <h1>Register</h1>
                    <v-col >
                        <v-col cols="12" >
                            <v-text-field
                                v-model="name"
                                label="Name"
                                hide-details
                                required
                            ></v-text-field>
                        </v-col>

                        <v-col cols="12">
                            <v-text-field
                                v-model="email"
                                :rules="emailRules"
                                label="E-mail"
                                hide-details
                                required
                            ></v-text-field>
                        </v-col>

                        <v-col cols="12">
                            <v-text-field
                                v-model="password"
                                :counter="10"
                                :rules="nameRules"
                                label="Password"
                                hide-details
                                required
                            ></v-text-field>
                        </v-col>

                        <v-col cols="12" >
                            <v-text-field
                            v-model="password_confirmation"
                            label="Confirm Password"
                            outlined
                            dense
                            type="password"
                            class="mb-3"
                        ></v-text-field>
                        </v-col>
                         <p class="text-center mb-2">
                                            Already have an account?
                                            <a

                                                class="text-teal-accent-4"
                                                >Log in</a
                                            >
                                        </p>


                        <v-btn class="mt-2" type="submit" block>Submit</v-btn>
                    </v-col>
                </v-container>
            </v-form>
        </div>
    </MainLayout>
</template>