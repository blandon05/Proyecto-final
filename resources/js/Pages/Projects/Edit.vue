<script>
export default {
    name: 'ProjectEdit',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import ProjectForm from '@/Components/Projects/Form.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    project: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    name: props.project.name,
    description: props.project.description,
});
</script>

<template>
    <AppLayout>
        <div>
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Editar proyecto
                </h1>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <ProjectForm :updating="true" :form="form"
                                @submit="form.put(route('projects.update', project.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>