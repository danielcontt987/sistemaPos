<script setup>
import { ref, onMounted, watch, defineProps, defineEmits, inject } from "vue";

const props = defineProps(["drawer"]);
const emit = defineEmits();

const drawer = ref(true);
const rail = ref(false);
const activeItem = ref(null);
const is_dark = inject('is_dark');

const toggleRail = () => {
  drawer.value = rail;
};

const navigationItems = ref([
  { text: "Inicio", icon: "home", route: "/" },
  { text: "Clientes", icon: "users", route: "/clientes" },
  { text: "Punto de venta", icon: "shopping-bag", route: "/punto-de-venta" },
  { text: "Ventas", icon: "dollar-sign", route: "/ventas" },
  { text: "Reportes", icon: "bar-chart-2", route: "/reportes" },
]);

const setActive = (route) => {
  activeItem.value = route;
};

const isCurrentRoute = (route) => {
  return route === activeItem.value;
};

// Sincroniza el valor del drawer cuando cambia en el componente padre
watch(
  () => props.drawer,
  (newDrawer) => {
    drawer.value = newDrawer;
  }
);

// Emite el evento cuando el drawer local cambia
watch(
  () => drawer.value,
  (newDrawer) => {
    emit("update:drawer", newDrawer);
  }
);

// Cierra el drawer cuando el componente se monta
onMounted(() => {
  drawer.value = true;
});
</script>

<template>
  <v-navigation-drawer
    class="bg-white"
    v-model="drawer"
    :rail="rail"
    permanent
    @click="toggleRail"
    color="background_drawer"
  >
    <v-list density="compact" nav>
      <v-list-item class="justify-center" align="center" v-if="rail === false">
        <img
          v-if="is_dark === false"
          src="../../../../public/img/img3.png"
          width="150"
          height="50"
          alt="Logo"
          class="mb-3"
        />
        <img
          v-if="is_dark === true"
          src="../../../../public/img/img1.png"
          width="50"
          height="50"
          alt="Logo"
          class="mb-3"
        />
      </v-list-item>
      <v-list-item
        v-for="(item, index) in navigationItems"
        :key="index"
        @click="
          setActive(item.route);
          $router.push(item.route);
        "
        :class="{ 'bg-red': isCurrentRoute(item.route) }"
        class="overflow-y text-white"
      >
        <v-icon
          v-if="rail"
          :title="item.text"
          v-html="$Feather.icons[item.icon].toSvg()"
          color="grey_dark"
        >
        </v-icon>
        <v-icon
          v-if="rail == false"
          :title="item.text"
          :class="isCurrentRoute(item.route) ? 'grey_dark' : 'text-grey_dark'"
          class="mx-5"
          color="white"
          v-html="$Feather.icons[item.icon].toSvg()"
        >
        </v-icon>
        <span
          v-if="!rail"
          :title="item.text"
          :class="isCurrentRoute(item.route) ? 'text-background_white' : 'text-grey_dark'"
          >{{ item.text }}</span
        >
      </v-list-item>
      <v-list-item
        class="text-grey_dark mx-5"
        v-if="rail == false"
        @click.stop="rail = !rail"
      >
        <v-icon class="text-purple_primary mr-5"> mdi-arrow-collapse </v-icon>
        <span class="text-purple_primary"> <b>Contraer</b> </span>
      </v-list-item>
      <v-list-item
        class="text-purple_primary "
        prepend-icon="mdi-arrow-expand"
        v-else
        @click.stop="rail = !rail"
      >
        <v-icon class="text-purple_primary"> mdi-arrow-expand </v-icon>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>
<style scoped>
.bg-red {
  background: rgb(115, 103, 240);
  background: linear-gradient(
    90deg,
    rgba(115, 103, 240, 1) 25%,
    rgba(124, 113, 241, 1) 48%,
    rgba(143, 133, 244, 1) 62%
  );
}
</style>