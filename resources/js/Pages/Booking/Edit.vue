<script>
export default {
    name: 'BookingsEdit',

    data() {
        return {
            form: {
                Description: '',
                Initial_date: '',
                End_date: '',
                Price: '',
                Service_id: '',
                Quantity_people: ''
            }
        };
    },
    

    methods: {
    submitForm() {
            axios.put(route('bookings.update', { booking: this.booking.id }), this.form)
                .then(response => {
                    // Manejar la respuesta del servidor después de la actualización
                })
                .catch(error => {
                    console.error('Error al actualizar el recurso:', error);
                });
            }
        }
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const props = defineProps({
    booking: {
        type: Object,
        required: true,
    },

    services: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <AppLayout>
        <div>
            <div>
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Editar reserva
                </h1>
            </div>

                <div class="grid grid-cols-6 gap-4">
                    <div class="...">
                            </div>
  
                    <div class="py-12 col-span-4">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <h2>
                                         Editar Reserva
                                    </h2>

                                    <div class="col-span-6 sm:col-span-6">
                        <InputLabel for="Description" value="Descripción" />
                        <TextInput
                            id="Description"
                            v-model="form.Description"
                            type="text"
                            class="mt-1 block w-full"
                            autocomplete="Description"
                        />
                        <InputError :message="$page.props.errors.Description" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <InputLabel for="Initial_date" value="Fecha inicial" />
                        <TextInput
                            id="Initial_date"
                            v-model="form.Initial_date"
                            type="date"
                            class="mt-1 block w-full"
                            autocomplete="Initial_date"
                        />
                        <InputError :message="$page.props.errors.Initial_date" class="mt-2" />
                    </div>
                    <div>
                        <div>
                    <select class="mt-1 block w-full" name="Service_id" id="Service_id" v-model="form.Service_id">
                        <option value="" disabled>Seleccionar Servicio</option>
                        <option v-for="service in services" :value="service.id">{{ service.Name }}</option>
                    </select>
        </div>

                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <InputLabel for="End_date" value="Fecha final" />
                        <TextInput
                            id="End_date"
                            v-model="form.End_date"
                            type="date"
                            class="mt-1 block w-full"
                            autocomplete="End_date"
                        />
                        <InputError :message="$page.props.errors.End_date" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-6">
                        <InputLabel for="Price" value="Precio" />
                        <TextInput
                            id="Price"
                            v-model="form.Price"
                            type="text"
                            class="mt-1 block w-full"
                            autocomplete="Price"
                        />
                        <InputError :message="$page.props.errors.Price" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <InputLabel for="Quantity_people" value="Cantidad de personas" />
                        <TextInput
                            id="Quantity_people"
                            v-model="form.Quantity_people"
                            type="number"
                            class="mt-1 block w-full"
                            autocomplete="Quantity_people"
                        />
                        <InputError :message="$page.props.errors.Quantity_people" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                    <InputLabel for="description" value="Estado" />
                
                    <select   class="mt-1 block w-full" name="State" id="State" v-model="form.State">
                        <option disabled  value="">Seleccione una Opción</option>
                        <option value="Activa">Activa</option>
                        <option value="Inactiva">Inactivo</option>
                        <option value="EnProceso">En proceso</option>
                        <option value="Cancelada">Cancelada</option>
                    </select>
                
                        </div>
                           


                    <PrimaryButton @click="submitForm">Guardar</PrimaryButton>
                           
                                </div>
                            </div>
                        </div>
                            </div>
                </div>
            </div>
    </AppLayout>
</template>