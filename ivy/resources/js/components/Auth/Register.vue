<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h5 class="center">Welcome to registration page!</h5>
                    <div class="row">
                        <div class="col s12">
                            <form class="col s12" @submit.prevent="submitForm" id="form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" name="name">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate" name="surname">
                                        <label for="last_name">Last Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="file" type="file" class="validate" name="file" ref="file"
                                               v-on:change = 'handleFileUpload'>
                                        <label for="file">Input file</label>
                                    </div>
                                </div>
                                <!--<div class="row">-->
                                    <!--<div class="input-field col s6">-->
                                        <!--<input id="email" type="email" class="validate" name="user['email']">-->
                                        <!--<label for="email">Your email</label>-->
                                    <!--</div>-->
                                    <!--<div class="input-field col s6">-->
                                        <!--<input id="phone" type="text" class="validate" name="user['phone']">-->
                                        <!--<label for="phone">Your phone #</label>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                                <button class="btn right" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import {mapActions} from 'vuex'
import M from 'materialize-css'
import axios from 'axios'
import $ from 'jquery'
export default {
    data () {
        return {
            newUserData: {
                name: 'Absat',
                surname: 'Dyussembayev',
                phone: '87772129862',
                email: 'abekedevelop@gmail.com',
                password: 'Kastaneda123@'
            },
//            file: ''
        }
    },
    methods: {
        ...mapActions(['postRequest']),
        submitForm () {
            let form = $('form').serialize();
            let FD = new FormData();
            FD.append('file', this.$refs.file.files[0]);
            FD.append('form', form)
            axios.post('api/submit', FD)
                .then(result => {
                    console.log(result)
                })
//            this.postRequest({
//                method: '/submit',
//                data: this.newUserData
//            }).then( response => {
//                console.log(response)
//            })
        },
        handleFileUpload (e) {
            this.file = this.$refs.file.files[0]
        }
    },
    mounted () {
        M.updateTextFields()
    }
}
</script>
<style scoped lang="scss"></style>