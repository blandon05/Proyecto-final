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
    role: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    Name_Rol: props.role.Name_Rol,
    Description: props.role.Description,
});
</script>

<template>
    <AppLayout>
        <div>
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Editar Rol
                </h1>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <RoleForm :updating="true" :form="form"
                                @submit="form.put(route('Roles.update', role.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>