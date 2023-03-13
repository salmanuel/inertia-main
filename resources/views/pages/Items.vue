<template layout>

    <div class="flex justify-center mb-3">
        <h1 class="mb-3">List of Offices</h1>

    </div>
        <hr>
        <table class="table py-4 max-w-4xl mx-auto mt-5 bg-teal-500">

            <thead>
                <tr>
                    <th>Serial #</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Office</th>
                    <th>Value</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item of items" :key="item.id">
                    <td>{{ ('00000000' + item.id).slice(-8) }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.description }}</td>
                    <td>{{ item.office.name }}</td>
                    <td>{{ item.value }}</td>
                    <td>{{ item.status }}</td>
                </tr>
            </tbody>
        </table>
</template>

<script setup>

defineProps({
    'items':Array
})

</script>
