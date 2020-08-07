import Vue from 'vue'
import axios from 'axios'

const axiosInstance = axios.create({
    baseURL: '/api'
})

Vue.prototype.$axios = axiosInstance

export default { axiosInstance }
export { axiosInstance }
