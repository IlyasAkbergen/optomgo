import { axiosInstance as axios } from '../../../../js/plugins/axios'

export default {
    getOrderResult ({ commit }, data) {
        return axios.post('/orders', data)
            .then((res) => {
                commit('setOrderResult', res.data.result);
                return res
            })
    },
    async setOrderClientInfo ({ commit }, data) {
        commit('setLoading', true);
        let result = null;
        await axios.put(`/orders/${data.id}`, data)
            .then((res) => {
                commit('setLoading', false);
                result = res
            });
        return result;
    }
}
