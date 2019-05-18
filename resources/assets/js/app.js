
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: require('./views/Home.vue')
        },
        {
            path: '/hello',
            name: 'hello',
            component: require('./views/Hello.vue'),
        },
        {
            path: '/users',
            name: 'users.index',
            component: require('./views/UsersIndex.vue'),
        },
        {
            path: '/users/:id/edit',
            name: 'users.edit',
            component: require('./views/UsersEdit.vue'),
        },
        { path: '/404', name: '404', component: require('./views/NotFound.vue') },
        { path: '*', redirect: '/404' },
    ],
});


Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('Hello', require('./views/Hello.vue'));
Vue.component('Home', require('./views/Home.vue'));
Vue.component('UsersIndex', require('./views/UsersIndex.vue'));
Vue.component('UsersEdit', require('./views/UsersEdit.vue'));
Vue.component('app', require('./views/App.vue'));

const app = new Vue({
    el: '#app',
    router
});
