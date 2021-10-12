require('./bootstrap');
import Vue from 'vue';
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';
import Router from './routes/router'


Vue.use(Router)
window.Vue = require('vue');
Vue.use(ViewUI);

Vue.component('apply-component',require('./components/ApplyComponent.vue').default);
Vue.component('favourites-job', require('./components/FavouritesJobComponent').default); 
Vue.component('candidate-component', require('./components/CandidateComponent').default)
Vue.component('create-blog', require('./components/blogs/CreateBlog').default)
Vue.component('blog-categories', require('./components/blogs/Categories').default)

//pagination package for pagination 
Vue.component('pagination', require('laravel-vue-pagination'));



const app = new Vue({
    el: '#app',
    Router,
    
});

const admin = new Vue({
    el: '#admin',

    
});

 
