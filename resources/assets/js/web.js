import LabelChooserComponent from './components/web/LabelChooserComponent'
import en from './lang/en.json'
import Vue from 'vue'

try {
  window.$ = window.jQuery = require('jquery')
  require('bootstrap')
} catch (e) {}

Vue.mixin({
  methods: {
    __ (key) {
      return en[key] ? en[key] : key
    }
  }
})

// Init
// eslint-disable-next-line
new Vue({
  el: '#web',
  name: 'B2SystemsWeb',
  components: {
    LabelChooserComponent
  }
})
