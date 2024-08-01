<template>
    <div >
      <v-carousel
        style="background: #024a42;"
        height="400"
        show-arrows="hover"
        cycle
        hide-delimiter-background
      >
        <v-carousel-item
          v-for="(slide, i) in slides"
          :key="i"
        >
          <v-img
            :src="slide.src"
            :alt="slide.alt"
            class="d-flex align-center"
            height="100%"
            contain
          >
            <v-container
              class="d-flex justify-center align-center"
              fill-height
            >
              <div class="text-h2 white--text">{{ slide.caption }}</div>
            </v-container>
          </v-img>
        </v-carousel-item>
      </v-carousel>
  
      <v-container class="mt-5">
        <v-card-text class="d-flex justify-center">
          <v-card-title class="text-bold headline aifit-title">
            Welcome to AiFIT
          </v-card-title>
        </v-card-text>

  <v-container>
    <v-row>
      <v-col cols="12" md="6">
        <v-card class="mx-auto" max-width="344" hover>
          <v-card-title>Card title</v-card-title>
          <v-card-text>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </v-card-text>
        </v-card>
      </v-col>
      <v-col cols="12" md="6">
        <v-card class="mx-auto" max-width="344" hover>
          <v-card-title>Card title</v-card-title>
          <v-card-text>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>

      </v-container>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        slides: [
          { src: 'https://i.pinimg.com/736x/75/0f/8f/750f8f5d45432c9417469293d936ef9e.jpg', alt: 'Image 1', caption: '' },
          { src: 'https://i.pinimg.com/736x/b9/79/6a/b9796ade1c18ac4200ff4c4e1d254816.jpg', alt: 'Image 2', caption: '' },
          { src: 'https://i.pinimg.com/564x/84/ae/b4/84aeb4733fb1aa1ea6cfbfdcdce0fe60.jpg', alt: 'Image 3', caption: '' },
          { src: 'https://i.pinimg.com/564x/19/61/d8/1961d88a2bebe278df2d641d90914f57.jpg', alt: 'Image 4', caption: '' },
          { src: 'https://i.pinimg.com/564x/9b/ea/71/9bea7171e4351d205f6b9c01ae3049be.jpg', alt: 'Image 5', caption: '' },
        ],
      }
    },
  }
  </script>
  
  <style scoped>
  .v-img {
    border-radius: 8px;
  }
  
  .text-h2 {
    font-size: 2rem;
    font-weight: bold;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
  }
  
  .aifit-title {
    font-size: 3rem;
    font-weight: bold;
    color: #024a42;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }
  </style>