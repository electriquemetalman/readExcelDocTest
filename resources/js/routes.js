import AllArticle from './components/AllArticle.vue';
import ImportArticle from './components/ImportArticle.vue';

export const routes = [{
        name: 'home',
        path: '/',
        component: AllArticle
    },
    {
        name: 'create',
        path: '/create',
        component: ImportArticle
    }
];