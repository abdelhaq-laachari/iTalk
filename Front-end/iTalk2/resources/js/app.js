require('./bootstrap')
import { createApp } from 'vue';
import router from './router'

import AppComponentsTest from './components/AppComponents.vue';

createApp({
    components: {
        AppComponentsTest
    }
}).use(router).mount('#app')











