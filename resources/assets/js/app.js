
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap')

window.Vue = require('vue')

import ElementUI from 'element-ui'
import '../sass/element-variables.scss'

Vue.use(ElementUI);

import B2UserForm from './components/user/B2UserForm.vue'

const app = new Vue({
    el: '#app',
    components: {
        B2UserForm
    },
});
