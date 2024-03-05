<script setup>
    import Hero from '../components/landing/hero.vue';
</script>

<template>
   <hero></hero>
   <v-row>
    <v-container fluid>
       <v-row style="height: 450px">
        <v-col cols="12" sm="7">
            <h3 class="ml-8 text-justify">Forma parte del directorio <br> Estatal de Prestadores <br> de Servicios Turísticos</h3>
                <p class="ml-8 text-justify font-weight-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br>
                   varius enim in eros elementum tristique. Duis cursus, mi quis viverra <br>
                   ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat</p>
        </v-col>
        <v-col cols="12" sm="5" align="center">
            <img src="../../../public/img/camara.png" style="width: 160px;"><br>
            <img src="../../../public/img/nave.png" align="right" style="width: 100px;" class="pt-15 mr-15"><br>
            <img src="../../../public/img/star.png" align="center" style="padding-left: 150px; padding-top: 100px; width: 200px;"><br>
        </v-col>
       </v-row>
       <v-row>
        <v-col cols="12">
            <h1>JOññña</h1>
        </v-col>
       </v-row>
    </v-container>
   </v-row>
</template>

