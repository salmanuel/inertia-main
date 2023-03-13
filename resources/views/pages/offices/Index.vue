<template layout>


    <div class="flex justify-center">
        <h1 class="mb-3">List of Offices</h1>

    </div>

    <hr>

    <table class="table py-4 max-w-4xl mx-auto mt-5 bg-teal-500">
        <thead>
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Building</th>
                <th>In-charge</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="office in offices" :key="office.id">
                <td>{{ ('00000000' + office.id) }}</td>
                <td>{{ office.name }}</td>
                <td>{{ office.building }}</td>
                <td>{{ office.user.fullname }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>

defineProps({
    offices: Array
})
</script>
