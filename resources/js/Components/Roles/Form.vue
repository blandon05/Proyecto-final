<script>
export default {
    name: 'RolesForm'
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
            {{ updating ? 'Editar rol' : 'Crear nuevo rol' }}
        </template>

        <template #description>
            {{ updating ? 'Actualiza tu rol' : 'Crea un nuevo rol.' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="Nombre" value="Nombre" />
                <TextInput
                    id="Name_Rol"
                    v-model="form.Name_Rol"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="Name_Rol"
                />
                <InputError :message="$page.props.errors.Name_Rol" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="Descripción" value="Descripción" />
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