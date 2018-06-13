require('./bootstrap');

console.log('App was loaded');

window.Vue = require('vue');

// Vue.component();

const app = new Vue({
    el: '#app'
});

import {Menu} from './menu/menu'
new Menu();

