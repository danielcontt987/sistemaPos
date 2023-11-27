import axios from "axios";

export default {
    logout(){
        return axios.post('/logout')
    },
    getuser(){
        return axios.get('/get-user')
    }
}