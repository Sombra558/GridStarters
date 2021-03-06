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
import Vue2TouchEvents from 'vue2-touch-events'

Vue.use(Vue2TouchEvents)

import VueDragSelector from "vue-drag-selector";
Vue.use(VueDragSelector);
Vue.component('payment-component', require('./components/Payment/Payment.vue').default);
Vue.component('grid-payment-component', require('./components/Payment/GridPayment.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('grip-detalle-component', require('./components/Grip/gripdetalle.vue').default);
Vue.component('btn-buy-component', require('./components/Templades/navbardetalle').default);
Vue.component('btn-buy-comp', require('./components/Templades/buyinpublic').default);
Vue.component('top-component', require('./components/landing/Inicio/topusers.vue').default);
Vue.component('search-component', require('./components/landing/Inicio/search.vue').default);
//profile user
Vue.component('user-profile-component', require('./components/MyProfile/MyProfile').default);
Vue.component('btn-grids-component', require('./components/Templades/btnmygryps').default);
Vue.component('btn-grids-comp', require('./components/Templades/mygridsinpublic').default);
Vue.component('btn-grids-movil-component', require('./components/Templades/btnnamovil').default);
Vue.component('my-grids-component', require('./components/MyProfile/MyGrids').default);
Vue.component('my-grids-detalle-component', require('./components/MyProfile/MyGridDetalle').default);
Vue.component('my-perfil-component', require('./components/MyProfile/perfil').default);

//admin
Vue.component('nav-admin-component', require('./components/Admin/nav').default);
Vue.component('nav-show-admin-component', require('./components/Admin/btn-nav-movil').default);
Vue.component('home-admin-component', require('./components/Admin/Pages/home').default);
Vue.component('public-admin-component', require('./components/Admin/Pages/public-content').default);
Vue.component('users-admin-component', require('./components/Admin/Pages/users').default);
Vue.component('sales-admin-component', require('./components/Admin/Pages/sales').default);
Vue.component('reports-admin-component', require('./components/Admin/Pages/reports').default);
Vue.component('retiros-admin-component', require('./components/Admin/Pages/retiros').default);

const store = new Vuex.Store({
    state: {
        user: null,
        usergrids: [],
        dragstatus:false,
        cart:[],
        grid:[],
        filterGrip: {
            user: "",
        },
        stateMenu:true,
        publics:[],
        filterPublics: {
            user: "",
            mes:new Date().getMonth(),
        },
        todosusers:[],
        filterUserGrids:{
            user:"",
        },
        filterUsers: {
            user: "",
            mes:new Date().getMonth(),
        },
        sales:[],
        filterSales: {
            query: "",
            mes:new Date().getMonth(),
            tipo:null
        },
        sold:[],
        filterSold: {
            query: "",
        },
        retiros:[],
        filterRetiros: {
            query: "",
        },
    },
    mutations: {
        setUser(state, payload) {
            state.user = payload.user;
        },
        setUserGrids(state, usergrids) {
            state.usergrids = usergrids;
        },
        setCart(state, cart) {  
           state.cart=cart;
        },
        setDrag(state, drag) {  
            state.dragstatus=drag;
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
        setfilterUserGrids(state, data) {
            state.filterUserGrids[data['filter']] = data.value;
        },
        setfilterPublics(state, data) {
            state.filterPublics[data['filter']] = data.value;
        },
        setUsers(state, users) {
            state.todosusers = users;
        },
        setfilterUsers(state, data) {
            state.filterUsers[data['filter']] = data.value;
        },
        setSales(state, sales) {
            state.sales = sales;
        },
        setfilterSales(state, data) {
            state.filterSales[data['filter']] = data.value;
        },
        setSold(state, sold) {
            state.sold = sold;
        },
        setfilterSold(state, data) {
            state.filterSold[data['filter']] = data.value;
        },
        setRetiros(state, retiros) {
            state.retiros = retiros;
        },
        setfilterRetiros(state, data) {
            state.filterRetiros[data['filter']] = data.value;
        },
    
    },
    getters: {
        filteredUserGrids(state) {
            let grids = state.usergrids;
            if (state.filterUserGrids.user.length > 1) {
                grids = grids.filter(r => {
                    var rutauser='@'+r.nombreURL;
                
                    if (r.user.name.toLowerCase().includes(state.filterUserGrids.user.toLowerCase())
                    ||
                    r.user.email.toLowerCase().includes(state.filterUserGrids.user.toLowerCase())
                    ||
                    rutauser.toLowerCase().includes(state.filterUserGrids.user.toLowerCase())
                    ) {  
                        return r;  
                    }
                   
                    });
            }
            return grids;
        },
        filteredgrid(state) {
            let grid = state.grid;
            if (state.filterGrid.user.length > 1) {
                grid = grid.filter(r => r.user.name.toLowerCase().includes(state.filterGrid.user.toLowerCase()));
            }
            return grid;
        },
        filteredPublics(state) {
            let publics = state.publics;
                    if (state.filterPublics.user.length > 1) {
                        publics = publics.filter(r => r[0].user.name.toLowerCase().includes(state.filterPublics.user.toLowerCase()));
                    }
                publics = publics.filter(r => {
                    var date= new Date(r[0].created_at);
                 
                    if (date.getMonth()===state.filterPublics.mes){

                        return r;
                    }
                });
            
            return publics;
        },
        filteredUsers(state) {
            let todos = state.todosusers;
       
            if (state.filterUsers.user.length > 1) {
                todos = todos.filter(r => r.name.toLowerCase().includes(state.filterUsers.user.toLowerCase()));
            }
            todos = todos.filter(r => {
                var date= new Date(r.created_at);
             
                if (date.getMonth()===state.filterUsers.mes){

                    return r;
                }
            });
            return todos;
        },
        filteredSales(state) {
            let sales = state.sales;
       
            if (state.filterSales.query.length > 1) {
                sales = sales.filter(r => r.transaction_id.toLowerCase().includes(state.filterSales.query.toLowerCase())||r.user.email.toLowerCase().includes(state.filterSales.query.toLowerCase()));
            }
            sales = sales.filter(r => {
                var date= new Date(r.created_at);
             
                if (date.getMonth()===state.filterSales.mes){

                    return r;
                }
            });
            if (state.filterSales.tipo!= null) {
                sales = sales.filter(r => r.payment_method.toLowerCase().includes(state.filterSales.tipo.toLowerCase()));
            }
           
            return sales;
        },
        filteredSold(state) {
            let sales = state.sold;
            if (state.filterSold.query.length > 1) {
                sales = sales.filter(r => r.transaction_id.toLowerCase().includes(state.filterSold.query.toLowerCase())||r.bank.user.name.toLowerCase().includes(state.filterSold.query.toLowerCase()));
            } 
            return sales;
        },
        filteredRetiros(state) {
            let sales = state.retiros;
            if (state.filterRetiros.query.length > 1) {
                sales = sales.filter(r => r.numero_de_comprobante.toLowerCase().includes(state.filterRetiros.query.toLowerCase()));
            } 
            return sales;
        },
    }
});

const app = new Vue({
    el: '#app',
    store
});
