import 'babel-polyfill'
import Element from 'element-ui'
import '../sass/element-variables.scss'
import locale from 'element-ui/lib/locale/lang/en'
import en from './lang/en.json'
import Vue from 'vue'

require('./bootstrap')

// User Permissions
var user = typeof window.b2User !== 'undefined' ? window.b2User : {}

// Element
Vue.use(Element, { locale, size: 'small' })

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
  computed: {
    b2Config () {
      return window.b2Systems
    },

    b2FormData () {
      return window.b2FormData
    }
  },
  mounted () {
    if (process.env.NODE_ENV === 'development') {
      console.log(`${this.$options.name}.vue mounted!`)
    }
  },
  methods: {
    userCan (permissionLookup) {
      var hasRole = false
      var permissions = user.permissions ? user.permissions : []
      permissions.forEach((permission) => {
        if (permission.name === permissionLookup) {
          hasRole = true
        }
      })
      return hasRole
    },

    __ (key) {
      return en[key] ? en[key] : key
    },

    userCannot (permissionLookup) {
      return !this.userCan(permissionLookup)
    }
  }
})

// Init
// eslint-disable-next-line no-new
new Vue({
  el: '#app',
  name: 'B2Systems',
  components: {
    B2UserForm: () => import(/* webpackChunkName: "b2-user-form" */'components/user/B2UserForm.vue'),
    B2OrganisationsForm: () => import(/* webpackChunkName: "b2-organisations-form" */'components/organisations/B2OrganisationsForm.vue'),
    B2LoginForm: () => import(/* webpackChunkName: "b2-login-form" */'components/auth/B2LoginForm.vue'),
    B2PasswordResetForm: () => import(/* webpackChunkName: "b2-password-reset-form" */'components/auth/B2PasswordResetForm.vue'),
    B2NewPasswordForm: () => import(/* webpackChunkName: "b2-new-password-form" */'components/auth/B2NewPasswordForm.vue'),
    B2OAuthForm: () => import(/* webpackChunkName: "b2-o-auth-form" */'components/auth/B2OAuthForm.vue'),
    B2RegisterForm: () => import(/* webpackChunkName: "b2-register-form" */'components/auth/B2RegisterForm.vue'),
    B2CreateOrganisationForm: () => import(/* webpackChunkName: "b2-create-organisation-form" */'components/organisations/B2CreateOrganisationForm.vue'),
    B2OrganisationForm: () => import(/* webpackChunkName: "b2-organisation-form" */'components/organisations/B2OrganisationForm.vue'),
    B2ListLicences: () => import(/* webpackChunkName: "b2-list-licences" */'components/licences/B2ListLicences.vue')
  }
})
