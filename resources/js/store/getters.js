export default {
    getFilteredLayouts(state, getters, rootState) {
        const complex = getters.selectedComplex;

        return complex
            ? complex.layouts
                .filter((layout) => layout.rooms_count === rootState.order.selectedRoomsCount)
            : [];
    },

    selectedComplex(state, getters, rootState) {
        return state.allComplexes.find(
            complex => complex.id === rootState.order.selectedComplexId
        ) || null;
    },

    roomTypesOfSelectedLayout(state, getters) {
        const layout = getters.selectedLayout;
        return layout ? layout.roomTypes : []
    },

    selectedLayout(state, getters, rootState) {
        const layouts = getters.getFilteredLayouts;
        return layouts.find((l) => l.id === rootState.order.selectedLayoutId) ?? {}
    },

    selectedRoomTypes(state, getters, rootState) {
        return rootState.order.selectedComplexId === 'none'
          ? rootState.order.customRoomTypes.map((r) => ({ ...r, ...{pivot_id: r.id} }))
          : getters.selectedLayout.roomTypes || {};
    }
}

