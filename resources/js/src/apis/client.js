import axios from "axios";

export default {
    listClient(){
        return axios.get('client/list');
    },
    storeClient(){
        return axios.get('client/store');
    }
}