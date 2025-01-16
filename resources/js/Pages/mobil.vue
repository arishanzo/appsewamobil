<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Mobil</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                  
                    <div class="p-6 text-4xl font-semibold  text-gray-900">Data Mobil
                    
                    
                    
                    </div>
                </div>
<div class="pt-8 bg-white p-8 pb-8">
                <Link
                   
                   :href="route('mobil.create')"
                  
                   class="p-2  mb-16 btn btn-blue bg-blue-500  text-xl text-gray-100 hover:text-gray-200 rounded-md"
               >
                 Tambah Data
               </Link>
              </div>
                <div class="bg-white container mx-auto px-4 sm:px-6 lg:px-8 py-8">

                
    <table  id="example" class="table-auto w-full table-bordered">
        <thead class="bg-gray-200">
            <tr>
          <th  class="px-4 py-2">Nama Mobil</th>
          <th  class="px-4 py-2">Merek Mobil</th>
          <th  class="px-4 py-2">Model Mobil</th>
          <th  class="px-4 py-2">Plat Mobil</th>
          <th  class="px-4 py-2">Tarif</th>
          <th  class="px-4 py-2">Status</th>
          <th  class="px-4 py-2">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="Mobil in Mobils" :key="Mobil.id_mobil">
          <td class="border px-4 py-2">{{ Mobil.nama_mobil }}</td>
          <td class="border px-4 py-2">{{ Mobil.merek_mobil }}</td>
          <td class="border px-4 py-2">{{ Mobil.model_mobil }}</td>
          <td class="border px-4 py-2">{{ Mobil.plat_mobil }}</td>
          <td class="border px-4 py-2">{{ Mobil.tarif_mobil }}</td>
          <td class="border px-4 py-2 text-center"><span class="bg-gray-100 font-bold p-2"> <span :style="{ color: Mobil.status === 'Ready' ? 'green' : 'red' }">
          {{ Mobil.status }}
        </span>
    </span></td>
          <td class="border px-4 py-2 text-center"> 

            
            <Link
                    
             v-if="Mobil.status === 'Ready'"
                    :href="route('sewa.create', Mobil.id_mobil)"
                   
                    class="btn btn-blue bg-blue-500 p-2 text-sm text-gray-100 hover:text-gray-200 rounded-md"
                >
                  Sewa Mobil
                </Link>
            
            
                <Link
        v-else
        href="#"
        @click.prevent="showWarning(Mobil)"
        class=" btn btn-blue bg-blue-500 p-2 text-sm text-gray-100 hover:text-gray-200 rounded-md"
      >
       Sewa Mobil
      </Link>
    
    </td>
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
    Mobils: Object,
  },

  formatRupiah(value) {
      if (!value) return 'Rp 0';
      return 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    },
  

    methods: {
    showWarning(Mobil) {
      // Tampilkan SweetAlert jika status tidak ready
      Swal.fire({
        title: 'Data Tidak Siap!',
        text: `Status "${Mobil.status}" Anda Tidak Bisa Pesan.`,
        icon: 'warning',
        confirmButtonText: 'OK',
}).then((result) => {
  if (result.isConfirmed) {
    // Muat ulang halaman
    window.location.reload();
  }
      });

      
    },
    
  },
};


</script>