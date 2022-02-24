require('./bootstrap');

import {createApp} from 'vue';
import router from './routes';
import ColorRange from './components/ColorRange.vue'

let app = createApp({})
    .use(router)
    .component('color-range', ColorRange);

app.mount('#app');
