<script setup>
const props = defineProps({
  item: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <v-col cols="12" lg="4">
    <v-card variant="flat" color="background">
      <v-card-title>
        <v-icon color="dark_gray" size="40" class="mb-5">{{
          item.icon
        }}</v-icon>
      </v-card-title>
      <v-card-text>
        <h4 class="pl-2 text-dark_gray" style="word-break: break-word">
          {{ item.title }}
        </h4>
        <p class="pl-2" style="word-break: break-word">{{ item.content }}</p>
      </v-card-text>
    </v-card>
  </v-col>
</template>

<style>
</style>