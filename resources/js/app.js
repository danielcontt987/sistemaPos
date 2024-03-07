/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import 'vuetify/styles';
import '@mdi/font/css/materialdesignicons.css';
import { createApp, ref } from 'vue';
import { createVuetify} from 'vuetify';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import router from './router/index.js';
import { es } from "vuetify/locale";
//Icons Feather
import * as feather from 'feather-icons';

// Importa los íconos de tabler-icons
import * as TablerIcons from 'vue-tabler-icons';

//Pinia
import { createPinia } from 'pinia';

//ApexChart

import VueApexCharts from "vue3-apexcharts";

// Flatpickr
import flatpickr from 'flatpickr'
import 'flatpickr/dist/flatpickr.css'

const customLightTheme = {
  colors: {
    white: "#fff",
    brown: "#c9b39e",
    wine: "#8E0C26",
    dark: "#000000",
    background: "#F2F3F5",
    dark_gray: "#222831",
    primary: "#0000"
  },
};

const vuetify = createVuetify({
    components,
    directives,
    theme: {
      defaultTheme: "customLightTheme",
      themes: {
        customLightTheme,
      },
    },
    locale: {
      locale: "es",
      fallback: "es", // Especifica la localidad de respaldo una vez
      messages: { es },
  },
})


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

import App from './App.vue';

const app = createApp({
  setup(){
    const show1 = ref(false)
    return {show1}
  }
});
//Pinia
const pinia = createPinia();
app.use(pinia);

app.component('App', App);
app.use(router);
app.use(vuetify,{
  lang: {
    locales: { es },
    current: 'es',
  },
});
app.use(VueApexCharts);
app.use(flatpickr);


app.config.globalProperties.$Feather = feather;
app.config.globalProperties.$TablerIcons = TablerIcons;






/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

// const app = new Vue({
//   el: "#app",
//   vuetify,
//   router,
//   store: store,
//   data: () => {
//     return {
//       show1: false,
//     };
//   },

app.mount('#app');
