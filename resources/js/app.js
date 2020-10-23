require( './bootstrap' );
import { Lang } from 'laravel-vue-lang';

window.Vue = require('vue');

Vue.use(Lang, {
    locale: 'fr',
    fallback: 'en',
	ignore: {
		fr: ['validation'],
	},
});

Vue.component('stepper-register', require('./components/StepperRegister.vue').default);
    const app = new Vue({
        el: '#app',
});
