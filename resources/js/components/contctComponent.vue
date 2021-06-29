<template>
    <div>
        <buscador-component></buscador-component>
        <b-list-group>

            <example-component v-for="contactouser in contactousers" :key="contactouser.id"
             :contactouser="contactouser" @click.native="selecConversacion(contactouser)">
            </example-component>

        </b-list-group>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                contactousers: [],
            }
        },
        mounted() {
            this.getConversaciones();
        },

        methods: {
            getConversaciones() {
                axios.get('/api/conversacion')
                    .then((response) => {
                        this.contactousers = response.data;
                    });
            },
            selecConversacion(contactouser) {
                /* console.log(contactouser); */
                this.$emit('Conversacionselected', contactouser);
            }
        },
    }

</script>
