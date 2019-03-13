
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueTextareaAutosize from 'vue-textarea-autosize';
Vue.use(VueTextareaAutosize);
import FlashMessage from '@smartweb/vue-flash-message';
Vue.use(FlashMessage);
import VModal from 'vue-js-modal';
Vue.use(VModal);
import VueRouter from 'vue-router';
Vue.use(VueRouter);
// Import Vue FilePond

import vueFilePond, {setOptions} from 'vue-filepond';

// Import FilePond styles
import 'filepond/dist/filepond.min.css';
 
// Import FilePond plugins
// Please note that you need to install these plugins separately
 
// Import image preview plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';
 
// Import image preview and file type validation plugins
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
 
// Create component
// Create FilePond component
const FilePond = vueFilePond( FilePondPluginFileValidateType, FilePondPluginImagePreview );
setOptions({
    server: {
        url: 'http://18.228.42.180/admin/quemsomos/upload',
        process: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            onerror: res => {
                debugger
                console.log(res+'Deu esse erro')
            },



        },


    },
})
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('quem-somos', require('./components/Quemsomos.vue').default);
Vue.component('equipe-vue', require('./components/Equipe.vue').default);
Vue.component('servico-vue', require('./components/Servico.vue').default);
Vue.component('diferencial-vue', require('./components/Diferencial.vue').default);
Vue.component('contato-vue', require('./components/Contato.vue').default);
Vue.component('blog-vue', require('./components/Blog.vue').default);
Vue.component('blog-upload', require('./components/UploadBlog.vue').default);
Vue.component('blog-upload2', require('./components/UploadBlog2.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',


    
});




