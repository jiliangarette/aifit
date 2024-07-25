<script setup>
import MainLayout from '@/layout/MainLayout.vue'
</script>
<template>
  
    <div>
      <div>
        <v-breadcrumbs class="text-h5 text-decoration-underline pl-6 mt-4 font-weight-bold">Recipe</v-breadcrumbs>
      </div>
      <div class="ml-5">
        <v-btn
          class="rounded-0 mr-4 bg-teal-accent-4 text-capitalize font-weight-bold"
          height="60"
          width="160"
          border="sm"
          >Favorites</v-btn
        >
        <v-btn class="rounded-0 mr-4 text-capitalize text-teal-accent-4" height="60" width="160" style="border: 1px solid #64ffda;">
  Meal Plans
</v-btn>

      </div>
      <div class="pa-6 mt-6">
        <v-row>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/564x/93/44/bb/9344bbe4f9fedce292d0132c2e75f1c2.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Adobo</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/564x/a4/38/84/a4388442645423822dc4bec288343016.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Tortang Talong</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/236x/a5/7a/da/a57ada9962153de831f02e5d2f643797.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Lumpiang Shanghai</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/236x/44/e1/76/44e17655f3864e91a766099f70f2048b.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Bicol Express</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/236x/9c/76/56/9c7656c05db32d2662fe4e58101eefc2.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Fried Chicken</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
          <v-col cols="12" md="4">
            <v-card
              image="https://i.pinimg.com/236x/68/44/5b/68445b5e7999503cefca7c7bb3850cc5.jpg"
              height="350"
              width="350"
              rounded="lg"
            ></v-card>
            <div class="mt-6 text-h6 font-weight-bold text-h6">Bola Bola</div>
            <p>1 serving = 100 Calories</p>
          </v-col>
        </v-row>
      </div>
    </div>
  
</template>
