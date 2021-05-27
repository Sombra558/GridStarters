<template>
    <div class="container">
         <h2 class="subtitleadmin">Withdrawal</h2>
        <div class="row">
        <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
       
            <div class="home-card">
                <div class="flexi"><button class="btn btn-date">Edit amount</button></div>
                <strong>50$</strong>
                <span style="padding-bottom:25px">Withdrawal limit</span>
            </div>
        </div>
        <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
          
            <div class="home-card">
                <strong>{{blocks}}</strong>
                <span>Sold blocks</span>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">

            <div class="home-card">
                <strong>{{grids}}</strong>
                <span>Sold grids</span>
            </div>
        </div>
        
    </div>
    <Search />
     <div style="margin-top:20px" class="contenedor-second-tag">
                <button :class="secondtag==='Solds' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('Solds')">Solds</button>
                <button :class="secondtag==='Payment_request' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('Payment_request')">Payment request</button>
     </div>
       <table v-if="secondtag==='Solds'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Full name</th>
                    <th>Block size</th>
                    <th>Transaction's ID</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(grid,index) in filteredSold" :key="index">
                    <td>{{grid.bank.user.name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{grid.amount}}$</td>
                </tr>
               
                </tbody>
            </table>
            <table v-if="secondtag==='Payment_request'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Date</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Payment data</th>
             
                </tr>
                </thead>
                <tbody>
                <!--<tr v-for="(history,index) in user.history" :key="index">
                    <td>{{history.created_at}}</td>
                    <td>{{history.descripcion}}</td>
                    <td></td>
                    <td>Paypal</td>
                    <td>{{history.amount}}$</td>
                </tr>-->
               
                </tbody>
            </table>
    </div>
    
</template>

<script>
import { mapGetters } from "vuex";
import Search from './Utils/search4';
    export default {
        name:"admin-retiros",
        props:['blocks','grids','solds'],
        data() {
            return {
                 secondtag: "Solds",
            }
        },
        components: {
            Search,
        },
         mounted () {
            this.$store.commit("setSold", this.solds);
        },
        computed: {
             ...mapGetters(["filteredSold"]),
        },
        methods: {
            seleccionar(tag) {
                this.selectedtag=tag;
            },
            seleccionardos(tag) {
                this.secondtag=tag;
            }
        },
    }
</script>

<style lang="scss" scoped>
    .subtitleadmin{
        font-family: 'Rubik';
        font-size: 20px;
        color:#5F01F5;
    }
    .home-card{
        height: 200px;
        width: 100%;
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(95,1,245,1) 100%);
        border-radius: 12px;
    }
   
    .home-card strong{
        font-family: 'Valera';
        font-size: 72px;
        color:#ffffff;
    }
      .home-card span{
        font-family: 'Valera';
        font-size: 16px;
        color:#ffffff;
    }
    .btn-date{
        background-color: #FFFFFF;
        margin-top: 10px;
        border-radius: 8px;
        height: 30px;
        font-size: 14px;
        width: 118px;
        color:#0f042680;

    }
    .flexi{
        display: flex;
        justify-content: flex-end;
        width: calc(100% - 15px);
        align-items: center;
    }
    .contenedor-botones-profile{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 44px;
        width: 100%;
        max-width:628px;
        background-color: #2f019b31;
        border-radius: 12px;
    }
    .btn-profile-tag{
        height: 44px;
        width: 100%;
        border: none;
        max-width: 193px;
        height: 36px;
        background-color: transparent;
        border-radius: 8px;
    }
    .active{
        height: 44px;
        width: 100%;
        border: none;
        max-width: 193px;
        height: 36px;
        background-color: #2f019b83;
        color:#ffffff;
        border-radius: 8px;
    }
    section{
        margin-top: 16px;
    }
    section h3{
       font-family: 'Rubik';
       font-size: 20px;
       font-weight: 500;
       color: #5F01F5;
    }
    .card-grid-profile img{
        
    }
    .btn-second-tag{
        width: 143px;
        font-family: 'Valera';
        color: #0f0426a4;
        height: 21px;
        background-color: transparent;
        border: none;
    }
    .active-2{
        line-height: 5px;
        border-bottom: 2px solid #30019B;
    }
    @media only screen and (max-width: 767px){
        .contenedor-earrings{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #FBF9FF;
        border: 1px solid #b8a7a782;
        height: 271px;
    }
    .earrings{
        flex-basis: 100%;
        width: 271px;
        border-bottom: 1px solid #b8a7a782;
    }
    .earrings h4{
        font-family: 'Valera';
        font-size: 16px;
        text-align: center;
        margin-top: 13px;
        color: #B8A7A7;
    }
    .earrings p{
        font-family: 'Valera';
        font-size: 20px;
        margin: 0;
        width: 100%;
        text-align: center;
    }
    }
    @media only screen and (min-width: 768px){
         .contenedor-earrings{
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #FBF9FF;
        border: 1px solid #b8a7a782;
        height: 73px;
    }

    .earrings{
        flex-basis: calc(33.3% - 15px);
        border-left: 1px solid #b8a7a782;
    }
     .earrings h4{
        font-family: 'Valera';
        font-size: 16px;
        text-align: center;
        margin: 0;
        color: #B8A7A7;
    }
     .earrings p{
        font-family: 'Valera';
        font-size: 20px;
        margin: 0;
        width: 100%;
        text-align: center;
        
    }
    }
   
    .contenedor-grid-purshace{
        display: flex;
        
    }
    .card-grid-profile img{
        height: 207px;
        width: 100%;
        min-width:251px;
        border-radius: 8px;
    }
    .card-grid-profile p{
        font-family: 'Valera';
        font-size: 16px;
        font-weight: 700;
        color: #000000;
        margin: 0;
    }
    .card-grid-profile strong{
        font-family: 'Valera';
        font-size: 16px;
        font-weight: 700;
        color: #000000;
        margin: 0;
    }
    .table-bg{
        background-color: #0f042613;
    }
</style>