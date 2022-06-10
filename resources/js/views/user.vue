<template>
  <div>
    <section v-if="username">
      <h1>Hello User {{username}}.</h1>
      <router-link :to="{name: 'User'}" class="bg-yellow-500">Kembali</router-link>
    </section>
    <section v-else>
      <h1>Daftar User</h1>
      <ul>
        <li v-for="user in users" :key="user.id">
          <!-- <router-link :to="profile_url(user.name)">{{user.name}}</router-link> -->
          <a href="" @click.prevent="lihatUser(user.name)">{{user.name}}</a>
        </li>
      </ul>
    </section>
  </div>
</template>
<script>
  export default {
    props: ['username'],
    data() {
      return {
        users: [
          {id: 1, name: 'Nama_1'},
          {id: 2, name: 'Nama_2'},
          {id: 3, name: 'Nama_3'},
          {id: 4, name: 'Nama_4'}
        ]
      }
    },
    methods: {
      profile_url(name) {
        return '/user/' + name.toLowerCase()
      },
      lihatUser(name) {
        // this.$router.push('/user/' + name.toLowerCase())
        this.$router.push({
          name: 'User',
          params: {username: name.toLowerCase()}
        })
      }
    }
  }
</script>