
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bulma');
require('./script');

window.Vue = require('vue');
import Buefy from 'buefy';

Vue.use(Buefy);

// Makes the target  ID at 'el' a Vue object
var app = new Vue({
  el: '#app',
  data: {
     auto_password: false, // disables password field if auto_generate is enabled
     password_options: 'keep',
     permissionType: 'basic',
     resource: '',
     crudSelected: ['create','read','update','delete']
  }
})
