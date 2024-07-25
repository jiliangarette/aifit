<script setup>
import MainLayout from "@/layout/MainLayout.vue";
</script>
<template>
    <MainLayout>
        <div class="h-screen d-flex justify-center">

            <v-form v-model="valid" class="pa-10 p7-6 w-50 ">
                <v-container class="border-sm spacing-playground pa-6 ">
                    <h1>Log in</h1>
                    <v-col >


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



                        </v-col>
                         <p class="text-center mb-4">
                                                Need an Account?
                                                <a

                                                    class="text-teal-accent-4"
                                                    >Register</a
                                                >
                                            </p>


                        <v-btn class="mt-2" type="submit" block>Sign In</v-btn>

                </v-container>
            </v-form>
        </div>
    </MainLayout>
</template>