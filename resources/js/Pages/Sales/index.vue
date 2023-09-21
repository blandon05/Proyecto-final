<script>
export default {
    name: 'bookingsIndex',
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'


import AppLayout from '@/Layouts/AppLayout.vue';
/* import { Inertia } from '@inertiajs/vue3'
 */defineProps({
    bookings: {
        type: Object,
        required: true,
    },
})
const deletebooking = id => {
    if (confirm('¿Estás seguro de querer eliminar esta reserva?')) {
        Inertia.delete(route('bookings.destroy', id))
    }
}
</script>


<template>
    <AppLayout>
        <div>
            <div class="grid grid-cols-6 gap-4">
                <div class="...">
                    </div>
  
                <div class="py-12 col-span-4">
                    
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="mb-4">
                        <h2 class="text-xl font-semibold center">VENTAS</h2>
                        <p class="text-gray-700">{{  }}</p>
                        </div>
                                <div class="flex justify-between">
                                  
                                </div>
                                <div class="mt-4">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th>Id Reserva</th>
                                                <th class="px-4 py-2">Descripción </th>
                                               
                                                
                                                <th class="px-4 py-2">Servicio</th>
                                                <th class="px-4 py-2">Cantidad de personas</th>
                                                <th class="px-4 py-2">Fecha Inicial</th>
                                                <th class="px-4 py-2">Fecha Final</th>
                                                <th class="px-4 py-2">Precio</th>
                                                <th class="px-4 py-2">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100"  v-for="booking in bookings">
                                                <tr>
                                                    <td class="border px-4">{{ booking.id }}</td>
                                                    <td class="border px-4">{{ booking.Description }}</td>
                                                    
                                                    <td class="border px-4">{{ booking.Service_id }}</td>
                                                    <td class="border px-4">{{ booking.Quantity_people }}</td>
                                                    <td class="border px-4">{{ booking.Initial_date}}</td>
                                                    <td class="border px-4">{{ booking.End_date }}</td>
                                                    <td class="border px-4">{{ booking.Price}}</td>
                                                    <td class="border px-4">
                                                        <span v-if="booking.State === 'Activo'"
                                                                class="bg-blue-500 text-white py-1 px-2 rounded-full">
                                                            {{ booking.State }}
                                                        </span>
                                                        <span v-if="booking.State === 'Cancelada'"
                                                                class="bg-red-500 text-white py-1 px-2 rounded-full">
                                                            {{ booking.State }}
                                                        </span>
                                                        <span v-if="booking.State === 'Inactivo'"
                                                                class="bg-gray-500 text-white py-1 px-2 rounded-full">
                                                            {{ booking.State }}
                                                        </span>
                                                        <span v-if=" booking.State == 'EnProceso' "
                                                                class="bg-gray-500 text-white py-1 px-2 rounded-full">
                                                            {{ booking.State }}
                                                        </span>
                                                        <span v-if="booking.State == 'En Proceso' "
                                                                class="bg-green-500 text-white py-1 px-2 rounded-full">
                                                            {{ booking.State }}
                                                        </span>

                                                      
                                                    </td>
                                                                                                  
                                                </tr>
                                            </tbody>
                                        <tfoot v-if="bookings.last_page > 1"
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <td colspan="4" class="border px-4 py-4 text-right">
                                                    <Link v-if="bookings.current_page > 1" :href="bookings.prev_page_url"
                                                        class="px-3 py-1 bg-indigo-500 hover:bg-gray-600 text-white rounded">
                                                    Anterior
                                                    </Link>
                                                    <Link v-if="bookings.current_page < bookings.last_page"
                                                        :href="bookings.next_page_url"
                                                        class="ml-2 px-3 py-1 bg-indigo-500 hover:bg-gray-600 text-white rounded">
                                                    Siguiente
                                                    </Link>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>