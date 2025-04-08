<script setup>
// import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';



const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>

        <form class="bg-white w-3/4 h-3/4 p-32">
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Ketemu Lagi</h1>
      <p class="text-lg font-normal text-gray-600 mb-16">Selamat Datang Di Sewa Mobil</p>
      
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-12">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Email Address" />
      </div>
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-16">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
      </div>
      <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</span>
      <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
    
    </form>
    
        
        <!-- <Head title="Log in" />

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center md:text-3xl font-extrabold text-gray-900">
            Login App Sewa Mobil
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600 md:max-w-full">
           Aplikasi layanan untuk sewa mobil
        </p>
    </div>
        
        <form @submit.prevent="submit" class="mt-16">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>

               
            </div>

            <div class="flex items-center justify-end mt-8 mb-6">
               
              


                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>

            <Link
                    
                    :href="route('register')"
                    class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                   Belum Punya Akun, Klik Daftar
                </Link>
        </form> -->
    </GuestLayout>
</template>
