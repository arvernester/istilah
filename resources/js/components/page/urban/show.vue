<template>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div v-if="dictionary.data" class="card-body">
            <h1>{{ dictionary.data.word }}</h1>
            <p class="text-muted" v-for="description in dictionary.data.descriptions" :key="description.guid">
              {{ description.description }}
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-right">
        <img src="https://lh5.ggpht.com/CztHBMfmRKhSv-_up3GCkK5R5M0TCm1czCVkVBwB0urvaHUVCEh6YtpS7DY3mcZuwC2SzX9A3w=w338" alt="">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'UrbanShow',

  data () {
    return {
      dictionary: {}
    }
  },

  created () {
    this.getDictionary()
  },

  methods: {
    async getDictionary () {
      this.dictionary = await axios.get(`/urban/dictionary/${this.$route.params.slug}`)
    }
  }
}
</script>
