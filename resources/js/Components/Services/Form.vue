<script>
export default {
    name: 'ServicesForm'
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
})
defineEmits(['submit'])
</script>

<template>
    <FormSection @submitted="$emit('submit')">
        <template #title>
            {{ updating ? 'Editar Servicio' : 'Crear nuevo Servicio' }}
        </template>

        <template #description>
            {{ updating ? 'Actualiza tu Servicio' : 'Crea un nuevo Servicio.' }}
        </template>
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="Name" value="Nombre" />
                <TextInput
                    id="Name"
                    v-model="form.Name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="Name"
                />
                <InputError :message="$page.props.errors.Name" class="mt-2" />
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
                <InputLabel for="description" value="Descripción" />
                
                <select   class="mt-1 block w-full" name="State" id="State" v-model="form.State">
                    <option disabled  value="">Seleccione una Opción</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
                <InputError :message="$page.props.errors.State" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>