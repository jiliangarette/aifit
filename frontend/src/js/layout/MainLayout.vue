<script setup>
    import Navbar from "./Navbar.vue";
    import Footer from "./Footer.vue";
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
