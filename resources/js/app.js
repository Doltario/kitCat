
require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import VueRouter from 'vue-router'
import router from './Router';

Vue.use(VueRouter)

const app = new Vue({
    el : '#app',
    router
})
