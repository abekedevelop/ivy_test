import Vue from 'vue'
import Router from 'vue-router'

import Register from '../js/components/Auth/Register.vue'
import EntryPoint from '../js/components/EntryPoint.vue'
import About from '../js/components/About.vue'

Vue.use(Router);

export default new Router ({
    mode: 'history',
    routes: [
        {
            path: '/register',
            name: 'Register',
            component: Register
        },
        {
            path: '/',
            name: 'entryPoint',
            component: EntryPoint
        },
        {
            path: '/test',
            name: 'about',
            component: About
        }
    ]
})