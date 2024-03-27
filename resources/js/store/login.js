import { defineStore } from "pinia";

export default useLoginStore = defineStore('login',{
    state: () => {
        
    },

    actions: {
        login(payload){
            console.log(payload);
        }
    }
})