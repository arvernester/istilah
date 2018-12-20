import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {path: '/', name: 'home', component: require('./components/page/home').default},
  {path: '/contrubutors', name: 'contributor', component: require('./components/page/contributor').default},
  {path: '/contact', name: 'contact', component: require('./components/page/contact').default},

  // global search
  {path: '/search', name: 'search', component: require('./components/page/glossary/search').default},

  {path: '/profile', name: 'user-profile', component: require('./components/page/user/profile').default},

  {path: '/blog', name: 'blog-index', component: require('./components/page/blog/index').default},
]

export default new VueRouter({
  routes,
})