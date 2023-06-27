<template>
    <div class="modal" v-if="openModal">
        <div class="modal-content">
            <div>
                <label for="">Titulo</label>
                <input type="text" v-model="form.titulo">
            </div>
        </div>
    </div>
</template>

<script>
import { reactive } from 'vue';
import { ref } from 'vue';

    export default {
        props: {
            openModal: {
                required: true,
                type: Boolean
            },
        },
        setup(props) {

            const form = reactive({
                titulo: '',
                precio: '',
                descripcion: '',
                path_imagen: '',
                categoria: '',
            });

            return {
                form,
            }
        }
    }
</script>
