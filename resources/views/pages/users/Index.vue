<template layout>
    
    <div class="flex justify-center mb-3">
        <h1 class="flex mr-50">List of Users</h1>
        <Link href="/users/create" class="btn-primary ml-96">Create User</Link>
    </div>

    <hr>

    <table class="table py-4 max-w-4xl mx-auto mt-5 bg-teal-500">
        <thead>
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user of users" :key="user.id">
                <td>{{ ('00000000' + user.id).slice(-8) }}</td>
                <td>{{ user.fullname }}</td>
                <td>{{ user.designation }}</td>
                <td>{{ user.department }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    'users': Array
})
</script>
