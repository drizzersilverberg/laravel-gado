<template>
  <div>
      <div v-if="message" class="alert">{{ message }}</div>
      <div v-if="! loaded">Loading...</div>
      <form @submit.prevent="onSubmit($event)">
        <div class="form-group">
            <label for="user_name">Name</label>
            <input id="user_name" v-model="user.name" />
        </div>
        <div class="form-group">
            <label for="user_email">Email</label>
            <input id="user_email" type="email" v-model="user.email" />
        </div>
        <div class="form-group">
            <button type="submit" :disabled="saving">Update</button>
        </div>
    </form>
  </div>
</template>
<script>
import api from '../api/users';

export default {
  data() {
    return {
      message: null,
      loaded: false,
      saving: false,
      user: {
        id: null,
        name: "",
        email: ""
      }
    };
  },
  methods: {
    onSubmit(event) {
      this.saving = true;
      api.update(this.user.id, {
          name: this.user.name,
          email: this.user.email,
      }).then((response) => {
          this.message = 'User updated';
          setTimeout(() => this.message = null, 2000);
          this.user = response.data.data;
      }).catch(error => {
          console.log(error)
      }).then(_ => this.saving = false);
    }
  },
  created() {
    api.find(this.$route.params.id).then((response) => {
      setTimeout(() => {
        this.loaded = true;
        this.user = response.data.data;
      }, 5000);
    });
  }
};
</script>