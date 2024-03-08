<template>
  <v-row>
    <v-col cols="12" class="pr-0 pb-0">
      <Carousel />
    </v-col>
  </v-row>
  <v-row class="bg-background py-0">
    <v-col cols="12" lg="6">
      <h2 class="text-brown pl-10 pt-12">
        ¿Por qué registrarme en la plataforma
      </h2>
    </v-col>
    <v-col cols="12" lg="6" class="text-right pr-10 mt-0 pt-0">
      <img src="../../../public/img/Union.png" style="width: 170px" />
    </v-col>
  </v-row>
  <v-row class="bg-background py-0">
    <InfoSection v-for="(item, idx) in items" :key="idx" :item="item" />
  </v-row>
  <v-row class="bg-white">
    <Direction />
  </v-row>
  <v-row class="bg-white">
    <Paralax />
  </v-row>
  <v-row class="bg-white">
    <v-col cols="12" class="mt-15">
      <h1 class="text-center font-weight-bold">Programas de certificación</h1>
      <h1 class="text-center font-weight-bold">y capacitación</h1>
    </v-col>
    <CardInfo v-for="(i, idx) in cards" :key="idx" :info="i" />
  </v-row>
  <v-row class="pb-10 bg-white">
    <v-col cols="12" class="d-flex justify-center">
      <v-btn class="text-dark" rounded="0" variant="outlined">
        Ver todos los programas
        <v-icon right>mdi-chevron-right</v-icon>
      </v-btn>
    </v-col>
  </v-row>
  <v-row class="bg-background">
    <v-col cols="12">
      <h5 class="text-dark text-center mt-10">
        Últimos proveedores turísticos registrados en nuestra plataforma
      </h5>
    </v-col>
    <v-col cols="12" class="pb-5">
        <Brand/>
    </v-col>
  </v-row>
  <v-row class="bg-white px-12">
    <v-col cols="12"  lg="6" class="mt-12">
      <LocationVue />
    </v-col>
    <v-col cols="12" lg="6" class="mt-12">
      <Contact />
    </v-col>
  </v-row>
</template>

<script setup>
import { ref } from "vue";

import Carousel from "../components/landing/hero.vue";
import Paralax from "../components/landing/Paralax.vue";
import Direction from "../components/landing/Direction.vue";
import InfoSection from "../components/landing/InfoSection.vue";
import CardInfo from "../components/landing/CardInfo.vue";
import Brand from "../components/landing/Brand.vue";
import LocationVue from "../components/landing/Location.vue";
import Contact from "../components/landing/Contact.vue";

const items = ref([
  {
    icon: "mdi-earth",
    title:
      "Forma parte del directorio estatal de prestadores de servicios turísticos",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.  Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.",
  },
  {
    icon: "mdi-book-outline",
    title: "Accede a programas de capacitación",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.  Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.",
  },
  {
    icon: "mdi-check-circle-outline",
    title: "Cumple tus obligaciones fácilmente",
    content:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.  Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.",
  },
]);

const cards = ref([
  {
    img: "https://s3-alpha-sig.figma.com/img/4ebf/8772/042d3a76f3cb29cab6c945052074b2a4?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=BOBU2NgSW24WdwRTkPWo4pnQJwlrcugt6dzuXu3s3f7GEAz-4KXcIffsW7kDwKaF9Td0noObDcundgEWVis-D-IXcceNH5ZsKxGOE0GvlfIaNs2hO4pBEti7bOC0UOiiMDK1exCjl~Pb0I8mkFaT5iBvc58DqPhC2v6suISO95vXrjxV-DT7acz9CCbWlVy2bKowxZjm4Wd-z3ZvAtUrQPrziEkK-XNkLSnor-W694~HPo8tMXP-WfGXu4w35oFVCu4yhI~lz5wo9S83yi1N4v3BXEK9ZaQEM5SqXpi9iURr6cHAh-X01IHHG92lhpZD8p-9FGmHMRuSEmrfUoBDdA__",
    category: "HOTELEROS",
    lections: "4 Lecciones",
    title: "Atención a personas con discapacidad",
    content:
      "Identifica el trato correcto a las diferentes discapacidades que puede presentar un huésped.",
  },
  {
    img: "https://s3-alpha-sig.figma.com/img/7322/dd9a/5929a7a55ac770d19acce621f0a43e96?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=WbaNCU04kl7ZOE~ufmQmjitRqXi1xOE0APmZz5PvaCjBAqHKXiIkzxxuIoPKiKo-ix0GF9DFt6LWZVe7wqciZU5GUxKsINhOxhmyneFtsIfFttv0b4gkhgx2eQRXUEflUnA88SlzETNFSlLCEyaRFR51lqXIr5xei6yndwmZe6O2cLHfhy-j6Y5T7yOJazXfJpHMhJgVUTku04yWmh07xnPkldn4uoxpuIy76YcEl0MojBVHHWfrGcnvapWwQHKpsgOGUFtQSjRDyHoLJm6HCqlC46Qfb8o1pBNewL4xVM3kzr2lPJnno0eOTg0~CQq9snT-rpg4sGw~IwJAWk25gA__",
    category: "RESTAURANTES",
    lections: "3 Lecciones",
    title: "Atención a personas con discapacidad",
    content:
      "Identifica el trato correcto a las diferentes discapacidades que puede presentar un huésped.",
  },
  {
    img: "https://s3-alpha-sig.figma.com/img/3845/026a/e88f9f40c40878d335ee7148e9b49307?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IhiChp2lV6taUqo2gfL3~ISNHO0QcSeHZ6d1chCQ3oGWag7mGDgBwHvJjRoLPfAfXvU5DU5yCz57mFQ9Lqk33vdFxyqitX621wML5VSlkRAk5W6xVHhtPl8d~3yda2Pg8svjXmrMiAI225F0MPynE8trSeLYzu62HqEO00777AL8M1Z5jfO7CLC9UHHeUNdBIIwDAfu3Jx8X2HNiGSg8N462ZHjsXLXqkdc3IO-tJvF-mEjl4~hGFkmp878QJfeu1Bqiwjtv~ZLF5jrNSk2uwtsnSGe-GErIcmBZnJQpJGsWWMYKOjj~GvMPbZbDP9UGgUcv0GYI0GYLovVXjy-Bww__",
    category: "GENERAL",
    lections: "2 Lecciones",
    title: "Atención a personas con discapacidad",
    content:
      "Identifica el trato correcto a las diferentes discapacidades que puede presentar un huésped.",
  },
]);
</script>
