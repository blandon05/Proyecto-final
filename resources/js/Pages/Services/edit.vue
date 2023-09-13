<script>
export default {
    name: 'ServiceEdit',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import ServiceForm from '@/Components/Services/Form.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    service: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    Name: props.service.Name,
    Price: props.service.Price,
    State: props.service.State,
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
                            <ServiceForm :updating="true" :form="form"
                                @submit="form.put(route('services.update', service.id))" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>