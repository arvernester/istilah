<template>
  <form class="search-field d-none d-md-flex" action="#">
    <div class="form-group mb-0">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="icon-magnifier"></i></span>
        </div>
        <input type="text" id="global-search-form" class="form-control" placeholder="global quick search...">
      </div>
    </div>
  </form>
</template>

<script>
export default {
  name: 'Search'
}
</script>

<style scoped>
  #global-search-form {
    color: white;
  }
</style>
