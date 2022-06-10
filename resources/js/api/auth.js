// yogi
// http://localhost:8080/allForm/addOutstanding
// - start month + 3 month dari bulan skrg
// - payment total = total outstanding fee + late payment total
// - late payment total = late payment * total month

// paradigm sales 1
// http://localhost:8080/ptSessionBuy/add
// - tambahin dropdown - payment type ['regular', 'installment'] -> auto
// - kalau installment - installment month ['3', '6', '12']

// superadmin
// http://localhost:8080/memberEntry/edit?id=2202
// - tambahin action button send email
// - /transaction/send_invoice_name_type
// - trx_id POST

import axios from 'axios'

const apiUrl = 'https://api.urbanathletes.co.id/'
// const apiUrl = process.env.VUE_APP_API_URL

const login = function (data) {
  return axios.post('https://api.urbanathletes.co.id/vendor/v1/auth/member/', data).then(res => { return res.data })
}

const Session = {
  delete: function (item) {
    if (!item) {
      localStorage.removeItem('paradigm_token')
      // localStorage.removeItem('paradigm_id')
      // localStorage.removeItem('branch_id')
      // localStorage.removeItem('employee_id')
      // localStorage.removeItem('is_multibranch')
      // localStorage.removeItem('division_id')
      // localStorage.removeItem('branch_name')
      // localStorage.removeItem('paradigm_role')
      // localStorage.removeItem('paradigm_access_menu')
      // localStorage.removeItem('paradigm_username')
    } else {
      localStorage.removeItem(item)
    }
  },
  create: function (session) {
    localStorage.setItem('paradigm_token', session.token)
    // localStorage.setItem('paradigm_id', session.employee_id)
    // localStorage.setItem('employee_id', session.employee_id)

    // if (session.customer_service_id) {
      // localStorage.setItem('branch_id', session.branch_id)
      // localStorage.setItem('name', session.name)

      // localStorage.setItem('is_multibranch', session.is_multibranch)
      // localStorage.setItem('division_id', session.division_id)
      // localStorage.setItem('branch_name', session.branch_name)
      
    // }
    // localStorage.setItem('paradigm_role', session.user_role)
    // localStorage.setItem('paradigm_access_menu', session.user_access_menu_id)
    // localStorage.setItem('paradigm_role_mapping_id', session.user_role_mapping_id)
    // localStorage.setItem('paradigm_user_id', session.user_id)
    // localStorage.setItem('paradigm_username', session.email)
  },
  get: function (item) {
    if (!item) {
      let session = {
        paradigm_token: localStorage.getItem('paradigm_token'),
        // name: localStorage.getItem('name'),
        // division_id: localStorage.getItem('division_id'),
        // employee_id: localStorage.getItem('employee_id'),
        // paradigm_id: localStorage.getItem('paradigm_id'),
        // paradigm_user_id: localStorage.getItem('paradigm_user_id'),
        // paradigm_role: localStorage.getItem('paradigm_role'),
        // paradigm_access_menu: localStorage.getItem('paradigm_access_menu'),
        // paradigm_role_mapping_id: localStorage.getItem('paradigm_role_mapping_id'),
        // paradigm_username: localStorage.getItem('paradigm_username'),
        // branch_id: localStorage.getItem('branch_id'),
        // is_multibranch: localStorage.getItem('is_multibranch'),
        // branch_name: localStorage.getItem('branch_name')
      }
      return session
    } else {
      return localStorage.getItem(item)
    }
  }
  // getAuth () {
  //   return {
  //     elapor_token: localStorage.getItem('elapor_token')
  //   }
  // }
}

export {
  Session,
  login,
  apiUrl
}
