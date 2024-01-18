import { defineStore } from "pinia";
import { onMounted ,ref } from "vue";
import Client from "../src/apis/client";

export const useClientStore = defineStore ('clients', () =>{
    //Variables
    const client = ref({});

    //Methods
    const storeClient  = ( (params) =>{
        console.log(params);
    })

    //Mounted
    onMounted(async () => {
        try {
            const {data} = await Client.listClient();
            client.value = data.clients
        } catch (error) {
            console.log(error);
        }
    })

    return{
        client,
        storeClient
    }

})