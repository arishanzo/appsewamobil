<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    alamat: '',
    nohp: '',
    sim: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
        onSuccess: () => {
            Swal.fire({
    text: 'Success! Anda Berhasil Regristasi',
    icon: 'success',
    toast: true,
    showConfirmButton: false,
    position: 'top',
    timer: 3500
  });
                },
                onError: (errors) => {
                    Swal.fire({
    text: 'Maaf Alamat Email atau Nama Sudah Terdaftar',
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
    <GuestLayout>
        <Head title="Register" />

        
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center md:text-3xl font-extrabold text-gray-900">
            Register App Sewa Mobil
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 md:max-w-full">
           Aplikasi layanan untuk sewa mobil
        </p>
    </div>

        <form @submit.prevent="submit" class="md:mt-8 mt-8">
           

           
              

               <div class=" border-y pt-8">
                <h2 class="pb-8 text-gray-400">Biodata Diri*</h2>

                <div>
                <InputLabel for="name" value="Nama" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <InputLabel for="alamat" value="Alamat" />

<TextInput
    id="alamat"
    type="text"
    class="mt-1 block w-full"
    v-model="form.alamat"
    required
    autocomplete="alamat"
/>

            </div>

            <div class="mt-4">
                <InputLabel for="nohp" value="No HP" />

<TextInput
    id="nohp"
    type="text"
    class="mt-1 block w-full"
    v-model="form.nohp"
    required
    autocomplete="nohp"
/>

            </div>


            <div class="mt-4">
                <InputLabel for="sim" value="No SIM" />

<TextInput
    id="sim"
    type="number"
    class="mt-1 block w-full"
    v-model="form.sim"
    required
    autocomplete="sim"
/>

            </div>
               </div>


               <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

            </div>

            
            <!-- <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

               
            </div> -->
            <div class="flex items-center justify-end  mt-8 mb-6">
              

                <PrimaryButton  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>


            <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Sudah Punya Akun, Silahkan Kembali
                </Link>
        </form>
    </GuestLayout>
</template>
