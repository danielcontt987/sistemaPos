<template>
  <div class="logos">
    <div class="logos-slide" ref="logosSlide">
      <img src="../../src/img/1.png" />
      <img src="../../src/img/2.png" />
      <img src="../../src/img/3.png" />
      <img src="../../src/img/4.png" />
      <img src="../../src/img/5.png" />
      <img src="../../src/img/6.png" />
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';

  onMounted(() => {
    const copy = document.querySelector(".logos-slide").cloneNode(true);
    document.querySelector(".logos").appendChild(copy);
  });
</script>
<style scoped>
@keyframes slide {
  from {
    transform: translateX(-10);
  }
  to {
    transform: translateX(-100%);
  }
}

.logos {
  overflow: hidden;
  padding: 10px 0;
  background: "#f2f3f5";
  white-space: nowrap;
  position: relative;
}

.logos:before,
.logos:after {
  position: absolute;
  top: 0;
  width: 250px;
  height: 100%;
  content: "";
  z-index: 2;
}

.logos:before {
  left: 0;
}

.logos:after {
  right: 0;
}

.logos:hover .logos-slide {
  animation-play-state: paused;
}

.logos-slide {
  display: inline-block;
  animation: 35s slide infinite linear;
}

.logos-slide img {
  height: 50px;
  margin: 0 40px;
}
</style>
