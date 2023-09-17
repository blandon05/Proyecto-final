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
                                <div class="flex justify-between">
                                    <Link :href="route('bookings.create')"
                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                    Crear Reserva
                                    </Link>
                                </div>
                                <div class="mt-4">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="px-4 py-2">Descripción </th>
                                                <th class="px-4 py-2">Fecha Inicial</th>
                                                <th class="px-4 py-2">Fecha Final</th>
                                                <th class="px-4 py-2">Precio</th>
                                                <th class="px-4 py-2">Servicio</th>
                                                <th class="px-4 py-2">Cantidad de personas</th>
                                                <th class="px-4 py-2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100"  v-for="booking in bookings">
                                                <tr>
                                                    <td class="border px-4">{{ booking.Description }}</td>
                                                    <td class="border px-4">{{ booking.Initial_date}}</td>
                                                    <td class="border px-4">{{ booking.End_date }}</td>
                                                    <td class="border px-4">{{ booking.Price}}</td>
                                                    <td class="border px-4">{{ booking.Service_id }}</td>
                                                    <td class="border px-4">{{ booking.Quantity_people }}</td>
                                                    <td class="border px-4 py-4" style="width: 300px">
                                                        <Link :href="route('bookings.edit', booking.id)"
                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar
                                                        </Link>
                                                        <Link :href="route('bookings.show', booking.id)"
                                                            class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                                        Ver
                                                        </Link>
                                                        <Link
                                                            class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                                            @click="deletebooking(booking.id)">
                                                        Eliminar
                                                        </Link>
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