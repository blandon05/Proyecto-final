<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                CABAÑAS Y GLAMPING
            </h2>
        </template>
        <div class="grid grid-cols-6 gap-4">
                <div class="..."></div>

            <div class="py-12 col-span-4">
        
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>
        </div>
    </AppLayout>
</template>
