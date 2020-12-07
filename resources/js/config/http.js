"use strict";

import axios from "axios";
import { snakeToCamel } from "src/helpers/string";

function convertSnakeToCamel(response) {
    let data = response.data || response;
    let cleanedData = {};
    if (Object.keys(data).length > 0) {
        for (let [key, value] of Object.entries(data)) {
            cleanedData[snakeToCamel(key)] = value && ["object", "array"].includes(typeof value)
                ? convertSnakeToCamel(value)
                : value;
        }
    }
    return cleanedData;
}

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.interceptors.response.use(function (response) {

    response.data = Array.isArray(response.data)
        ? response.data.map( value => convertSnakeToCamel(value))
        : convertSnakeToCamel(response);

    return response.data;
},
function (error) {
    // Any status codes that falls outside the range of 2xx cause this function to trigger
    // Do something with response error
    return Promise.reject(error);
});

export default axios;