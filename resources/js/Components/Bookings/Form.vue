<script>
export default {
    name: 'BookingsForm'
}
</script>

<script setup>
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    form: {
        type: Object,
        required: true,
    },
    updating: {
        type: Boolean,
        required: false,
        default: false,
    },
    services: {
        type: Object,
        required: true,
    },
})
defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Editar Reserva' : 'Crear nueva Reserva' }}
        </template>
  
        <template #description>
            {{ updating ? 'Actualiza tu Reserva' : 'Crea un nuevo Reserva.' }}
        </template>
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="Description" value="Description" />
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
                <InputLabel for="Initial_date" value="Initial_date" />
                <TextInput
                    id="Initial_date"
                    v-model="form.Initial_date"
                    type="date"
                    class="mt-1 block w-full"
                    autocomplete="Initial_date"
                />
                <InputError :message="$page.props.errors.Initial_date" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="End_date" value="End_date" />
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
                <InputLabel for="Price" value="Price" />
                <TextInput
                    id="Price"
                    v-model="form.Price"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="Price"
                />
                <InputError :message="$page.props.errors.Price" class="mt-2" />
            </div>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    Crear Reserva {{services}}
                </h1>

            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="description" value="Description" />
                
                <select  class="mt-1 block w-full" name="Service_id" id="Service_id" v-model="form.State">
                    <option value="Service_id">{{services}}</option>s
                </select>
                <InputError :message="$page.props.errors.Service_idtate" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="Quantity_people" value="Quantity_people" />
                <TextInput
                    id="Quantity_people"
                    v-model="form.Quantity_people"
                    type="number"
                    class="mt-1 block w-full"
                    autocomplete="Quantity_people"
                />
                <InputError :message="$page.props.errors.Quantity_people" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>