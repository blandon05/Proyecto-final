<script>
export default {
    name: 'rolesIndex',
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'


import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    roles: {
        type: Object,
    },
})

</script>

<template>
    <AppLayout>
        
                <div class="grid grid-cols-6 gap-4">
                    <div class="...">
                    </div>
  
                <div class="py-12 col-span-4">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="flex justify-between">
                                    <Link :href="route('Roles.create')"
                                        class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                    Crear Rol 
                                    </Link>
                                </div>
                                <div class="mt-4">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="px-4 py-2">Nombre de Rol </th>
                                                <th class="px-4 py-2">Descripcion</th>
                                                <th class="px-4 py-2">Estado</th>
                                                <th class="px-4 py-2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100"  v-for="rol in roles">
                                           
                                                <tr>
                                              
                                                    <td class="border px-4">{{ rol.Name_Rol }}</td>
                                                    <td class="border px-4">{{ rol.Description }}</td>
                                                    <td class="border px-4">{{ rol.State }}</td>
                                                    <td class="border px-4 py-4" style="width: 300px">
                                                        <Link :href="route('Roles.edit', rol.id)"
                                                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                                        Editar
                                                        </Link>
                                                        <Link :href="route('Roles.show', rol.id)"
                                                            class="ml-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded">
                                                        Ver
                                                        </Link>
                                                        
                                                    </td>
                                                </tr>
                                           
                                        </tbody>
                                        
                                        <tfoot v-if="roles.last_page > 1"
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <td colspan="4" class="border px-4 py-4 text-right">
                                                    <Link v-if="roles.current_page > 1" :href="roles.prev_page_url"
                                                        class="px-3 py-1 bg-indigo-500 hover:bg-gray-600 text-white rounded">
                                                    Anterior
                                                    </Link>
                                                    <Link v-if="roles.current_page < roles.last_page"
                                                        :href="roles.next_page_url"
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
        
    </AppLayout>
</template>