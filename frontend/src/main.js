import { createApp } from 'vue'
import App from './app.vue'
import route from './router/routes'
import axios from 'axios'
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

axios.defaults.baseURL = 'http://127.0.0.1:8000/'

const vuetify = createVuetify({
  components,
  directives
})

const app = createApp(App)
app.use(vuetify)
app.use(route)
app.mount('#app')
