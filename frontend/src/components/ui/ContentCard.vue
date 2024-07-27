<script setup>
 import { defineProps } from 'vue';

 defineProps({
  background: {
   type: String,
   default: 'teal-lighten-5'
  }
 });
 //reuseable component with dynamic bg
</script>
<template>
 <v-row :class="`bg-${background} pa-6 rounded-lg shadow-md`">
  <slot></slot>
 </v-row>
</template>
<!-- how to use: <ContentCard background="teal-lighten-5"/> -->