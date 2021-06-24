<template>
    <b-row class="h-100 my-1 py-1">
        <b-col cols="8">
            <b-card footer-bg-variant="light" footer-border-variant="dark" class="h-100 w-100" title="Conversacion">

                <mensajes-component v-for="mensage in menssages" :key="mensage.id"
                    :written-by-me="mensage.written_by_me">
                    {{mensage.contenido}}
                </mensajes-component>

                <div slot="footer">
                    <b-form @submit.prevent="postMensages" autocomplete="off">
                        <b-input-group>
                            <b-form-input class="text-center" type="text" v-model="NuevoMensaje"
                                placeholder="Envia un mensaje..">
                            </b-form-input>

                            <b-input-group-prepend>
                                <b-btn type="submit" variant="primary">enviar</b-btn>
                            </b-input-group-prepend>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>

        <b-col cols="4" class="text-center">
            <b-img rounded="circle" blank width="75" height="75" blank-color="#777" alt="img" class="m-1">
            </b-img>
            <p>Usuario Seleccionado</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>
<script>
    export default {
        data() {
            return {
                menssages: [],
                NuevoMensaje: ''
            };
        },
        mounted() {
            this.getMensages();
        },
        methods: {
            getMensages() {
                axios.get('/api/mensajes')
                    .then((response) => {
                        /* console.log(response.data); */
                        this.menssages = response.data;
                    });
            },
            postMensages() {
                const params = {
                    to_id: 2,
                    contenido: this.NuevoMensaje
                };
                axios.post('/api/mensajes', params)
                    .then((response) => {
                        if (response.data.success) {
                            this.NuevoMensaje = '';
                            this.getMensages();
                        }
                    });
            }
        },
    }

</script>
