<template>
    <b-container fliud style="max-width: 2000px;">
        <b-row no-gutters>
            <b-col cols="4" style="height: 89vh">

                <contact-component @Conversacionselected="changeActivacion($event)">

                </contact-component>

            </b-col>
            <b-col cols="8">

                <conversacion-component
                v-if="selecConversacion"
                :contacto-id="selecConversacion.contacto_id">
                </conversacion-component>

            </b-col>
        </b-row>
    </b-container>
</template>
<script>
export default {
    data() {
        return {
            selecConversacion: null,
        }
    },
    mounted() {

    },
    methods: {
        changeActivacion(contactouser){
            /* console.log('hola',contactouser); */
            this.selecConversacion = contactouser;
        }
    },
}
</script>
