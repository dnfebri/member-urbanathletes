// require('./bootstrap');

window.Vue = require('vue').default;
import router from './router'

Vue.component('header-component', require('./components/header.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('footer-component', require('./components/footer.vue').default);

const app = new Vue({
    el: '#app',
    router
});

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()