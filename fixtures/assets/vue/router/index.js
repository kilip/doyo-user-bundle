import Router from 'vue-router';

import Dashboard from '../components/Dashboard';
import Register from '../components/Register';
import ResetPasswordConfirm from '../components/ResetPasswordConfirm';
import NotFound from '../components/NotFound';

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'homepage',
            component: Dashboard
        },
        {
            path: '/register',
            name: 'registerUser',
            component: Register
        },
        {
            path: '/reset-password/confirm/:token',       // * => wildcard. Matches all other routes
            name: 'resetPasswordConfirm',
            component: ResetPasswordConfirm
        },
        {
            path: '*',       // * => wildcard. Matches all other routes
            name: 'notfound',
            component: NotFound
        }
    ]
})
