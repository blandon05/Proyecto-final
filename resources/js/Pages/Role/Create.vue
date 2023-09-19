<script>
export default {
    name: "RolesCreate",
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import RoleForm from "@/Components/Roles/Form.vue";
const form = useForm({
    Name_Rol: "",
    Description: "",
    State: "",
});
</script>

<template>
    <AppLayout>
        <div>
            <div class="grid grid-cols-6 gap-4">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Crear Rol
                </h1>
            </div>

            <div class="..."></div>

            <div class="py-12 col-span-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                    >
                        <div class="p-6 bg-white border-b border-gray-200">
                            <RoleForm
                                :form="form"
                                @submit="form.post(route('Roles.store'))"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
