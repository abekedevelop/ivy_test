<template>
    <section>
        <my-header v-if="token !==''"></my-header>
        <router-view></router-view>
    </section>
</template>
<script>
import 'materialize-css/dist/css/materialize.min.css'
import 'materialize-css/dist/js/materialize.min'
import {mapState} from 'vuex'
import MyHeader from './components/header/Header.vue'
export default {
    name: 'App',
    components: {
        MyHeader
//        MyHeader: () => import('./components/header/Header')
    },
    computed: {
        ...mapState({
            token: state => state.token
        })
    },
    mounted () {
        if (this.token === '') {
//            this.$router.push('/login')
        }
    }
}
</script>
<style scoped>

</style>