<script>
export default {
    name: "ServicesIndex",
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import ServicesForm from "@/Components/Services/Form.vue";
const form = useForm({
    Name: "",
    Price: "",
    State: "",
});
</script>

<template>
    <AppLayout>
        <div>
            <div class="grid grid-cols-6 gap-4">
                <div>
                    <h1
                        class="font-semibold text-xl text-gray-800 leading-tight"
                    >
                        Crear proyecto
                    </h1>
                </div>

                <div class="..."></div>

                <div class="py-12 col-span-4">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div
                            class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                        >
                            <div class="p-6 bg-white border-b border-gray-200">
                                <ServicesForm
                                    :form="form"
                                    @submit="form.post(route('services.store'))"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
