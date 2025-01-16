<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';




</script>




<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Halaman Sewa</h2>
        </template>

        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
      
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <form @submit.prevent="submit" class=" p-20">
           

           
              
                        <h2 class=" text-xl pb-8 text-gray-800 leading-tight">Merek dan Nama Mobil Otomatis Muncul Disini Lengkapi Datanya</h2>

           <div class=" border-y pt-8">

            
       
            <div hidden>
            <InputLabel for="id_mobil" value="Kode Mobil" />

            <TextInput
                id="id_mobil"
                type="text"
                class="mt-1 block w-full"
                v-model="Mobils.id"
                required
                readonly
            
                autocomplete="id_mobil"
            />
        </div>
            <div>
            <InputLabel for="namamobil" value="Nama Mobil" />

            <TextInput
                id="namamobil"
                type="text"
                class="mt-1 block w-full"
                v-model="Mobils.nama_mobil"
                required
                readonly
                autocomplete="namamobil"
            />
        </div>
        

        <div class="mt-4">
            <InputLabel for="tarif" value="Tarif Per Hari" />

            <TextInput
                id="tarif"
                type="text"
                class="mt-1 block w-full"
                v-model="Mobils.tarif_mobil"
                required
                readonly
                autocomplete="tarif"
            />
        </div>

           <div class=" border-y pt-8"></div>
        <div class="mt-8">
            <InputLabel for="startDate" value="Tanggal Mulai" />

<TextInput
id="startDate"
type="date"
class="mt-1 block w-full"

required
autocomplete="startDate"

v-model="startDate" 
 @change="calculateDays"
/>

        </div>

        

        <div class="mt-4">
            <InputLabel for="endDate" value="Tanggal Selesai" />

<TextInput
id="endDate"
type="date"
class="mt-1 block w-full"

required
autocomplete="endDate"

 v-model="endDate"
  @change="calculateDays"
/>

        </div>

       
        <div class="mt-8">
            <InputLabel for="totalTarif" value="Total Biaya" />

<TextInput
id="totalTarif"
type="number"
class="mt-1 block w-full"

required
autocomplete="totalTarif"

v-model="totalTarif" 
/>

        </div>

           </div>
        <div class="flex items-center justify-end  mt-8 mb-6">
          

            <PrimaryButton >
           Sewa Mobil Sekarang
            </PrimaryButton>
        </div>


      
    </form>

                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>

import axios from 'axios';
import { Head, Link, useForm } from '@inertiajs/vue3';


export default {
    name: "App",

    props: {
    Mobils: Object,
    tarif: Number
  },
  data() {
    return {
        startDate: '',
        endDate: '',
        days: 0,
      totalTarif: 0,
    };
  },

  methods: {
     // Fungsi untuk menghitung jumlah hari dan total tarif
     calculateDays() {
      if (this.startDate && this.endDate && this.tarif > 0) {
        const start = new Date(this.startDate);
        const end = new Date(this.endDate);

        // Menghitung jumlah hari
        const timeDifference = end - start;
        const dayDifference = timeDifference / (1000 * 3600 * 24) + 1; // Menambahkan 1 untuk mencakup hari pertama

        this.days = dayDifference;
        this.totalTarif = this.tarif * this.days; // Menghitung total tarif berdasarkan jumlah hari
      } else {
        this.days = 0;
        this.totalTarif = 0;
      }
    },

    async submit() {
      try {
        const response = await axios.put(`http://127.0.0.1:8000/api/sewamobil/${this.Mobils.id_mobil}`, {
            startDate: this.startDate,
          endDate: this.endDate,
          totalTarif: this.totalTarif,
        });

        console.log('Post updated:', response.data);
        alert('Mobil Sewa Berhasil Di Tambahkan');
      } catch (error) {
        console.error('Error updating post:', error);
        alert('Gagal Di Tambahkan');
      }
    },

    
  
  },

};

</script>