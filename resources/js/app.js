import 'vuetify/styles'
import {createApp} from 'vue'
import { createRouter, createWebHashHistory } from 'vue-router'
import { createVuetify } from 'vuetify'

import routes from './routes.js'

import app from "./components/app.vue"
import store from './store/index'


const vuetify = createVuetify()

const router = createRouter({
    history: createWebHashHistory(),
    routes:routes.routes,
})

createApp(app).use(store).use(vuetify).use(router).mount('#app');
