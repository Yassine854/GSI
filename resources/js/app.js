import {createApp} from 'vue';
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap/dist/js/bootstrap.js'
// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'popper.js';
// import 'bootstrap/dist/js/bootstrap.min.js';

require('./bootstrap');


import App from './App.vue';
import axios from 'axios';
import router from './router';

const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
app.mount('#app');


