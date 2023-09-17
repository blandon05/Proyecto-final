<script>
export default {
    name: 'ServiceDetail',
}
</script>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    service: {
        type: Object,
        required: true,
    },
})
const deleteService = id => {
    if (confirm('¿Estás seguro de querer eliminar este servicio?')) {
        Inertia.delete(route('services.destroy', id))
    }
}
</script>

<template>
  <AppLayout>
    <div>
        <div class="mt-4 grid grid-cols-6 gap-4" >
            <h1 class="font-semibold text-xl text-gray-800 leading-tight ">
                Detalle Servicio
            </h1>
        </div>

        <div class="..."></div>

<div class="py-12 col-span-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold mb-4">{{ service.Name }}</h1>
                        <div>
                            <label for="">Precio :</label>
                            <p class="text-gray-700 mb-4">{{ service.Price }}</p>
                        </div>
                        <div>
                            <label for="">Estado del servicio :</label>
                            <p class="text-gray-700">{{ service.State }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <Link :href="route('services.index')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</Link>
                        <Link :href="route('services.edit', service.id)" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Editar</Link>
                        <Link
                            class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            @click="deleteService(service.id)"
                        >
                            Eliminar
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </AppLayout>
      
    
</template>