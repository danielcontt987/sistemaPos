import {createRouter, createWebHistory} from 'vue-router';

import HomePage from '../view/Menu.vue'; 
import PointOfSale from '../view/PointOfSale.vue'; 

const routes = [
    //Home
    {
        path: '/',
        component: HomePage,

    },
    {
        path: '/punto-de-venta',
        component: PointOfSale,

    }
]


const router = createRouter({
    history: createWebHistory(),
    routes
});


export default router