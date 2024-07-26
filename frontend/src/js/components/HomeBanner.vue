<template>
  <v-banner style=" margin: 0; padding: 0;">
    <v-row no-gutters style="margin: 0; padding: 0; height: 100%;">
      <v-col cols="12" md="6"
        style="background-color: #024a42; height: 100%; display: flex; align-items: center; justify-content: center; margin: 0; padding: 0;">
        <v-container style="text-align: center; color: white; margin: 0; padding: 0;">
          <div>
            <h1>Indulge in guilt-free healthy meals</h1>
          </div>
          <v-btn style="background-color: #21d19f; margin-top: 20px;">Button</v-btn>
        </v-container>
      </v-col>

      <v-col cols="12" md="6" style="background-color: grey; height: 100%; margin: 0; padding: 0;">
        <v-img cover
          src="https://media.self.com/photos/5ea1ac5927bb4e00087e0632/1:1/w_1066,h_1066,c_limit/mango-black-bean-salad.jpg"
          style="height: 100%; width: 100%; margin: 0; padding: 0;"></v-img>
      </v-col>
    </v-row>
  </v-banner>

  <v-row no-gutters style="margin: 0; padding: 0; height: 30vh;">
    <v-col cols="12" class="d-flex align-center justify-center" style="background-color: #f5f5f5; text-align: center;">
      <div>
        <h1 style="font-size: 2rem; font-weight: bold; color: #333; margin: 0;">Easily Calculate the Nutritional Value
          of Your Favorite Recipes and Meals with Just a Few Clicks.</h1>
      </div>
    </v-col>
  </v-row>
</template>

<style scoped>
body,
html,
#app {
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