import { createRouter, createWebHistory } from 'vue-router'

import test from '../components/Test.vue'
// import Appcomponent from '../components/AppComponents.vue'

const routes = [
    {
        path: '/Test',
        name: 'Test',
        component: test
    },
    // {
    //     path: '/login',
    //     name: 'login',
    //     component: login
    // },
];

export default createRouter({
    history: createWebHistory(),
    routes
})