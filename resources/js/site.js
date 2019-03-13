
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import NProgress from 'nprogress';
import 'nprogress/nprogress.css';
import VModal from 'vue-js-modal';
Vue.use(VModal);
var VueScrollTo = require('vue-scrollto');


// You can also pass in the default options
Vue.use(VueScrollTo, {
    container: "body",
    duration: 2000,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
});
Vue.use(VueRouter);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


// Componentes do site


import App from './components/Site/App.vue'
import home from './components/Site/Home.vue'
import quemsomos from './components/Site/Quemsomos.vue'
import servicos from './components/Site/Servicos.vue'
import blog from './components/Site/Blog.vue'
import bloginterno from './components/Site/Bloginterno.vue'
import VueCarousel from '@chenfengyuan/vue-carousel'

Vue.use(VueCarousel);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home,
            meta: {title:'M2 Center'}
        },
        {
            path: '/quemsomos',
            name: 'quemsomos',
            component: quemsomos,
            meta: {title:'M2 Center - Quem Somos'}
        },
        {
            path: '/servicos',
            name: 'servicos',
            component: servicos,
            meta: {title:'M2 Center - Serviços'}
        },
        {
            path: '/blog',
            name: 'blog',
            component: blog,
            meta: {title:'M2 Center - Blog'}
        },
        {
            path: '/blog/:id',
            component: bloginterno,
            meta: {title:'M2 Center - Blog'}
        },                                  
    ],
})

router.beforeResolve((to, from, next) => {
    if(to.path){
        NProgress.start()
    }
    document.title = to.meta.title;
    next()
});
router.afterEach(() => {
    NProgress.done()
});


const app = new Vue({
    el: '#app',
    router,
    components: { App},
    router,    
});




