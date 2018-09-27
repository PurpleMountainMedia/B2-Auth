import LabelChooserComponent from './components/web/LabelChooserComponent'

try {
  window.$ = window.jQuery = require('jquery')
  require('bootstrap')
} catch (e) {}

window.Vue = require('vue')
import LabelChooserComponent from './components/web/LabelChooserComponent'
import en from './lang/en.json'

Vue.mixin({
  methods: {
    __(key) {
        return en[key] ? en[key] : key;
    }
  }
});

// Init
// eslint-disable-next-line
new Vue({
  el: '#web',
  name: 'B2SystemsWeb',
  components: {
    LabelChooserComponent
  }
})
