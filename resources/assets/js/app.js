require('./bootstrap')
import 'babel-polyfill'


window.Vue = require('vue')

// User Permissions
var user = typeof b2_user !== 'undefined' ? b2_user : {};

// Element
import Element from 'element-ui'
import '../sass/element-variables.scss'
import locale from 'element-ui/lib/locale/lang/en'
Vue.use(Element, {locale, size: 'small'})
import en from './lang/en.json'

// Bugsnag
if (process.env.NODE_ENV !== 'development') {
    const bugsnag = require('bugsnag-js')
    const bugsnagClient = bugsnag('e58fe44cf63cd222d17bbf3468a19c06')
    const bugsnagVue = require('bugsnag-vue')
    bugsnagClient.user = {
        id: user.id,
        name: user.name,
        email: user.email
    }
    bugsnagClient.use(bugsnagVue(Vue))
}

// Mixin
Vue.mixin({
    mounted () {
        if (process.env.NODE_ENV === 'development') {
            console.log(`${this.$options.name}.vue mounted!`);
        }
    },
    computed: {
      b2Config () {
        return window.b2Systems
      },

      b2FormData () {
        return window.b2FormData
      }
    },
    methods: {
        userCan (permission_lookup) {
            var has_role = false;
            var permissions = user.permissions ? user.permissions : [];
            permissions.forEach((permission) => {
                if (permission.name === permission_lookup) {
                    has_role = true;
                }
            });
            return has_role;
        },

        __(key) {
            return en[key] ? en[key] : key;
        },

        userCannot (permission_lookup) {
            return !this.userCan(permission_lookup);
        },
    }
});

// Init
const app = new Vue({
    name: 'B2Systems',
    el: '#app',
    mounted () {

    },
    components: {
        B2UserForm: () => import(/* webpackChunkName: "b2-user-form" */'./components/user/B2UserForm.vue'),
        B2OrganisationsForm: () => import(/* webpackChunkName: "b2-organisations-form" */'./components/organisations/B2OrganisationsForm.vue'),
        B2LoginForm: () => import(/* webpackChunkName: "b2-login-form" */'./components/auth/B2LoginForm.vue'),
        B2PasswordResetForm: () => import(/* webpackChunkName: "b2-password-reset-form" */'./components/auth/B2PasswordResetForm.vue'),
        B2NewPasswordForm: () => import(/* webpackChunkName: "b2-new-password-form" */'./components/auth/B2NewPasswordForm.vue'),
    },
});
