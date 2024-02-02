<script setup>
import { ref } from "vue";

const items = ref([
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-user-male-ff0c3edd.svg",
    title: "Employees",
    value: "96",
    bgClass: "bg-lightprimary",
    textColor: "text-primary",
  },
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-briefcase-5ac68925.svg",
    title: "Clients",
    value: "3,650",
    bgClass: "bg-lightwarning",
    textColor: "text-warning",
  },
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-mailbox-58a01fce.svg",
    title: "Projects",
    value: "356",
    bgClass: "bg-lightsecondary",
    textColor: "text-secondary",
  },
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-favorites-c75eec14.svg",
    title: "Events",
    value: "696",
    bgClass: "bg-lighterror",
    textColor: "text-error",
  },
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-speech-bubble-4432cbf3.svg",
    title: "Payroll",
    value: "$96k",
    bgClass: "bg-lightsuccess",
    textColor: "text-success",
  },
  {
    icon: "https://modernize-vuejs.adminmart.com/assets/icon-connect-93bb1783.svg",
    title: "Reports",
    value: "59",
    bgClass: "bg-lightprimary",
    textColor: "text-primary",
  },
]);

const options = ref({
  chart: {
    type: "bar",
    height: 350,
    foreColor: "#5b5867",
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: "top", // top, center, bottom
      },
    },
  },
  colors: ["#5d87ff"],
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    categories: ["LUN", "MAR", "MIER", "JUE", "VIE", "SAB", "DOM"],
    axisTicks: {
      color: "#333",
    },
  },
  colors: ["#5d87ff"],
  tooltip: {
    theme: "dark",
  },
});

const options_dark = ref({
  chart: {
    type: "bar",
    height: 100,
    foreColor: "#acb0cc",
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: "top", // top, center, bottom
      },
    },
  },
  colors: ["#5d87ff"],
  dataLabels: {
    enabled: false,
  },
  xaxis: {
    categories: ["LUN", "MAR", "MIER", "JUE", "VIE", "SAB", "DOM"],
    axisTicks: {
      color: "#333",
    },
  },
  colors: ["#5d87ff"],
  tooltip: {
    theme: "dark",
  },
});

const series = ref([
  {
    name: "series-1",
    data: [30, 40, 45, 50, 49, 60, 70],
  },
]);
</script>
<template>
  <v-container fluid style="padding-top: 0px">
    <v-row>
      <v-col
        class="v-col-sm-4 v-col-md-4 v-col-lg-2 v-col-12"
        v-for="(item, index) in items"
        :key="index"
      >
        <v-card
          class="text-decoration-none d-flex align-center justify-center text-center rounded-md pa-4"
          :class="item.bgClass"
          flat
          rounded="3"
        >
          <div>
            <img :src="item.icon" alt="icon" />
            <div
              style="color: #7f7c87;"
              class="text-subtitle-1 text-capitalize font-weight-bold mt-3"
              :class="item.textColor"
            >
              {{ item.title }}
            </div>
            <h4 class="text-h4 mt-1" :class="item.textColor">
              {{ item.value }}
            </h4>
          </div>
        </v-card>
      </v-col>
      <v-col cols="12">
        <v-row>
          <v-col cols="12" lg="8" md="12">
            <v-card
              rounded="4"
              class="rounded-md shadow-card solid-border"
              flat
              color="background_nav"
            >
              <v-row>
                <v-col cols="12" lg="9" sm="9">
                  <v-card-title>
                    <div class="text-h5">Revenue Update</div>
                  </v-card-title>
                  <v-card-subtitle class="text-subtitle-1">
                    Overview of Profit
                  </v-card-subtitle>
                </v-col>
                <v-col cols="12" lg="3" sm="3">
                  <div class="text-right pr-10 py-5">
                    <v-select
                      color="primary"
                      label="seleccionar"
                      density="compact"
                      variant="outlined"
                    ></v-select>
                  </div>
                </v-col>
              </v-row>
              <v-card-text>
                <v-row>
                  <v-col cols="12" sm="8" class="pt-0">
                    <apexchart
                      type="bar"
                      height="300"
                      :options="options"
                      :series="series"
                    ></apexchart>
                  </v-col>
                  <v-col cols="12" sm="4">
                    <div class="d-flex align-center mt-md-6 mt-3">
                      <v-avatar size="40" rounded="2" color="lightprimary">
                        <v-icon size="25" color="primary">mdi-dots-grid</v-icon>
                      </v-avatar>
                      <div class="pl-4">
                        <h3 class="text-h3 m-0">$63,489.50</h3>
                        <h3 class="text-subtitle-1 pt-0" style="color: #7f7c87;">
                          Total Earnings
                        </h3>
                      </div>
                    </div>
                    <div class="mt-sm-10 mb-sm-10 mt-10 mb-0">
                      <div class="d-flex align-baseline">
                        <v-icon color="primary" size="10"
                          >mdi-checkbox-blank-circle</v-icon
                        >
                        <div class="pl-4">
                          <h6 class="text-subtitle-1" style="color: #7f7c87;">Earnings this month</h6>
                          <h5 class="text-h5 mt-1">$48,820</h5>
                        </div>
                      </div>
                    </div>
                  </v-col>
                </v-row>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>
<style scoped>
.text-base {
  font-size: 0.9375rem;
  line-height: 1.3125rem;
}
.maxWidth {
  max-width: auto;
}

.text-h4 {
  font-size: 1.3125rem !important;
  font-weight: 600;
  line-height: 1.6rem;
  letter-spacing: 0.0073529412em !important;
  font-family: inherit !important;
  text-transform: none !important;
}

.text-h5 {
  font-size: 1.125rem !important;
  font-weight: 600;
  line-height: 1.6rem;
  letter-spacing: normal !important;
  font-family: inherit !important;
  text-transform: none !important;
}
.shadow-card {
  box-shadow: 5px 3px 8px #f6f7f8;
}
.solid-border {
  border: 1px solid #f8f5f5;
}
</style>