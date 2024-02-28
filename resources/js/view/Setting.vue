<script setup>
import InfoCommun from "../components/setting/InfoCommun.vue";
import InfoPassword from "../components/setting/InfoPassword.vue";
import InfoFiscal from "../components/setting/InfoFiscal.vue";


components: {
  InfoCommun,
  InfoPassword
  InfoFiscal
}
</script>

<template>
  <v-container fluid style="background-color: rgb(247, 247, 247)">
    <v-row>
      <v-col cols="12" md="4">
        <v-row>
          <v-col cols="12">
            <InfoCommun />
          </v-col>
          <v-col cols="12" class="mx-0">
            <InfoPassword />
          </v-col>
          <v-col cols="12" class="mx-0">
            <InfoCommun />
          </v-col>
        </v-row>
      </v-col>
      <v-col cols="12" md="4">
        <v-row>
          <v-col cols="12">
            <InfoFiscal />
          </v-col>
          <v-col cols="12">
            <InfoCommun />
          </v-col>
        </v-row>
      </v-col>
      <v-col cols="12" md="4">
        <v-row>
          <v-col cols="12">
            <InfoCommun/>
          </v-col>
          <v-col cols="12">
            <InfoCommun />
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
h5 {
  font-size: 1rem;
}
.solid-border {
  box-shadow: 10px 10px 10px 10px #d1d0d0;
  border: 1px solid #f2f2f2;
}
</style>