<script setup>
import MainLayout from '@/layout/MainLayout.vue'
</script>

<template>
  <MainLayout>
    <div class="h-screen">
      <v-row>
        <v-col cols="12" lg="6" class="ml-7 mt-9">
          <v-card elevation="0" class="pa-3" style="width: 700px; height: 500px;">
            <h1 class="text-h2 pa-3 font-weight-bold  ">ABOUT US</h1>
            
            <p class="text-justify text-h6 pa-3">
              Welcome to <span class="font-weight-bold text-h4">AIFIT</span>, your go-to destination
              for delicious and nutritious meals that fit seamlessly into your healthy lifestyle.
              Our mission is to make healthy eating easy, enjoyable, and accessible for everyone.
              <br />
              At <span class="font-weight-bold text-h4">AIFIT</span>, we understand that finding the
              perfect balance between taste and health can be a challenge. That's why we've created
              a platform where you can discover a wide variety of recipes that cater to your dietary
              preferences and nutritional needs. Whether you're looking for low-carb options,
              high-protein meals, or simply want to indulge in wholesome foods without the guilt,
              AIFIT has got you covered.
            </p>
          </v-card>
        </v-col>
        <v-col
          cols="12"
          lg="5"
          class="mt-5"
          style="
            background-image: url('/images/eating.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
          "
        >
        </v-col>
      </v-row>
    </div>
  </MainLayout>
</template>
