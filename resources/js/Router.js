import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './views/home/home.vue'
import CatCreation from './views/catCreation/catCreation.vue'
import Pictures from './views/pictures/pictures.vue'
import PictureCreation from './views/pictureCreation/pictureCreation.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/cats/create',
        name: 'catCreation',
        component: CatCreation
    },
    {
        path: '/pictures',
        name: 'pictures',
        component: Pictures
    },
    {
        path: '/pictures/create',
        name: 'pictureCreation',
        component: PictureCreation
    }
]

const router = new VueRouter({
    routes
})

export default router
