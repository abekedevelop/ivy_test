<template>
    <section>
        <form method="post" @submit.prevent="acceptForm">
            <input type="text" v-model="user.name">
            <input type="text" v-model="user.surname">
            <button type="submit">Submit Form</button>
            <router-link to="/register">Register page</router-link>
        </form>
    </section>
</template>
<script>
import {mapState, mapActions} from 'vuex'
export default {
    data () {
        return {
            message: 'This is a message from component!',
            user: {
                name: 'Absat',
                surname: 'Dyussembayev'
            }
        }
    },
    methods: {
        ...mapActions(['postRequest']),
        acceptForm () {
            this.postRequest({
                method: '/submit',
                data: {
                    user: this.user
                }
            }).then(response => {
                console.log(response)
            })
        }
    },
    computed : {
        ...mapState({
            name: state => state.name
        })
    }
}
</script>