import axios from "axios";
// axios.defaults.baseURL = 'http://127.0.0.1:8000';

export default axios.create({
    baseURL:"http://127.0.0.1:8000",
    withCredentials:true,
    // headers :{
    //     'X-Requested-With':'XMLHttpRequest',
    // }
})

// axios.defaults.baseURL = 'http://127.0.0.1:8000';
// axios.defaults.withCredentials = true;
// axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';