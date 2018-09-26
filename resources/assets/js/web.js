try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
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
const app = new Vue({
    name: 'B2SystemsWeb',
    el: '#web',
    components: {
      LabelChooserComponent
    }
});
