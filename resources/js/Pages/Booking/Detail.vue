<script>
export default {
    name: 'BookingDetail',
}
</script>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    booking: {
        type: Object,
        required: true,
    },
})

const deleteBooking = id => {
    if (confirm('¿Estás seguro de querer eliminar esta reserva?')) {
        Inertia.delete(route('bookings.destroy', id))
    }
}
</script>

<template>
  <AppLayout>
    <div>
        <div class="">
                
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Detalle reserva
            </h1>
        </div>

        <div class="grid grid-cols-6 gap-4">
            <div class="...">
            </div>
            <div class="py-12 col-span-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="text-2xl font-bold mb-4">{{ booking.name }}</h1>
                        <p class="text-gray-700 mb-4">
                           
                        </p>
                        <p class="text-gray-700 mb-4">{{ booking.Description }}</p>
                        <p class="text-gray-700">{{ booking.Initial_date }}</p>
                        <p class="text-gray-700">{{ booking.End_date }}</p>
                        <p class="text-gray-700">{{ booking.Price }}</p>
                        <p class="text-gray-700">{{ booking.Service_id }}</p>
                        <p class="text-gray-700">{{ booking.Quantity_people }}</p>
                        <p class="text-gray-700">{{ booking.State }}</p>
                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <Link :href="route('bookings.index')" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Volver</Link>
                        <Link :href="route('bookings.edit', booking.id)" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">Editar</Link>
                        <Link
                            class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            @click="deleteBooking(booking.id)"
                        >
                            Eliminar
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        </div>
           
  
        
    </div>
  </AppLayout>
      
    
</template>