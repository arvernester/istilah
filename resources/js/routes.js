import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {path: '/', name: 'home', component: require('./components/page/home').default},
  {path: '/contrubutors', name: 'contributor', component: require('./components/page/contributor').default},
  {path: '/contact', name: 'contact', component: require('./components/page/contact').default},

  // global search
  {path: '/search', name: 'search', component: require('./components/page/search').default},

  // urban dictionary
  {path: '/urban/:slug', name: 'urban-show', component: require('./components/page/urban/show').default},

  // user
  {path: '/user/:slug', name: 'user-show', component: require('./components/page/user/show').default},
  {path: '/users', name: 'user-index', component: require('./components/page/user/index').default},

  {path: '/blog', name: 'blog-index', component: require('./components/page/blog/index').default},
]

export default new VueRouter({
  routes,
})