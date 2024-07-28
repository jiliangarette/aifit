<script setup>
    import MainLayout from "@/layout/MainLayout.vue";
    import { onMounted, ref } from "vue";
    import axios from 'axios';

    const task = ref('')
    const tasks = ref([
        'Do laundry', 'Clean the room', 'Wash the dishes'
    ]);

    const addTask = () => {
        if (task.value.trim() !== '') {
            tasks.value.unshift(task.value);
            task.value = '';
        }
    }

    const deleteTask = (props) => {
        tasks.value.splice(props, 1);
        //second argument is the number of delete
    }



    onMounted(async () => {
        try {
            const response = await axios.get('https://jsonplaceholder.typicode.com/users');
            tasks.value = response.data.map((todo) => ({
                id: todo.id,
                name: todo.name,
                username: todo.username
            }));
        } catch (error) {
            console.log(`error ${error}`);
        }
    });
</script>
<template>
    <MainLayout>
        <v-row class="h-screen d-flex align-center justify-center">
            <v-col class="border d-flex align-center justify-center flex-column">
                <v-row>
                    <v-form @submit.prevent="addTask">
                        <v-label for="newTask">Add Task</v-label>
                        <input class="py-4 border" id="newTask" width="400" type="text" v-model="task" />
                        <v-btn type="submit">add task</v-btn>
                    </v-form>
                </v-row>
                <v-row class="mt-8">
                    <v-col>
                        <v-row v-for="(taks, index) in tasks" :key="taks">
                            <span> {{ taks.name }} - {{ taks.username }} - {{ taks.id }}</span>
                            <v-btn @click="deleteTask(index)">X</v-btn>
                        </v-row>
                    </v-col>
                </v-row>
            </v-col>
        </v-row>
    </MainLayout>
</template>
