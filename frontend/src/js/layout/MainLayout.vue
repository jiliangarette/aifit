<script setup>
import Navbar from "./NavbarLayou.vue";
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
