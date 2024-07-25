<script setup>
import MainLayout from '@/layout/MainLayout.vue'
import { ref } from 'vue'
import axios from 'axios'

const email = ref('')
const password = ref('')
const error = ref('')
const valid = ref(false)

const login = async () => {
  try {
    const response = await axios.post('/api/login', {
      email: email.value,
      password: password.value
    })

    // Store the token in localStorage
    localStorage.setItem('token', response.data.token)

    console.log('Login successful')
  } catch (e) {
    error.value = 'Login failed. Please try again.'
  }
}
</script>

<template>
  <MainLayout>
    <div class="h-screen d-flex justify-center">
      <v-form @submit.prevent="login" v-model="valid" class="pa-10 p7-6 w-50">
        <v-container class="border-sm spacing-playground pa-6">
          <h1>Log in</h1>
          <v-col>
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
            <a class="text-teal-accent-4">Register</a>
          </p>

          <v-btn class="mt-2" type="submit" block>Sign In</v-btn>
          <p v-if="error" style="color: red; margin-top: 10px">{{ error }}</p>
        </v-container>
      </v-form>
    </div>
  </MainLayout>
</template>
