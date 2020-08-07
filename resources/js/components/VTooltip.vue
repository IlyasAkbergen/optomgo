<template>
    <span @mouseover="showPopup"
         @mouseleave="hidePopup">
        <slot name="trigger">
        </slot>
        <span v-show="active">
            <slot name="popup">
            </slot>
        </span>
    </span>
</template>

<script>
  export default {
    name: "VTooltip",
    data () {
        return {
          active: false,
        }
    },
    methods: {
      showPopup: function () {
        this.active = true
      },
      hidePopup: function () {
        this.active = false
      }
    }
  }
</script>

<style scoped>

</style>