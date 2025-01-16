<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';



const form = useForm({
    nama_mobil: '',
    merek_mobil: '',
    model_mobil: '',
    plat_mobil: '',
    tarif_mobil: '',
});

const submit = () => {
    form.post(route('mobil.store'), {
         onSuccess: () => {
            Swal.fire({
    text: 'Success! Anda Berhasil Menambahkan Data',
    icon: 'success',
    toast: true,
    showConfirmButton: false,
    position: 'top',
    timer: 3500
  });
                },
                onError: (errors) => {
                    Swal.fire({
    text: 'Maaf Tidak Dapat Menambahkan Data',
    icon: 'warning',
    toast: true,
    showConfirmButton: false,
    position: 'top',
    timer: 3500
  });
                },
    });
};
</script>




<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Halaman Tambah Mobil</h2>
        </template>

        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
      
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <form @submit.prevent="submit" class=" p-20">
           

           
              
                        <h2 class=" text-xl pb-8 text-gray-800 leading-tight">Lengkapi Data Mobil</h2>

           <div class=" border-y pt-8">
       
            <div>
            <InputLabel for="namamobil" value="Nama Mobil" />

            <TextInput
                id="namamobil"
                type="text"
                class="mt-1 block w-full"
                v-model="form.nama_mobil"
                required
                
                autocomplete="namamobil"
            />
        </div>
        
        <div class="mt-4">
            <InputLabel for="merekmobil" value="Merek Mobil" />

            <TextInput
                id="merekmobil"
                type="text"
                class="mt-1 block w-full"
                v-model="form.merek_mobil"
                required
                
                autocomplete="merekmobil"
            />
        </div>

        <div class="mt-4">
            <InputLabel for="modelmobil" value="Model Mobil" />

            <TextInput
                id="modelmobil"
                type="text"
                class="mt-1 block w-full"
                v-model="form.model_mobil"
                required
                
                autocomplete="modelmobil"
            />
        </div>


        <div class="mt-4">
            <InputLabel for="platmobil" value="No Plat Mobil" />

            <TextInput
                id="platmobil"
                type="text"
                class="mt-1 block w-full"
                v-model="form.plat_mobil"
                required
              
                autocomplete="platmobil"
            />
        </div>

        <div class="mt-4">
            <InputLabel for="tarifmobil" value="Tarif Mobil" />

            <TextInput
                id="tarifmobil"
                type="number"
                class="mt-1 block w-full"
                v-model="form.tarif_mobil"
                required
                
                autocomplete="tarifmobil"
            />
        </div>

      
           </div>
        <div class="flex items-center justify-end  mt-8 mb-6">
          

            <PrimaryButton  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          Tambah Data Mobil
            </PrimaryButton>
        </div>


      
    </form>

                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
    name: "App",
 
};
</script>