<script>
export default {
    name: 'PermissionsEdit',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import PermissionForm from '@/Components/Permissions/Form.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    permission: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    name: props.permission.name,
    module: props.permission.module,
});
</script>

<template>
    <AppLayout>
        <div >
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Editar permiso
                </h1>
            </div>

           <div class="grid grid-cols-6 gap-4">
            <div class="..."></div>

                <div class="py-12 col-span-4">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <PermissionForm :updating="true" :form="form"
                                    @submit="form.put(route('Permissions.update', permission.id))" />
                            </div>
                        </div>
                    </div>
                </div>   
           </div>
              
        </div>
    </AppLayout>
</template>