<template>
  <v-container fluid>
    <v-col cols="auto">
      <v-card class="overflow-auto">
        <v-card-text>
          <h1 class="headline">Explore More Recipes</h1>
          <p class="subtext">
            Browse through a vast database of delicious recipes, each accompanied by a nutrition breakdown including calorie count, macro and micronutrient information, and more. Customize the serving size to fit your needs and see the nutritional information based on the exact amount you plan to eat. With a constantly updating database of recipes, the possibilities are endless, so start exploring today and take control of your nutritional choices.
          </p>
        </v-card-text>
      </v-card>
    </v-col>

    <v-row>
      <v-col cols="12" md="6">
        <v-container>
          <v-row>
            <v-col cols="6">
              <v-img
                cover
                src="https://media.self.com/photos/5ea1ac5927bb4e00087e0632/1:1/w_1066,h_1066,c_limit/mango-black-bean-salad.jpg"
                style="height: 100%; width: 100%; margin: 0; padding: 0;"
              ></v-img>
            </v-col>
            <v-col cols="6">
              <v-card>
                <v-card-title>
                  Nutritional Facts
                </v-card-title>
                <v-card-text>
                  <p>Calories: 200</p>
                  <p>Fat: 10g</p>
                  <p>Carbs: 25g</p>
                  <p>Protein: 5g</p>
                </v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </v-col>

      <v-col cols="12" md="6">
        <v-container>
          <v-row>
            <v-col cols="6">
              <v-img
                cover
                src="https://media.self.com/photos/5ea1ac5927bb4e00087e0632/1:1/w_1066,h_1066,c_limit/mango-black-bean-salad.jpg"
                style="height: 100%; width: 100%; margin: 0; padding: 0;"
              ></v-img>
            </v-col>
            <v-col cols="6">
              <v-card>
                <v-card-title>
                  Nutritional Facts
                </v-card-title>
                <v-card-text>
                  <p>Calories: 200</p>
                  <p>Fat: 10g</p>
                  <p>Carbs: 25g</p>
                  <p>Protein: 5g</p>
                </v-card-text>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
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
</style>
