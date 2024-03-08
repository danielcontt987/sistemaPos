<template>
  <h1>¿Tienes alguna duda?</h1>
  <p>No dudes en contactarnos y responderemos a la brevedad</p>
  <v-row no-gutters>
    <v-col cols="12">
      <div class="font-weight-bold pb-2 text-lightText">Nombre</div>
      <v-text-field variant="outlined" rounded="0" />
    </v-col>
    <v-col cols="12">
      <div class="font-weight-bold pb-2 text-lightText">Correo</div>
      <v-text-field variant="outlined" rounded="0" />
    </v-col>
    <v-col cols="12">
      <div class="font-weight-bold pb-2 text-lightText">Mensaje</div>
      <v-textarea rows="5" rounded="0" variant="outlined" auto-grow />
    </v-col>
    <v-col cols="12">
        <v-checkbox label="Al dar click, acepto el siguiente aviso de privacidad para el manejo de mis datos personales"></v-checkbox>
    </v-col>
    <v-col cols="12">
        <v-btn color="wine" rounded="0" flat>
            Enviar formulario
        </v-btn>
    </v-col>
  </v-row>
</template>

<script>
export default {};
</script>

<style>
</style>