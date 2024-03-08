<template>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.1009950861417!2d-104.90582959999999!3d21.5037637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842730b29aaaaaab%3A0x10947caeaf712a54!2sTidingo!5e0!3m2!1ses-419!2smx!4v1709867443559!5m2!1ses-419!2smx" :width="smAndDown ? 410 : 600" :height="smAndDown ? 250 : 620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</template>

<script  setup>
    import {useDisplay} from 'vuetify';
    const {smAndDown} = useDisplay();
</script>