

require('./bootstrap');
require('./jquery-2.1.4.min');
require('./bootstrap.min');
require('./magnific-popup.min');
require('./owl.carousel.min');
require('./circle-progress.min');
// require('./map');
require('./main');
global.$=global.jQuery=require('./jquery-2.1.4.min');

window.Vue = require('vue');




Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
});


