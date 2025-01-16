<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengguna</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-4xl font-semibold  text-gray-900">Data Pengguna </div>
 
                </div>

                <div class="bg-white container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <table  id="example" class="table-auto w-full table-bordered">
        <thead class="bg-gray-200">
            <tr>
          <th  class="px-4 py-2">ID Pengguna</th>
          <th  class="px-4 py-2">Nama Pengguna</th>
          <th  class="px-4 py-2">Alamat Pengguna</th>
          <th  class="px-4 py-2">No Hp Pengguna</th>
          <th  class="px-4 py-2">No SIM Pengguna</th>
          <th  class="px-4 py-2">Cread</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="pengguna in penggunas" :key="pengguna.id_pengguna">
          <td class="border px-4 py-2">{{ pengguna.id_pengguna }}</td>
          <td class="border px-4 py-2">{{ pengguna.nama_pengguna }}</td>
          <td class="border px-4 py-2">{{ pengguna.alamat }}</td>
          <td class="border px-4 py-2">{{ pengguna.nomor_telepon }}</td>
          <td class="border px-4 py-2">{{ pengguna.nomor_sim }}</td>
          <td class="border px-4 py-2">{{ pengguna.created_at }}</td>
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
    penggunas: Object,
  },
  

 
};


</script>