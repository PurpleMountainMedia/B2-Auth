import LabelChooserComponent from './components/web/LabelChooserComponent'

try {
  window.$ = window.jQuery = require('jquery')
  require('bootstrap')
} catch (e) {}

window.Vue = require('vue')

// Init
// eslint-disable-next-line
new Vue({
  el: '#web',
  name: 'B2SystemsWeb',
  components: {
    LabelChooserComponent
  }
})
