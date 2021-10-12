import Vue from 'vue'
import Router from 'vue-router'

import candidateDetail from '../components/CandidateDetailsComponent.vue'


Vue.use(Router)

const routes = [
    {
        path:"candidate-detail/:id",
        component:candidateDetail
    
    }

]

export default new Router({
    mode:'history',
    routes
})