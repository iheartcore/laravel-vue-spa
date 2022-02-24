require('./bootstrap');

import {createApp} from 'vue';
import router from './routes';

let app = createApp({})
    .use(router);

app.mount('#app');
