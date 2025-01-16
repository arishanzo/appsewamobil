<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengembalian</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                  
                    <div class="p-6 text-4xl font-semibold  text-gray-900">History Pengembalian
                    
                    
                    
                    </div>
                
              </div>
                <div class="bg-white container mx-auto px-4 sm:px-6 lg:px-8 py-8">

                
    <table  id="example" class="table-auto w-full table-bordered">
        <thead class="bg-gray-200">
            <tr>
                <th  class="px-4 py-2">ID Pinjaman</th>
          <th  class="px-4 py-2">Nama Mobil</th>
          <th  class="px-4 py-2">Model Mobil</th>
          <th  class="px-4 py-2">Tanggal Mulai</th>
          <th  class="px-4 py-2">Tanggal Selesai</th>
          <th  class="px-4 py-2">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="Pengembalian in Pengembalians" :key="Pengembalian.id_pengembalian">
       
            
          <td class="border px-4 py-2">{{ Pengembalian.id_sewa }}</td>
          <td class="border px-4 py-2">{{ Pengembalian.nama_mobil }}</td>
          
          <td class="border px-4 py-2">{{ Pengembalian.model_mobil }}</td>
          
          <td class="border px-4 py-2">{{ Pengembalian.tgl_mulai }}</td>
          <td class="border px-4 py-2">{{ Pengembalian.tgl_selesai }}</td>
          <td class="border px-4 py-2">{{ Pengembalian.status_pinjam }}</td>
   
        </tr>
      </tbody>
           
    </table>

   
    
</div>
                
            </div>
            
        </div>
    </AuthenticatedLayout>
</template>

<script>
$(document).ready(function() {
    if (!$.fn.DataTable.isDataTable('#example')) {
    $('#example').DataTable({
        // konfigurasi DataTable
    });
}
    });

export default {
    name: "App",

    props: {
   Pengembalians: Object,
   
  },
 
};


</script>