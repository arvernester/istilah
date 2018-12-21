import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {path: '/', name: 'home', component: require('./components/page/home').default},
  {path: '/contrubutors', name: 'contributor', component: require('./components/page/contributor').default},
  {path: '/contact', name: 'contact', component: require('./components/page/contact').default},

  // global search
  {path: '/search', name: 'search', component: require('./components/page/search').default},

  // user
  {path: '/profile/:id', name: 'user-profile', component: require('./components/page/user/profile').default},
  {path: '/show/:guid', name: 'user-show', component: require('./components/page/user/profile').default},
  {path: '/users', name: 'user-index', component: require('./components/page/user/index').default},

  {path: '/blog', name: 'blog-index', component: require('./components/page/blog/index').default},
]

export default new VueRouter({
  routes,
})