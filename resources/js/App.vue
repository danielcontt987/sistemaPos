<script setup>
    import AppBarVue from './components/global/AppBar.vue';

</script>


<template>
   <v-main class="bg-white">
     <AppBarVue></AppBarVue>
     <router-view></router-view>
   </v-main>
</template>