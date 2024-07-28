<template>
  <v-container fluid>
    <v-col cols="auto">
      <v-card class="overflow-auto py-12">
        <v-card-text>
          <h1 class="headline">Explore More Recipes</h1>
          <p class="subtext">
            Browse through a vast database of delicious recipes, each accompanied by a nutrition breakdown including
            calorie count, macro and micronutrient information, and more. Customize the serving size to fit your needs
            and see the nutritional information based on the exact amount you plan to eat. With a constantly updating
            database of recipes, the possibilities are endless, so start exploring today and take control of your
            nutritional choices.
          </p>
        </v-card-text>
      </v-card>
    </v-col>
    <v-row>

      <v-col cols="12" md="6">
        <router-link to="/recipe/favorite/nutrition-facts/2" class="underline-none">
          <v-container>
            <v-row>
              <v-col cols="6">
                <v-img cover class="rounded-lg"
                  src="https://i.pinimg.com/564x/68/eb/9e/68eb9eac17e7649a84ab3b485e01a843.jpg"
                  style="height: 100%; width: 100%; margin: 0; padding: 0;"></v-img>
              </v-col>
              <v-col cols="6" class="justify-center d-flex flex-column">
                <v-card elevation="0">
                  <v-card-title>
                    Nutritional Facts
                  </v-card-title>
                  <v-card-text>
                    <p>Calories: 343</p>
                    <p>Fat: 6g</p>
                    <p>Carbs: 23g</p>
                    <p>Protein: 21g</p>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
          </v-container>
        </router-link>
      </v-col>



      <v-col cols="12" md="6">
        <router-link to="/recipe/favorite/nutrition-facts/4" class="underline-none">
          <v-container>
            <v-row>
              <v-col cols="6">
                <v-img cover class="rounded-lg"
                  src="https://i.pinimg.com/564x/37/19/c9/3719c9610972d03f4702cb5331bf1fa5.jpg"
                  style="height: 100%; width: 100%; margin: 0; padding: 0;"></v-img>
              </v-col>
              <v-col cols="6" class="justify-center d-flex flex-column">
                <v-card elevation="0">
                  <v-card-title>
                    Nutritional Facts
                  </v-card-title>
                  <v-card-text>
                    <p>Calories: 232</p>
                    <p>Fat: 11g</p>
                    <p>Carbs: 25g</p>
                    <p>Protein: 5g</p>
                  </v-card-text>
                </v-card>
              </v-col>
            </v-row>
          </v-container>
        </router-link>
      </v-col>

    </v-row>
  </v-container>
</template>

<script setup>

</script>

<style scoped>
  .headline {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 1rem;
  }

  .subtext {
    font-size: 1.5rem;
    color: #555;
    line-height: 1.5;
  }

  .underline-none {
    text-decoration: none;
  }

</style>
