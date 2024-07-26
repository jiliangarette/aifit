<template>
  <v-banner style="height: 70vh; margin: 0; padding: 0;">
    <v-row no-gutters style="margin: 0; padding: 0; height: 100%;">
      <v-col cols="12" md="6" style="background-color: #024a42; height: 100%; display: flex; align-items: center; justify-content: center; margin: 0; padding: 0;">
        <v-container style="text-align: center; color: white; margin: 0; padding: 0;">
          <div>
            <h1>Indulge in guilt-free healthy meals</h1>
          </div>
          <v-btn style="background-color: #21d19f; margin-top: 20px;">Find More Recipes</v-btn>
        </v-container>
      </v-col>

      <v-col cols="12" md="6" style="background-color: grey; height: 100%; margin: 0; padding: 0;">
        <v-img
          cover
          src="https://media.self.com/photos/5ea1ac5927bb4e00087e0632/1:1/w_1066,h_1066,c_limit/mango-black-bean-salad.jpg"
          style="height: 100%; width: 100%; margin: 0; padding: 0;"
        ></v-img>
      </v-col>
    </v-row>
  </v-banner>
  

</template>

<script setup>

</script>

<style scoped>
body, html, #app {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
  overflow-x: hidden;
}
  
h1 {
  margin: 0;
}

.v-banner {
  background-color: #024a42;
}
</style>
