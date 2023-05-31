import axios from "axios"
import config from "../Config"

const get = (url, token = null, params = {}, headers = {}) => {
    // let headers = {};
    if(token != null) {
        headers = {
            ...headers,
            Authorization: 'Bearer ' + token
        }
    }

    return axios.get(config.api_url + url, {
        headers,
        params
    })
}

export {
    get
}