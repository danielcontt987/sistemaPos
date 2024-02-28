<template>
    <v-card elevation="0" rounded="3" class="rounded-md solid-border">
      <v-card-text>
        <v-row class="mx-0">
          <v-col cols="12" style="padding-left: 0">
            <v-chip class="text-primary rounded-lg pa-6 font-weight-bold" label>
              Información fiscal
            </v-chip>
          </v-col>
        </v-row>
        <v-row>
          <v-col cols="12">
            <p class="font-weight-bold">Contraseña de operaciones</p>
            <p>1234</p>
            <p>Es una contraseña capas de proteger algunas funcionalidades</p>
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