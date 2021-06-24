<template>
    <b-list-group-item :variant="variant" >
        <b-row class="p-1" aling-h="center" style="height: 80px;">
            <b-col cols="12" md="3" class="text-center">
                <b-img rounded="circle" blank width="70" height="70" blank-color="#777" alt="img"></b-img>
            </b-col>
            <b-col cols="5" align-self="center" class="d-none d-md-block">
                <p class="mb-1">{{name}}</p>
                <p class="text-muted small mb-1">{{ultimomensaje}}</p>
            </b-col>
            <b-col cols="4" class="d-none d-md-block">
                <p class="text-muted-small" align="right" >{{ultimahora}}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>
<script>
    export default {
        props:[
            'variant'
        ],
        data(){
            return {
                name:'Juan Esteban',
                ultimomensaje:'Tú: Hasta mañana',
                ultimahora:'1:35 pm',
            };
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
