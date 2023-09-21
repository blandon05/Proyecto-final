<script>
export default {
    name: 'PermissionsIndex',
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'


import AppLayout from '@/Layouts/AppLayout.vue';
/* import { Inertia } from '@inertiajs/vue3'
 */defineProps({
    Permission: {
        type: Object,
    },
})

</script>

<template>
    <AppLayout>
        <div>
            <div class="grid grid-cols-6 gap-4">
                <div class="..."></div>

            <div class="py-12 col-span-4">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="flex justify-between">
                                    <Link :href="route('Permissions.create')"
                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                            Crear Permiso
                                    </Link>
                                </div>
                                <div class="mt-4">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="px-4 py-2">Nombre</th>
                                                <th class="px-4 py-2">Modulo</th>
                                                <th class="px-4 py-2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100"  v-for="perm in Permission">
                                           
                                                <tr>
                                              
                                                    <td class="border px-4">{{ perm.name }}</td>
                                                    <td class="border px-4">{{ perm.module }}</td>
                                                    <td class="border px-4 py-4" style="width: 300px">

                                                        <Link :href="route('Permissions.update', { Permission: perm.id })"
                                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar
    <!-- Resto del enlace -->
</Link>

                                                      
                                                        
                                                    </td>
                                                </tr>
                                           
                                        </tbody>
                                        
                                        <tfoot v-if="Permission.last_page > 1"
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <td colspan="4" class="border px-4 py-4 text-right">
                                                    <Link v-if="Permission.current_page > 1" :href="services.prev_page_url"
                                                        class="px-3 py-1 bg-indigo-500 hover:bg-gray-600 text-white rounded">
                                                    Anterior
                                                    </Link>
                                                    <Link v-if="Permission.current_page < services.last_page"
                                                        :href="Permission.next_page_url"
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
