import { axiosInstance as axios } from '../../js/plugins/axios'

export default {
    getAllComplexes ({ commit }) {
        commit('setLoading', true);
        return axios.get('/complexes/')
            .then((res) => {
                commit('setAllComplexes', res.data.result);
              commit('setLoading', false);
              return res
            })
            .catch(() => commit('setLoading', false))
    },
    getAllRoomTypes ({ commit }) {
        commit('setLoading', true);
        return axios.get('/room-types/')
            .then((res) => {
                commit('setAllRoomTypes', res.data.result);
                commit('setLoading', false);
                return res
            })
            .catch(() => commit('setLoading', false))
    },
}
