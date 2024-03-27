import axios from "axios";
import { defineStore } from "pinia";

export const useUserStore = defineStore("login", {
    state: () => ({
        email: '',
        password: '',
    }),
    actions: {
    
         login(val){
           
            const response = axios.post('/user/login', val); // Espera la respuesta aquí
            return response.data;
           
        },

    }
});