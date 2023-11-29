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
import { useDisplay } from 'vuetify';

//Icons Feather
import * as feather from 'feather-icons';

// Importa los íconos de tabler-icons
import * as TablerIcons from 'vue-tabler-icons';

//Pinia
import { createPinia } from 'pinia';

//ApexChart

import VueApexCharts from "vue3-apexcharts";

const customLightTheme = {
  colors: {
    background_nav: "#ffffff",
    text_grey: "#7f7c87",
    background_color:"#EDECF4",
    primary: '#001f4a',
    primary_dark: '#051942',
    fail: '#F50057',
    secondary: '#00337C',
    secondary_dark: '#001f4a',
    background: '#E2E2E2',
    white: '#FFFFFF',
    grey: "#A2A2A2",
    black: '#000000',
    success: '#27AE60',
    accent: "#00CFB5",
    error: "#C22F2F",
    success_card: '#27AE60',
    purple_light: "#F9F0FF",
    purple_primary:"#9c5df9",
    purple_light2: "#e2dff8",
    purple_dark_accent: "#7366ef", 
    purple_acent: "#fcebf7",
    blue_light: "#fcebf7",
    sky_blue: "#fcebf7",
    purple_dark:"#8436f7",
    grey_dark: "#5b5867",
    error_light: "#ea5455",
    blue_light_sky: "#d0f0f7",
    aqua_normal: "#00cfe8",
    orange_light2:"#f9e8dd",
    orange_l2:"#ff9e43",
    wather_melon: "#fcc3c3",
    red_dark_2: "#ff3838",
    background_drawer: "#FFF",

  },
};
const customDarkTheme = {
  dark: false,
  colors: {
    white: "#fff",
    background_nav: "#2e3248",
    background_color: "#25293c",
    background_drawer: "#2e3248",
    purple_primary:"#9c5df9",
    grey_dark: "#acb0cc",


    
    purple_light2: "#313258",
    purple_dark_accent: "#7367f0",
    
    blue_light_sky: "#1f4357",
    aqua_normal:"#00cfe8",

    orange_light2:"#483b3d",
    orange_l2: "#ff9e43",

    wather_melon: "#82424f",
    red_dark_2: "#ff3838",

    
  },
};
const vuetify = createVuetify({
    components,
    directives,
    theme: {
      defaultTheme: "customLightTheme",
      themes: {
        customLightTheme,
        customDarkTheme,
      },
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
    const { mdAndUp, smAndDown } = useDisplay();
    const show1 = ref(false)
    return {mdAndUp,smAndDown, show1}
  }
});
//Pinia
const pinia = createPinia();
app.use(pinia);

app.component('App', App);
app.use(router);
app.use(vuetify);
app.use(VueApexCharts);


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
