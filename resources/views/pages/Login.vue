<template layout="default">

    <div class="py-4 ">
        <h1 class="text-4xl flex justify-center mt-20">User Login</h1>
        
        <div class="max-w-sm mx-auto border border-gray-400 shadow mt-6 p-4 rounded bg-teal-500">
            <form @submit.prevent="submit">

                <div class="mb-4 flex flex-col">
                    <label for="username">User Name:</label>
                    <input v-model="form.username" type="text" class="field">
                    <div class="text-sm mx-auto text-red-500 italic mt-2" v-if="form.errors.username">{{ form.errors.username }}</div>
                </div>
                <div class="mb-4 flex flex-col">
                    <label for="password">Password:</label>
                    <input v-model="form.password" type="password" class="field">
                    <div class="text-sm mx-auto text-red-500 italic mt-2" v-if="form.errors.password">{{ form.errors.password }}</div>
                </div>
                <div class="mb-4 flex justify-center">
                    <button type="submit" class="btn-primary">
                        Log In
                    </button>
                </div>
                <div class="text-sm mx-auto text-red-500 italic mt-2" v-if="form.errors.authentication">{{ form.errors.authentication }}</div>

            </form>
        </div>
    </div>

</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3'

let form = useForm({
    'username': '',
    'password': ''
})

let submit = () => {
    form.post('/login')
}

</script>
