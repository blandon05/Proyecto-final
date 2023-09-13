<script>

export default {
    name: 'ProjectsCreate',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"
import AppLayout from '@/Layouts/AppLayout.vue';
import ProjectForm from '@/Components/Projects/Form.vue';
const form = useForm({
    name: '',
    description: '',
});
</script>

<template>
    <AppLayout>
        <div>
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Crear proyecto
                </h1>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ProjectForm :form="form" @submit="form.post(route('projects.store'))" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </AppLayout>
</template>