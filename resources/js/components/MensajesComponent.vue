<template>

    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">

        <b-img rounded="circle" slot="aside" blank width="50" height="50" blank-color="#777" alt="img" class="m-1">
        </b-img>
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>

</template>
<script>
    export default {
        props: {
            writtenByMe: Boolean,
        },

        data() {
            return {
                contenido: 'hola',
            }
        },
        mounted() {
            console.log('valor de writtenByMe' , this.writtenByMe)
        },

    }
</script>
