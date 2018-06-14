
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// Setup
require('./bootstrap')

// Vue
window.Vue = require('vue')

// Element
import ElementUI from 'element-ui'
import '../sass/element-variables.scss'
Vue.use(ElementUI);

// Bugsnag
const bugsnag = require('bugsnag-js')
const bugsnagClient = bugsnag('e58fe44cf63cd222d17bbf3468a19c06')
const bugsnagVue = require('bugsnag-vue')
bugsnagClient.user = {
    id: b2_user.id,
    name: b2_user.name,
    email: b2_user.email
}
bugsnagClient.use(bugsnagVue(Vue))

// Mixin
Vue.mixin({
    mounted () {
        if (process.env.NODE_ENV === 'development') {
            console.log(`${this.$options.name}.vue mounted!`);
        }
    },
});

// Init
const app = new Vue({
    name: 'B2Systems',
    el: '#app',
    mounted () {
      bugsnagClient.notify(new Error('Test error'))
    },
    components: {
        B2UserForm: () => import(/* webpackChunkName: "b2-user-form" */'./components/user/B2UserForm.vue'),
        B2OrganisationsForm: () => import(/* webpackChunkName: "b2-organisations-form" */'./components/organisations/B2OrganisationsForm.vue')
    },
});
