import Vue from 'vue'
import Router from 'vue-router'
import Jobs from '@/components/Jobs'
import VueCompanies from '@/components/VueCompanies'
import Meetups from '@/components/Meetups'
import Sponsors from '@/components/Sponsors'
import Contributors from '@/components/Contributors'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Jobs',
      component: Jobs
    },
    {
      path: '/jobs',
      name: 'Jobs',
      component: Jobs
    },
    {
      path: '/companies',
      name: 'VueCompanies',
      component: VueCompanies
    },
    {
      path: '/meetups',
      name: 'Meetups',
      component: Meetups
    },
    {
      path: '/sponsors',
      name: 'Sponsors',
      component: Sponsors
    },
    {
      path: '/contributors',
      name: 'Contributors',
      component: Contributors
    }
  ]
})
