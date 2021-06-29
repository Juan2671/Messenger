require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Vue from 'vue';
Vue.use(BootstrapVue);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('buscador-component', require('./components/BuscadorComponent.vue').default);
Vue.component('conversacion-component', require('./components/ConversacionComponent').default);
Vue.component('mensajes-component', require('./components/MensajesComponent').default);
Vue.component('contact-component', require('./components/contctComponent').default);
Vue.component('seleccionar-component', require('./components/SeleccionarConversacionComponent').default);

const app = new Vue({
    el: '#app',
});
