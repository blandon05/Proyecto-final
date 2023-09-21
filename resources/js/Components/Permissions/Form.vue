<script>
export default {
    name: 'PermissionsForm'
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
            {{ updating ? 'Editar Permiso' : 'Crear nuevo Permiso' }}
        </template>

        <template #description>
            {{ updating ? 'Actualiza tu Permiso' : 'Crea un nuevo Permiso.' }}
        </template>
        <template #form>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="name" value="Nombre" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="name"
                />
                <InputError :message="$page.props.errors.name" class="mt-2" />
            </div>
            <div class="col-span-6 sm:col-span-6">
                <InputLabel for="module" value="Nombre módulo" />
                <TextInput
                    id="module"
                    v-model="form.module"
                    type="text"
                    class="mt-1 block w-full"
                    autocomplete="module"
                />
                <InputError :message="$page.props.errors.module" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <PrimaryButton>
                {{ updating ? 'Actualizar' : 'Crear' }}
            </PrimaryButton>
        </template>
    </FormSection>
</template>