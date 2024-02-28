<template>
  <v-card elevation="0" rounded="3" class="rounded-md solid-border">
    <v-card-text>
      <v-row class="mx-0">
        <v-col cols="12" style="padding-left: 0">
          <v-chip class="text-primary rounded-lg pa-6 font-weight-bold" label>
            Información de la empresa
          </v-chip>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12">
          <h5 class="font-weight-light">Mínimo de timbres</h5>
          <h5 class="font-weight-bold mb-7">{{ 2 }}</h5>
          <h5 class="font-weight-light">Zona horaria</h5>
          <h5 class="font-weight-bold">{{ "America/Mazatlan" }}</h5>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12" md="10" sm="12">
          <h5 class="font-weight-light mb-4">
            Desglosa productos elaborados en la factura
          </h5>
        </v-col>
        <v-col cols="12" md="2" sm="12" class="d-flex justify-center pl-0">
          <v-chip small color="background2" text-color="white">
            <strong>NO</strong>
          </v-chip>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12" md="6" sm="12">
          <h5 class="font-weight-light">Períodos de pago</h5>
        </v-col>
        <v-col cols="12" md="6" sm="12">
          <template>
            <v-chip small color="background2" text-color="white">
              SEMANAL
            </v-chip>
          </template>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12">
          <v-btn
            block
            large
            variant="outlined"
            class="rounded-lg"
            color="primary"
          >
            Actualizar
          </v-btn>
        </v-col>
      </v-row>
    </v-card-text>
  </v-card>
</template>