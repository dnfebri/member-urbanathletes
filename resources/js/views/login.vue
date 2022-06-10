<template>
  <div class="container">
    <div class="flex items-center justify-center py-24">
      <div class="rounded-xl backdrop-blur-sm bg-white/20 w-full mx-8 sm:w-96 shadow-xl items-center">
        <div class="items-center justify-center flex py-4 border-b mb-8">
          <h2 class="text-2xl font-bold">Member Area Login</h2>
          <img class="w-28 opacity-100" src="" alt="Urban Atlhetes">
        </div>
        <div class="flex justify-center">
          <form @submit.prevent="loginSubmit()" class="w-full px-20 sm:px-8">
            <div class="text-gray-700">
              <input id="email" type="email" v-model="email"
                class="w-full bg-transparent border-0 border-b mb-2 focus:outline-none @error('email') is-invalid @enderror"
                name="email" required autocomplete="email" placeholder="Email" autofocus>
              <div class="">
              </div>
            </div>
            <div class="">
              <input id="password" type="password" v-model="password"
                class="w-full bg-transparent border-0 border-b mb-2 @error('password') is-invalid @enderror"
                name="password" required placeholder="Password" autocomplete="current-password">
              <div class="">
              </div>
            </div>
            <div class="">
              <div class=" offset-md-4">
                <div class="form-check">
                </div>
              </div>
            </div>
            <div class="text-center my-4">
              <div class="flex justify-center items-center mb-4">
                <button class="bg-green-ua py-1 px-4 w-full rounded-lg shadow-xl text-white" type="submit">
                  Login
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Auth } from '../api'
import axios from "axios";

export default {
  name: 'Login',
  data () {
    return {
      email: "",
      password: ""
    }
  },
  methods: {
    async loginSubmit (e) {
      // console.log(e);
      try {
        const respont = await axios.post('https://api.urbanathletes.co.id/vendor/v1/auth/member', {
          email: this.email,
          password: this.password
        });
        localStorage.setItem('paradigm_token', respont.data.token)
        // localStorage.setItem('email', respont.data.email)
        // localStorage.setItem('user_id', respont.data.user_id)
        // localStorage.setItem('user_role_id', respont.data.user_role_id)
        this.$router.push('/member')
        console.log(respont);
      } catch (error) {
        console.log(error);
      }
      
      // Auth.login(this.data).then(response => {
      //       Auth.Session.create(response)
      //       // console.log(response)
      //       // this.$router.push('/siteConfiguration')
      //       window.location.href = '/'
      //       this.$toast.success('you have successfully logged in!', 'Success', {
      //         position: 'topCenter',
      //         icon: 'icon-envelope',
      //         progressBarColor: 'rgb(0, 255, 184)',
      //         theme: 'dark',
      //         backgroundColor: '#565c70',
      //         messageColor: '#fff'
      //       })
      //     }).catch(error => {
      //       console.log('error', error)
      //       this.$toast.success('cannot find data!', 'Error', {
      //         position: 'topCenter',
      //         icon: 'icon-envelope',
      //         progressBarColor: 'rgb(0, 255, 184)',
      //         theme: 'dark',
      //         backgroundColor: '#565c70',
      //         messageColor: '#fff'
      //       })
      //     })
    }
  }
}
</script>

<style>

</style>