<script setup>

  const foods = [
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
    {
      name: 'Adobo',
      image: 'https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg',
      description: '1 serving = 100 Calories',
    },
  ];




</script>
<template>

  <v-row class="pa-6 mt-6  ">
    <v-row>

      <v-col class=" d-flex justify-center" cols="12" sm="6" md="4" xl="3" v-for="food in foods" :key="food">
        <v-card elevation="0" width="350">
          <v-card class="mx-auto" :image="food.image" height="350" width="350" rounded="lg" />
          <!-- <v-img :src="food.image" class="w-fill-width rounded-xl" /> -->
          <!-- alternatibo -->
          <div class="mt-6 text-h6 font-weight-bold text-h6">{{ food.name }}</div>
          <p>{{ food.description }}</p>
        </v-card>
      </v-col>
    </v-row>
  </v-row>

</template>
