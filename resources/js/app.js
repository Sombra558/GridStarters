/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex';
Vue.use(Vuex);
const moment = require('moment');
require('moment/locale/es');
Vue.prototype.moment = moment;

Vue.component('payment-component', require('./components/Payment/Payment.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('grip-detalle-component', require('./components/Grip/gripdetalle.vue').default);
Vue.component('btn-buy-component', require('./components/Templades/navbardetalle').default);
Vue.component('top-component', require('./components/landing/Inicio/topusers.vue').default);
//profile user
Vue.component('user-profile-component', require('./components/MyProfile/MyProfile').default);
Vue.component('btn-grids-component', require('./components/Templades/btnmygryps').default);
Vue.component('btn-grids-movil-component', require('./components/Templades/btnnamovil').default);
Vue.component('my-grids-component', require('./components/MyProfile/MyGrids').default);
Vue.component('my-grids-detalle-component', require('./components/MyProfile/MyGridDetalle').default);

//admin
Vue.component('nav-admin-component', require('./components/Admin/nav').default);
Vue.component('home-admin-component', require('./components/Admin/Pages/home').default);
Vue.component('public-admin-component', require('./components/Admin/Pages/public-content').default);
Vue.component('users-admin-component', require('./components/Admin/Pages/users').default);
Vue.component('sales-admin-component', require('./components/Admin/Pages/sales').default);
Vue.component('reports-admin-component', require('./components/Admin/Pages/reports').default);

const store = new Vuex.Store({
    state: {
        user: null,
        cart:[],
        grid:[],
        filterGrip: {
            user: "",
        },
        stateMenu:false,
        publics:[],
        filterPublics: {
            user: "",
        },
        sales:[],
        filterSales: {
            query: "",
        },
    },
    mutations: {
        setUser(state, payload) {
            state.user = payload.user;
        },
        setCart(state, cart) {  
           state.cart=cart;
        },
        setGrid(state, grid) {
            state.grid = grid;
        },
        setfilterGrid(state, data) {
            state.filterGrid[data['filter']] = data.value;
        },
        showMenuD(state, value){
            state.stateMenu = value
            console.log(state.stateMenu)
        },
        setPublics(state, publics) {
            state.publics = publics;
        },
        setfilterPublics(state, data) {
            state.filterPublics[data['filter']] = data.value;
        },
        setSales(state, sales) {
            state.sales = sales;
        },
        setfilterSales(state, data) {
            state.filterSales[data['filter']] = data.value;
        },
    
    },
    getters: {
        filteredgrid(state) {
            let grid = state.grid;
            if (state.filterGrid.user.length > 1) {
                grid = grid.filter(r => r.user.name.toLowerCase().includes(state.filterGrid.user.toLowerCase()));
            }
            return grid;
        },
        filteredPublics(state) {
            let publics = state.publics;
            return publics;
        },
        filteredSales(state) {
            let sales = state.sales;
            return sales;
        },
     
    }
});

const app = new Vue({
    el: '#app',
    store
});
