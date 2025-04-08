<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import { DotLottieVue } from '@lottiefiles/dotlottie-vue'
</script>

<template>
        <div class="h-screen flex">
  <div class="flex w-1/2 bg-gradient-to-tr from-purple-800 to-purple-700 i justify-around items-center">
 
    <div class="grid grid-cols-1 gap-4">
        <div class="pt-20">
    <DotLottieVue  class="flex w-full" autoplay loop src="https://lottie.host/3169fbe5-94a9-4d28-aa0f-c22b2649cea3/gELTFy4YQn.lottie" />
</div>
       
    <div class="w-3/4 pt-12">
      <h1 class="text-white font-bold text-4xl font-sans">Go Sewa Mobil</h1>
      <p class="text-white mt-2 mb-8">Nikmati Sewa Mobil Dan Menikmati Perjalanan Anda Di Kota Tujuan Tanpa Ribet</p>
      <button type="submit" class="block  bg-white text-indigo-800 mt-4 py-2 p-4 rounded-2xl font-bold mb-2">Pilih Mobil Di Kota Lamongan</button>
   
    </div>
</div>
  </div>

  
  <div class="flex w-1/2 justify-center items-center">
   
<slot />

  </div>
  
        </div>



</template>
