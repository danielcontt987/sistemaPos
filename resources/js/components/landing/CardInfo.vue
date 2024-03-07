<script setup>
const props = defineProps({
  info: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <v-col cols="12" sm="4" lg="4">
      <v-card class="mx-auto my-12" max-width="374" rounded="0" variant="flat">
        <v-img
          height="250"
          :src="info.img"
          cover
        ></v-img>
        <v-card-text class="px-0">
          <v-row class="px-0 justify-space-between">
            <v-col cols="12">
              <v-chip color="brown" rounded="0">
                <span class="font-weight-bold">{{info.category}}</span>
              </v-chip>
              <span class="font-weight-bold px-5">{{info.lections}}</span>
              <h5 class="font-weight-bold my-5 text-dark">{{info.title}}</h5>
              <p style="word-break:break-word;">{{ info.content }}</p>
            </v-col>
          </v-row>
        </v-card-text>
        <v-card-actions class="px-0">
          <v-btn class="px-0 text-dark">Ver más <v-icon class="text-dark">mdi-chevron-right</v-icon></v-btn>
        </v-card-actions>
      </v-card>
    </v-col>
</template>



<style>

</style>