import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/home/home.vue'
import Test from './views/test/test.vue'
import CatCreation from './views/catCreation/catCreation.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/test',
        name: 'test',
        component: Test
    },
    {
        path: '/cats/creation',
        name: 'catCreation',
        component: CatCreation
    }
]

const router = new VueRouter({
    routes
})

export default router
