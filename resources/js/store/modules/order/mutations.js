export default {
    setRoomsCount (state, value) {
        state.selectedRoomsCount = value
    },

    setSelectedComplex(state, value) {
      state.selectedComplexId = value
    },

    setSelectedLayoutId(state, value) {
        state.selectedLayoutId = value
    },

    switchSelectedRoom(state, {value, roomTypePivotId}) {
        if (state.selectedRooms[roomTypePivotId] && state.selectedRooms[roomTypePivotId] === value) {
            const { [roomTypePivotId]: omit, ...newObject } = state.selectedRooms;
            state.selectedRooms = newObject;
        } else {
            state.selectedRooms = {...state.selectedRooms, ...{ [roomTypePivotId]: value }};
        }
    },

    setSelectedRooms(state, value) {
        state.selectedRooms = value
    },

    setOrderResult(state, value) {
        state.orderResult = value
    },

    setClientName(state, value) {
        state.clientName = value;
    },

    setPhone(state, value) {
        state.phone = value;
    },

    switchCustomRoomType(state, payload ) {
        if (state.customRoomTypes
          .some((roomType) => roomType.id === payload.id))
        {
            state.customRoomTypes = state.customRoomTypes
              .filter((item) => item.id !== payload.id)
        } else {
            state.customRoomTypes.push(payload)
        }
    },

    setLoading (state, value) {
        state.loading = value
    }
}
