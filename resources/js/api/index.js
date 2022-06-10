import * as Auth from './auth'
import axios from 'axios'

const apiUrl = 'https://api.urbanathletes.co.id/'
// axios.defaults.baseURL = process.env.VUE_APP_API_URL

axios.defaults.headers.common['Accept-Language'] = 'all'
axios.defaults.headers.common['X-Accept-Language'] = 'all'

if (Auth.Session.get().paradigm_token) {
  axios.defaults.headers.common['X-Access-Token'] = Auth.Session.get().paradigm_token
}
// console.log(Auth.Session.get().paradigm_token)

export {
  Auth
}
