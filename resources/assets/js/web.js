try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.Vue = require('vue')
import LabelChooserComponent from './components/web/LabelChooserComponent'

// Init
const app = new Vue({
    name: 'B2SystemsWeb',
    el: '#web',
    components: {
      LabelChooserComponent
    }
});
