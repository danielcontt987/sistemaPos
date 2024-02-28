import {createRouter, createWebHistory} from 'vue-router';

import HomePage from '../view/Menu.vue'; 
import PointOfSale from '../view/PointOfSale.vue'; 
import Client from '../view/Client.vue'; 
import Setting from '../view/Setting.vue'

const routes = [
    //Home
    {
        path: '/',
        name: "Dashboard",
        component: HomePage,

    },
    {
        path: '/punto-de-venta',
        name: "Punto de venta",
        component: PointOfSale,

    },
    {
        path: '/clientes',
        name: 'Clientes',
        component: Client,

    },
    {
        path: '/ajustes',
        name: 'Ajustes',
        component: Setting,
    },
]


const router = createRouter({
    history: createWebHistory(),
    routes
});


export default router