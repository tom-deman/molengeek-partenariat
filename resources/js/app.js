require( './bootstrap' )

window.Vue = require( 'vue' )

Vue.component( 'stepper-register', require('./components/StepperRegister.vue').default )
const app = new Vue({ el: '#app' })
