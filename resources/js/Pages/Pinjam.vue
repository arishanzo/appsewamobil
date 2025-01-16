<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head, Link, useForm } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pinjaman</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                  
                    <div class="p-6 text-4xl font-semibold  text-gray-900">History Pinjaman
                    
                    
                    
                    </div>
                
              </div>
                <div class="bg-white container mx-auto px-4 sm:px-6 lg:px-8 py-8">

                
    <table  id="example" class="table-auto w-full table-bordered">
        <thead class="bg-gray-200">
            <tr>
                
          <th  class="px-4 py-2">Nama Mobil</th>
          <th  class="px-4 py-2">Model Mobil</th>
          <th  class="px-4 py-2">Tanggal Mulai</th>
          <th  class="px-4 py-2">Tanggal Selesai</th>
          <th  class="px-4 py-2">Total Tarif</th>
          <th  class="px-4 py-2">Status</th>
          <th  class="px-4 py-2">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="Pinjam in Pinjamans" :key="Pinjam.id_sewa">
       
            
          <td class="border px-4 py-2">{{ Pinjam.nama_mobil }}</td>
          
          <td class="border px-4 py-2">{{ Pinjam.model_mobil }}</td>
          
          <td class="border px-4 py-2">{{ Pinjam.tgl_mulai }}</td>
          <td class="border px-4 py-2">{{ Pinjam.tgl_selesai }}</td>
          <td class="border px-4 py-2">{{ Pinjam.total_tarif }}</td>
          <td class="border px-4 py-2 text-center"><span class="bg-gray-100 font-bold p-2"> <span :style="{ color: Pinjam.status_pinjam === 'Di Sewa' ? 'red' : 'green' }">
          {{ Pinjam.status_pinjam}}
        </span>
    </span></td>
          <td class="border px-4 py-2 text-center"> 

            
            <Link
                    
             v-if="Pinjam.status_pinjam === 'Di Sewa'"
                    :href="route('pengembalian.create',Pinjam.id_sewa)"
                   
                    class="btn btn-blue bg-red-500 p-2 text-sm text-gray-100 hover:text-gray-200 rounded-md"
                >
                 Kembalikan
                </Link>
            
            
                <Link
        v-else
        href=""
        @click.prevent="showWarning(Pinjam)"
        class=" btn btn-blue bg-blue-500 p-2 text-sm text-gray-100 hover:text-gray-200 rounded-md"
      >
       Kembalikan
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
   Pinjamans: Object,
   successMessage: String
  },
 
  data() {
    return {
      message: this.successMessage || null
    };
  },

  

    methods: {
    showWarning(Pinjam) {
      // Tampilkan SweetAlert jika status tidak ready
      Swal.fire({
        title: 'Pesan',
        text: `Status Mobil Sudah "${Pinjam.status_pinjam}" Anda Tidak Bisa Mengembalikan Lagi.`,
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