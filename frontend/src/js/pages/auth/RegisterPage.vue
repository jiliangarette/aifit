<script setup>
import MainLayout from '@/layout/MainLayout.vue'
import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

const router = useRouter()

const form = ref({
  name: '',
  email: '',
  password: '',
  password_confirmation: ''
})
const valid = ref(true)
const error = ref(null)

const register = async () => {
  try {
    const response = await axios.post('/api/register', form.value)
    // Handle success (e.g., store token, redirect, etc.)
    const token = response.data.token
    localStorage.setItem('token', token) // Store the token in localStorage
    // Set the Authorization header for future requests
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`

    // Redirect to home page
    router.push('/')
  } catch (err) {
    // Handle error
    error.value = err.response.data.message || 'An error occurred during registration'
  }
}
</script>

<template>
  <MainLayout>
    <div class="h-screen d-flex justify-center">
      <v-form @submit.prevent="register" v-model="valid" class="pa-10 py-5 w-50">
        <v-container class="border-sm spacing-playground pa-6">
          <h1>Register</h1>
          <v-col>
            <v-col cols="12">
              <v-text-field v-model="form.name" :rules="nameRules" label="Name" hide-details required></v-text-field>
            </v-col>

            <v-col cols="12">
              <v-text-field v-model="form.email" :rules="emailRules" label="E-mail" hide-details
                required></v-text-field>
            </v-col>

            <v-col cols="12">
              <v-text-field v-model="form.password" :rules="passwordRules" label="Password" type="password" hide-details
                required></v-text-field>
            </v-col>

            <v-col cols="12">
              <v-text-field v-model="form.password_confirmation" :rules="passwordRules" label="Confirm Password"
                type="password" hide-details required></v-text-field>
            </v-col>
            <p class="text-center mb-2">
              Already have an account?
              <a class="text-teal-accent-4">Log in</a>
            </p>


            <v-btn class="mt-2" type="submit" block>Submit</v-btn>
            <v-alert v-if="error" type="error" dismissible>{{ error }}</v-alert>
          </v-col>
        </v-container>
      </v-form>
    </div>
  </MainLayout>
</template>
