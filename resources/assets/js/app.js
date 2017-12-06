
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
     //permissions data
     permissionType: 'basic',
     resource: '',
     crudSelected: ['create','read','update','delete']
  },
  methods: { //these methods are for permission creation.
     crudName: function(item) {
        return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
     },
     crudSlug: function(item) {
        return item.toLowerCase() + "-" + app.resource.toLowerCase();
     },
     crudDescription: function(item) {
        return "Allows a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
     }
 }
})
