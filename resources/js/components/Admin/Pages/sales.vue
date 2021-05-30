<template>
    <div class="container">
        <h2 class="subtitleadmin">Sales</h2>
        <Search action="sales" />
        <br>
        <strong>You have earned this month</strong>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="home-card">
                    <strong>{{total}}$</strong>
                </div>
            </div>
        </div>
        <br>
             <table class="table table-responsive-sm">
                    <thead>
                    <tr class="table-bg">
                        <th>User Name</th>
                        <th>Purchase detail</th>
                        <th>Transaction's id</th>
                        <th>Payment method</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(sale,index) in filteredSales" :key="index">
                        <td>{{sale.user.email}}</td>
                        <td><a @click.prevent="mostrarmodal(sale)" href="#">View Detail</a></td>
                        <td>{{sale.transaction_id}}</td>
                        <td>{{sale.payment_method}}</td>
                        <td>{{sale.amount}}$</td>
        
                    </tr>
                
                    </tbody>
        </table>
      <div v-if="saleSelected" class="modal fade" id="checkdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Detalle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>User Detail:</h5>
                                <div class="user-card-detail">
                                    <p><strong>Name:</strong> {{saleSelected.user.name}}</p>
                                    <p><strong>Email:</strong> {{saleSelected.user.email}}</p>
                                </div>
                                <div class="user-card-detail">
                                    <p><strong>Grid Product onner:</strong> {{saleSelected.user.name}}</p>
                                    <p><strong>Grid Product onner email:</strong> {{saleSelected.user.email}}</p>
                                </div>
                                <div class="user-card-detail">
                                    <p><strong>Transaction`s id:</strong> {{saleSelected.transaction_id}}</p>
                                    <p><strong>Payment method:</strong> {{saleSelected.payment_method}}</p>
                                    <p><strong>Transaction`s description:</strong> {{saleSelected.descripcion}}</p>
                                </div>
                            </div>

                            </div>
                        </div>
                </div>
       
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import Search from './Utils/search2'
    export default {
        name:"sales-content-component",
        props:["sales"],
        data() {
            return {
                saleSelected: null
            }
        },
        mounted () {
            this.$store.commit("setSales", this.sales);
        },
        computed: {
             ...mapGetters(["filteredSales"]),
             total(){
                 var total=0;
                 if (this.filteredSales.length>0) {
                     this.filteredSales.forEach(element => {
                         total=total+element.amount;
                     });
                 }
                 return total;
             }
        },
        components: {
            Search,
        },
        methods: {
             mostrarmodal(sale){
                if(sale){
                    this.saleSelected=sale;
                }
                setTimeout(function(){
                $("#checkdetail").modal("show");
                },200)
            },
        },
    }
</script>

<style lang="scss" scoped>
     .subtitleadmin{
        font-family: 'Rubik';
        font-size: 20px;
        color:#5F01F5;
    }
     .table-bg{
        background-color: #0f042613;
    }
    .table-width{
        min-width: 875px;
    }
    .home-card{
        height: 169px;
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
</style>