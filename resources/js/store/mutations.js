// https://vuex.vuejs.org/en/mutations.html

export default {
    setAllComplexes(state, data){
        state.allComplexes = data
    },
    setAllRoomTypes(state, data){
        state.allRoomTypes = data
    },
    setLoading(state, value){
        state.loading = value
    }
}
