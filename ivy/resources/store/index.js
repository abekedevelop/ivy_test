import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex);

const state = {
    token: sessionStorage.getItem('token') ? sessionStorage.getItem('token') : '',
    name: 'Abeke'
};

const actions = {
    postRequest ({ commit, state }, postData) {
        console.log('posting data' + JSON.stringify(postData))
        return new Promise((resolve, reject) => {
            axios.post(postData.method, postData)
                .then(function (response) {
                    resolve(response.data)
                })
                .catch(function (error) {
                    // if (typeof postData.preloader === 'undefined') commit('toggleLoading')
                    reject(error)
                })
        })
    },
}

export default new Vuex.Store({
    state,
    actions
})