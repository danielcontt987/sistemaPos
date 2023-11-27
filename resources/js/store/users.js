import { defineStore } from "pinia";
import { onMounted, ref } from "vue";
import User from "../src/apis/user";

export const useUserStore = defineStore ('users', () =>{
    const user = ref({});

    onMounted(async () => {
        try {
            const {data} = await User.getuser();
            user.value = data.user
        } catch (error) {
            console.log(error);
        }
    })

    return{
        user
    }

})