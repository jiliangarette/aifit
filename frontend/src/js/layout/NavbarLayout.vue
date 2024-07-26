<template>
    <v-container fluid class="w-screen d-flex align-center justify-between pl-8 bg-teal-accent-4">
        <v-row class="">
            <v-aifit class="mx-6">
                <router-link to="/" class="text-white font-weight-bold text-decoration-none">AiFIT</router-link>
            </v-aifit>
        </v-row>

        <row class="d-flex align-center justify-evenly pr-8">
            <v-aifit class="mx-6">
                <router-link to="/" class="text-white font-weight-semibold text-decoration-none">Home</router-link>
            </v-aifit>
            <v-aifit class="mx-6">
                <router-link to="/recipe/favorite"
                    class="text-white font-weight-semibold text-decoration-none">Recipe</router-link>
            </v-aifit>
            <v-aifit class="mx-6">
                <router-link to="/community"
                    class="text-white font-weight-semibold text-decoration-none">Community</router-link>
            </v-aifit>
            <v-aifit class="mx-6">
                <router-link to="/about" class="text-white font-weight-semibold text-decoration-none">About
                    us</router-link>
            </v-aifit>
            <v-aifit class="mx-6">
                <v-btn-group color="#b2d7ef" density="comfortable" rounded="pill" divided>
                    <v-btn class="bg-transparent">
                        <CircleUser class="text-white" />
                        <v-menu activator="parent" location="bottom end" transition="fade-transition">
                            <v-list density="compact" min-width="250" rounded="lg"
                                class="d-flex justify-between flex-column">
                                <router-link to="/register"
                                    class="text-teal-accent-4 underline-none font-weight-bold text-decoration-none">
                                    <v-list-item
                                        class="auth-button text-h6 rounded-lg text-teal-accent-4 underline-none font-weight-semibold text-decoration-none pt-4 mx-3"
                                        title="Register"></v-list-item>
                                </router-link>
                                <router-link to="/login"
                                    class="text-teal-accent-4 underline-none font-weight-bold text-decoration-none">
                                    <v-list-item
                                        class="auth-button text-h6 rounded-lg text-teal-accent-4 underline-none font-weight-semibold text-decoration-none pt-4 mx-3"
                                        title="Login"></v-list-item>
                                </router-link>
                                <v-list-item
                                    class="auth-button rounded-lg text-red-accent-1 underline-none font-weight-semibold text-decoration-none pt-4 mx-3"><button
                                        @click="logout">Logout {{ user.email }}</button></v-list-item>
                            </v-list>

                        </v-menu>
                    </v-btn>
                </v-btn-group>
            </v-aifit>
        </row>
    </v-container>
</template>
<script setup>
import { CircleUser } from 'lucide-vue-next'
import { onMounted, ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router';

const route = useRouter();
const token = localStorage.getItem('token')
if (token) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${token}`
    console.log(token);
}
const user = ref('')
const loadUser = async () => {
    const response = await axios.get('/api/user/profile')
    user.value = response.data
}
onMounted(() => {
    loadUser()
    logout()
})

const logout = async () => {
    try {
        await axios.post('/api/logout')
        localStorage.removeItem('authToken')
        route.push('/')
    } catch (error) {
        console.error('Logout failed:', error)
    }
}

</script>
<style scoped>
.aifit-active {
    font-weight: bold;
}

.auth-button:hover {
    background-color: rgb(228, 249, 228);
}
</style>
