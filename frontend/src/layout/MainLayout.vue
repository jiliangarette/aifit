<script setup>
import Navbar from "./NavbarLayout.vue";
import Footer from "./FooterLayout.vue";
</script>

<template>
    <div>
        <Navbar />
        <main>
            <slot>
                <!--Inside are the pages-->
            </slot>
        </main>
        <Footer />
    </div>
</template>
