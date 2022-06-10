import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {
    Auth
  } from '../api'

import Login from '../views/login.vue'
import Home from '../views/home.vue'
import About from '../views/about.vue'
import User from '../views/user.vue'
import NotFound from '../views/notFound.vue'

const routes = [
    {
        name: 'Login',
        path: '/member/login',
        component: Login,
        meta: {
          authPage: true
        },
    },
    {
        name: 'Home',
        path: '/member',
        component: Home,
        meta: {
          requiresAuth: true
        },
    },
    {
        name: 'About',
        path: '/member/about',
        component: About,
        meta: {
          requiresAuth: true
        },
    },
    {
        name: 'User',
        path: '/member/user/:username?',
        component: User,
        props: true,
        meta: {
          requiresAuth: true
        },
    },
    {
        path: '/member/*',
        component: NotFound
    }
]

const router = new VueRouter({
    linkActiveClass: 'active',
    mode: 'history', //Untuk menghilangkan # di URL
    routes
})

router.beforeEach((to, from, next) => {
    let session = Auth.Session.get()
    if (to.meta.requiresAuth) {
        if (!session.paradigm_token) {
            Auth.Session.delete()
            next({
                path: '/member/login',
                // query: {
                //     redirect: to.fullPath
                // }
            })
        } else next()
    } else next()
    if (to.meta.authPage) {
        if (session.paradigm_token) {
            next({
                path: '/member/',
                query: {
                    redirect: to.fullPath
                }
            })
        } else next()
    } else next()
})

export default router