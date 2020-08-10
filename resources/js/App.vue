<template>
    <div class="container">
        <transition name="slide-fade" mode="out-in">
            <router-view />
        </transition>
    </div>
</template>

<script>
  import { mapActions, mapState } from 'vuex';
  export default {
    name: 'App',
    components: {
        Categories: () => import('./components/Categories'),
    },
    mounted() {

    },
    methods: {
      // ...mapActions([
      //   'getAllComplexes',
      // ]),
    },
    computed: {
      ...mapState('offer', ['testVar']),
    }
  }
</script>

<style lang="sass">

</style>
