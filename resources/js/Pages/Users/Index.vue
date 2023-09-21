<script>
export default {
    name: 'UsersIndex',
}
</script>

<script setup>
import { Link } from '@inertiajs/vue3'


import AppLayout from '@/Layouts/AppLayout.vue';
/* import { Inertia } from '@inertiajs/vue3'
 */defineProps({
    users: {
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
                                    <h1>   Lista de usuarios y clientes</h1>
                                 
                                </div>
                                <div class="mt-4">
                                    <table class="table-auto w-full">
                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <th class="px-4 py-2">Nombre usuario</th>
                                                <th class="px-4 py-2">Email</th>
                                                <th class="px-4 py-2">Fecha de creación</th>
                                                <th class="px-4 py-2">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-sm divide-y divide-gray-100"  v-for="user in users">
                                           
                                                <tr>
                                              
                                                    <td class="border px-4">{{user.name  }}</td>
                                                    <td class="border px-4">{{ user.email}}</td>
                                                    <td class="border px-4">{{ user.created_at }}</td>
                                                    <td class="border px-4">Activo</td>
                                                </tr>
                                           
                                        </tbody>
                                        
                                        <tfoot v-if="users.last_page > 1"
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                            <tr>
                                                <td colspan="4" class="border px-4 py-4 text-right">
                                                    <Link v-if="users.current_page > 1" :href="users.prev_page_url"
                                                        class="px-3 py-1 bg-indigo-500 hover:bg-gray-600 text-white rounded">
                                                    Anterior
                                                    </Link>
                                                    <Link v-if="users.current_page < users.last_page"
                                                        :href="users.next_page_url"
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
