import { ref } from "vue";

import { defineStore } from 'pinia';


export const useAlertNormalStore = defineStore('alert', () =>{
    const show = ref(false);
    const color = ref('');
    const title = ref('');
    const msg = ref('');
    const icon = ref('');

    function $reset () {
        show.value = false;
        color.value = '';
        title.value = '';
        msg.value = '';
        icon.value = '';
    } 

    return {
        show,
        color,
        title,
        msg,
        icon,
        $reset,
    }
})