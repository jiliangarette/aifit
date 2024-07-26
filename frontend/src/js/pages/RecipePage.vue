<template>

  <MainLayout>

    <div v-if="token">
      {{ user.name }}
      {{ user.email }}

    </div>

    <RecipeTopSection />
    <router-view />
  </MainLayout>
</template>
<script setup>
import MainLayout from "@/layout/MainLayout.vue";
import RecipeTopSection from "../components/RecipeTopSection.vue";

import { onMounted, ref } from 'vue'
import axios from 'axios'

const token = localStorage.getItem('token')
if (token) {
  axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
}
const user = ref('')
const loadUser = async () => {
  const response = await axios.get('/api/user/profile')
  user.value = response.data
}
onMounted(() => {
  loadUser()
})


</script>
