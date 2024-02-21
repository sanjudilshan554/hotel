<template>
    <div>
        <Head :title="title ? title : 'Hotel-Management'">

        </Head>
        <SideBar />
        <div class="main-content" id="panel">
            <NavBar />

            <slot name="header" />
            <div class="container-fluid mt--6">
                <slot name="content" />
            </div>
        </div>
          <slot name="modals" />
        <Footer />
    </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/vue3"
import SideBar from '@/Components/Main/SideBar.vue';
import Footer from '@/Components/Main/Footer.vue';
import NavBar from '@/Components/Main/NavBar.vue';
import { defineProps, onMounted } from 'vue';


const props = defineProps({
    title: String,
});


// onMounted();
</script>

<style >
body {
    /* background-image: url('@/../src/img/banner/bg.png');??? */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
}

.bg-header {
    background-color: #55699f;
}

.table-responsive {
    overflow: auto;
}
</style>
