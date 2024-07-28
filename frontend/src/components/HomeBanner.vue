<template>
  <v-banner class="banner-header">
    <v-row no-gutters class="banner-scope">
      <v-col cols="12" md="4" class="banner-message">
        <v-container class="banner-container">
          <div>
            <h1>Indulge in guilt-free healthy meals</h1>
          </div>
          <router-link to="recipe/favorite">
            <v-btn class="banner-action-button">Find More Recipes</v-btn>
          </router-link>
        </v-container>
      </v-col>
      <v-col cols="12" md="8" class="banner-image">
        <v-img class="bg-grey-lighten-2" height="450"
          src="https://media.self.com/photos/5ea1ac5927bb4e00087e0632/1:1/w_1066,h_1066,c_limit/mango-black-bean-salad.jpg"
          cover />
      </v-col>
    </v-row>
  </v-banner>
</template>
<style scoped>
  .banner-container {
    text-align: center;
    color: white;
    display: flex;
    flex-direction: column;
    place-items: center;
    justify-content: center;
    border: 1px solid black;
    height: 420px;
  }

  .banner-header {
    height: 50vh;
    margin: 0;
    padding: 0
  }

  .banner-message {
    background-color: #024a42;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
  }

  .banner-image {
    background-color: grey;
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .banner-action-button {
    background-color: #21d19f;
    margin-top: 20px;
  }

  h1 {
    margin: 0;
  }

  .v-banner {
    background-color: #024a42;
  }
</style>
