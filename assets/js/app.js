require('./bootstrap');

console.log('App was loaded');

window.Vue = require('vue');

Vue.component('ready-to-grow', require('./components/ReadyToGrowSendComponent'));
Vue.component('contact-us', require('./components/ContactUsComponent'));
Vue.component('question-about-pricing', require('./components/QuestionAboutPricing'));

const app = new Vue({
    el: '#app'
});



import {Menu} from './menu/menu'
new Menu();

