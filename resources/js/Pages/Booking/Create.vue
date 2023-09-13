<script>

export default {
    name: 'BookingsIndex',
}
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3"
import AppLayout from '@/Layouts/AppLayout.vue';
import BookingsForm from '@/Components/Bookings/Form.vue';
defineProps({
    services: {
        type: Object,
        required: true,
    },
})
const form = useForm({
    Description: '',
    Initial_date: '',
    End_date: '',
    Price: '',
    Service_id: '',
    Quantity_people: '',
});
</script>

<template>
    <AppLayout>
        <div>
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Crear Reserva {{services}}
                </h1>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <BookingsForm :form="form" @submit="form.post(route('bookings.store'))" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </AppLayout>
</template>