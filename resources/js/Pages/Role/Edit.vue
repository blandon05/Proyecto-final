<script>
export default {
    name: 'RolesEdit',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import RoleForm from '@/Components/Roles/Form.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    rol: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    Name_Rol: props.rol.Name_Rol,
    Description: props.rol.Description,
    State: props.rol.State,
});
</script>

<template>
    <AppLayout>
        <div>
            <div>
             
            </div>

            <div class="grid grid-cols-6 gap-4">
                <h1 class="mt-4 font-semibold text-xl text-gray-800 leading-tight">
                    Editar Rol
                </h1>
                    <div class="...">
                    </div>
  
                <div class="py-12 col-span-4">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <RoleForm :updating="true" :form="form"
                                    @submit="form.put(route('Roles.update', rol.id))" />
                            </div>
                        </div>
                    </div>
               

                </div>
            </div>
        </div>
    </AppLayout>
</template>