<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import { DotLottieVue } from '@lottiefiles/dotlottie-vue'
import Pengembalian from './Pengembalian.vue';

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-xl  text-gray-900">Hello Selamat Datang Di <p class="font-semibold">Aplikasi Pinjam Mobil</p> </div>

                    <div class="flex items-center justify-center  text-gray-800 p-10 bg-gray-200">
    <!-- Component Start -->
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 w-full max-w-6xl">
</div>


</div>
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
    name: "App",

    props: {
   dtmobil: Object,
   sewa: Number,
   Pengembalian: Number
  },
};
</script>