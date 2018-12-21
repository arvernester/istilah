<template>
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Users <span v-if="users.data">({{ users.data.total }})</span></h4>
        
        <form action="">
          <div class="form-group">
            <input type="text" class="form-control">
          </div>
        </form>

        <div class="table-responsive">
          <table v-if="users.data" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Gravatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created</th>
                <th>Updated</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(user, index) in users.data.data" :key="user.id">
                <td class="py-1"><img :src="user.gravatar" :alt="user.name"></td>
                <td>
                  <router-link :to="{name: 'user-profile', params:{id: user.id}}">{{ user.name }}</router-link>
                </td>
                <td>{{ user.email }}</td>
                <td>{{ user.created_at }}</td>
                <td>{{ user.updated_at }}</td>
                <td class="text-center">
                  <a href="#" class="btn btn-sm btn-link text-primary"><i class="fa fa-edit"></i></a>
                  <a @click="destroy(user.id)" href="#" class="btn btn-sm btn-link text-danger"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>



<script>
export default {
  name: 'UserIndex',

  data () {
    return {
      users: {}
    }
  },

  created () {
    this.getUsers()
  },

  methods: {
    destroy (id) {
      axios.delete(`/user/${id}`)
        .then(response => {
          this.getUsers()
        })
        .catch(e => {
          this.$root.error(e.response.data.message)       
        })
    },

    async getUsers () {
      this.users = await axios.get('/user')
    }
  }
}
</script>
