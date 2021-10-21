import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'

import App from './App.vue'
import storeConfig from './store'
import routes from './routes'

Vue.use(Vuex)
Vue.use(VueRouter)
Vue.config.productionTip = false

const store = new Vuex.Store(storeConfig)
const router = new VueRouter({ routes, mode: 'history' })


new Vue({
  store,
  router,
  render: h => h(App),
}).$mount('#app')
