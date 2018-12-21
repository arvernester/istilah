<template>
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <form action="#">
                  <div class="form-group d-flex">
                    <input @keyup="search" v-model="keyword" type="text" class="form-control" placeholder="Search everything in istilah.co here..." value="urbanui">
                    <button @click.prevent="search" type="submit" class="btn btn-primary ml-3">
                      <i class="icon-magnifier"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class="col-12 mb-5">
                <h2 v-if="keyword">Search result for<u class="ml-2">"{{ keyword }}"</u></h2>
                <p v-if="indices.data" class="text-muted">About <span v-if="indices.data">{{ indices.data.total }}</span> results (0.52 seconds)</p>
              </div>

              <div v-if="indices.data">
                <div v-if="indices.data.total == 0" class="col-12">
                  <p>Tidak ada hasil untuk katakunci <strong>{{ keyword }}</strong> dalam pencarian. Berikut saran yang bisa kamu gunakan:</p>
                  <ul>
                    <li>Pastikan semua kata dieja dengan benar.</li>
                    <li>Coba kata kunci yang lain.</li>
                    <li>Coba kata kunci yang lebih umum.</li>
                  </ul>
                </div>

                <div v-if="indices.data.data" v-for="index in indices.data.data" :key="index.guid" class="col-12 results">
                  <div class="pt-4 border-bottom">
                    <router-link :to="{name: `${index.indexable_type}-show`, params:{guid: index.indexable.guid}}" class="d-block h4 mb-0">
                      {{ index.title }}
                    </router-link>
                    <router-link :to="{name: `${index.indexable_type}-show`, params:{slug: index.indexable.slug}}" class="page-url text-primary">
                      https://www.istilah.co/#/{{ index.indexable_type }}/{{ index.indexable.slug }}/
                    </router-link>
                    <p class="page-description mt-1 w-75 text-muted">
                      <span v-if="index.description">{{ index.description }}</span>
                      <span v-else>No description for this entity.</span>                      
                    </p>
                    <p class="page-description mt-1 w-75 text-muted"><small>Updated {{ index.updated_timespan }}</small></p>
                  </div>
                </div>
                
                <nav class="col-12" aria-label="Page navigation">
                  <ul class="pagination mt-5">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item  active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Search',

  data () {
    return {
      keyword: '',
      indices: {},
    }
  },

  methods: {
    async search (el) {
      if (this.keyword == '') {
        this.indices = {}
      }
      else {
        const params = {
          keyword: this.keyword
        }

        this.indices = await axios.get('/search', {params})
      }
    }
  }
}
</script>
