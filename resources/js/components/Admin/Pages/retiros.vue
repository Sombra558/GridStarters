<template>
    <div class="container">
         <h2 class="subtitleadmin">Withdrawal</h2>
        <div class="row">
        <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
       
            <div class="home-card">
                <div class="flexi"><button class="btn btn-date" @click.prevent="mostrar()">Edit amount</button></div>
                <strong>{{retirovalue.value}}$</strong>
                <span style="padding-bottom:25px">Withdrawal limit</span>
            </div>
            
        </div>
        <!--
         <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
       
            <div class="home-card">
                <div class="flexi"><button class="btn btn-date" @click.prevent="mostrar1()">Edit amount</button></div>
                <strong>{{gridvalue.value}}$</strong>
                <span style="padding-bottom:25px">Grid Value</span>
            </div>
            
        </div>-->
         <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
       
            <div class="home-card">
                <div class="flexi"><button class="btn btn-date" @click.prevent="mostrar2()">Edit amount</button></div>
                <strong>{{blockvalue.value}}$</strong>
                <span style="padding-bottom:25px">Block Value</span>
            </div>
            
        </div>
         <div style="margin-bottom:15px" class="col-sm-12 col-md-4">
       
            <div class="home-card">
                <div class="flexi"><button class="btn btn-date" @click.prevent="mostrar3()">Edit tax</button></div>
                <strong>{{taxvalue.value}}%</strong>
                <span style="padding-bottom:25px">Tax Value</span>
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
    <Search v-if="secondtag==='Solds'" accion="Solds" />
    <Search v-else />
     <div style="margin-top:20px" class="contenedor-second-tag">
                <button :class="secondtag==='Solds' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('Solds')">Solds</button>
                <button :class="secondtag==='Payment_request' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('Payment_request')">Payment request</button>
     </div>
       <table v-if="secondtag==='Solds'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Full name</th>
                 
                    <th>Transaction's ID</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Tax</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(grid,index) in filteredSold" :key="index">
                    <td>{{grid.bank.user.name}}</td>
                    <td>{{grid.transaction_id}}</td>
                    <td>{{grid.payment_method}}</td>
                 
                    <td>{{grid.amount}}$</td>
                    <td>{{grid.tax}}$</td>
                </tr>
               
                </tbody>
            </table>
            <table v-if="secondtag==='Payment_request'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Date</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Transaction's ID</th>
                    <th>Payment data</th>
             
                </tr>
                </thead>
                <tbody>
                     <tr v-for="(grid,index) in filteredRetiros" :key="index">
                        <td>{{grid.created_at}}</td>
                        <td>{{grid.bank.user.name}}</td>
                        <td>{{grid.email}}</td>
                          <td>{{grid.numero_de_comprobante}}</td>
                        <td v-if="grid.estado==='verificado'"><a style="color:#5F01F5;" href="#" @click.prevent="mostrarmodal2(grid)">View</a></td>
                        <td v-else><button class="btn btn-attach" @click.prevent="mostrarmodal(grid)">Attach voucher</button></td>
                    </tr>
               
                </tbody>
            </table>
            <div class="modal fade" id="cambiolimiteretiro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Minimum amount</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <form @submit.prevent="editarretiro()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">Minimum Amount to Withdraw</label>
                                        <input type="number" class="form-control" v-model="retirovalue.value" name="value">
                                    </div>
                                   
                                     <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> Cancel</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Procesando' : 'Save'">
                                    </div>
                                    
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
                <div class="modal fade" id="cambiolimitegrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Grid amount</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <form @submit.prevent="editargrid()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">Grid amount</label>
                                        <input type="number" class="form-control" v-model="gridvalue.value" name="value">
                                    </div>
                                   
                                     <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> Cancel</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Processing' : 'Save'">
                                    </div>
                                    
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
                <div class="modal fade" id="cambiolimiteblock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Block amount</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <form @submit.prevent="editarblock()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">Block amount</label>
                                        <input type="number" class="form-control" v-model="blockvalue.value" name="value">
                                    </div>
                                   
                                     <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> Cancel</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Processing' : 'Save'">
                                    </div>
                                    
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
                <div class="modal fade" id="cambiotax" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Tax Value</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <form @submit.prevent="editartax()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">Tax amount</label>
                                        <input type="number" class="form-control" v-model="taxvalue.value" name="value">
                                    </div>
                                   
                                     <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> Cancel</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Processing' : 'Save'">
                                    </div>
                                    
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
            <div v-if="retiroSelected" class="modal fade" id="checkdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Detalle</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form @submit.prevent="verificar()" id="request-form" method="post" enctype="multipart/form-data">
                                   
                                    <div class="form-groud">
                                        <label for="img-grip">Upload your voucher</label>
                                            <div :style="grip.src ? 'background-image: url('+grip.src+');' : 'background-color: #b7b4be4f;'" @click="bannerChangeProfPicture()" class="updateFoto">
                                                    <div>
                                                        
                                                    </div>
                                            <strong style="color:grey!important">Upload File</strong>
                                            
                                            </div>
                                        <input style="opacity:0" class="d-block" id="ProfImgChangeInput" name="img" type="file" accept="image/*" @change="fileSelected">
                                    </div>
                                    <div class="form-groud">
                                        <label for="img-grip">Transaction's ID</label>
                                        <input type="text" class="form-control" name="numero_de_comprobante" placeholder="Transaction's ID">
                                           
                                    </div>
                                   
                                    <div class="flexi-btn-form">
                                        <input :disabled="estadoprocess" style="margin-top:65px" class="btn btn-grip" type="submit" value="Save">
                                   
                                    </div>
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
                 <div v-if="retiroSelected" class="modal fade" id="check" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div :style="retiroSelected.img_deposito ? 'background-image: url(/storage/'+retiroSelected.img_deposito+');' : 'background-color: #b7b4be4f;'" class="modal-header">
                                 <div class="updateFoto2" ></div>
                               
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <div class="user-descripcion">
                                    <h6>User Description</h6>
                                    <p><strong>User:</strong> {{retiroSelected.bank.user.name}}</p>
                                    <p><strong>Email User:</strong> {{retiroSelected.bank.user.email}}</p>
                                    <p><strong>Total Available:</strong> {{retiroSelected.bank.available}}$</p>
                                    <p><strong>Total Withdrawn:</strong> {{retiroSelected.bank.withdrawn}}$</p>
                                  
                                </div>
                                 <div class="user-descripcion"> 
                                    <h6 >Request Description</h6>
                                    <p><strong>Transaction's ID:</strong> {{retiroSelected.numero_de_comprobante}}</p>
                                    <p><strong>Amount:</strong> {{retiroSelected.amount}}$</p>
                                     <p><strong>Request Date:</strong> {{retiroSelected.created_at}}</p>
                                     <p><strong>Verify Date:</strong> {{retiroSelected.updated_at}}</p>
                                  
                                </div>
                                
                            </div>

                            </div>
                        </div>
                </div>
    </div>
    
</template>

<script>
import { mapGetters } from "vuex";
import Search from './Utils/search4';
    export default {
        name:"admin-retiros",
        props:['blocks','grids','solds','retiros','gridvalue','blockvalue','retirovalue','taxvalue'],
        data() {
            return {
                 secondtag: "Solds",
                 retiroSelected:null,
                 lastFile: null,
                 estadoproceso:false,
                    grip:{
                        src:null,
                    },
            }
        },
        components: {
            Search,
        },
         mounted () {
            this.$store.commit("setSold", this.solds);
            this.$store.commit("setRetiros", this.retiros);
        },
        computed: {
             ...mapGetters(["filteredSold",'filteredRetiros']),
        },
        methods: {
            editarretiro(){
                var url="/admin/modificar-configuracion/"+this.retirovalue.id;
                axios.put(url,{
                    value:this.retirovalue.value,
                }).then((result) => {
                    window.location.reload();
                }).catch((err) => {
                    console.log(err);
                });
            },
            editargrid(){
                var url="/admin/modificar-configuracion/"+this.gridvalue.id;
                axios.put(url,{
                    value:this.gridvalue.value,
                }).then((result) => {
                    window.location.reload();
                }).catch((err) => {
                    console.log(err);
                });
            },
             editarblock(){
                var url="/admin/modificar-configuracion/"+this.blockvalue.id;
                axios.put(url,{
                    value:this.blockvalue.value,
                }).then((result) => {
                    window.location.reload();
                }).catch((err) => {
                    console.log(err);
                });
            },
             editartax(){
                var url="/admin/modificar-configuracion/"+this.taxvalue.id;
                axios.put(url,{
                    value:this.taxvalue.value,
                }).then((result) => {
                    window.location.reload();
                }).catch((err) => {
                    console.log(err);
                });
            },
            bannerChangeCoverPicture(){
                document.getElementById("CoverChangeInput").click(); 
            },
            bannerChangeProfPicture() {
                document.getElementById("ProfImgChangeInput").click(); 
            },
            fileSelected(evt) {
            this.lastFile = evt.target.files[0];
            this.grip.src = URL.createObjectURL(this.lastFile)
            this.$refs.preview.src = this.imageURL
            },
            seleccionar(tag) {
                this.selectedtag=tag;
            },
            seleccionardos(tag) {
                this.secondtag=tag;
            },
             mostrar(){
                setTimeout(function(){
                $("#cambiolimiteretiro").modal("show");
                },200)
            },
            mostrar1(){
                setTimeout(function(){
                $("#cambiolimitegrid").modal("show");
                },200)
            },
            mostrar2(){
                setTimeout(function(){
                $("#cambiolimiteblock").modal("show");
                },200)
            },
             mostrar3(){
                setTimeout(function(){
                $("#cambiotax").modal("show");
                },200)
            },
             mostrarmodal(retiro){
                if(retiro){
                    this.retiroSelected=retiro;
                }
                setTimeout(function(){
                $("#checkdetail").modal("show");
                },200)
            },
             mostrarmodal2(retiro){
                if(retiro){
                    this.retiroSelected=retiro;
                }
                setTimeout(function(){
                $("#check").modal("show");
                },200)
            },
            verificar(){
             this.estadoprocess=true;
             let form = $("#request-form")[0];
             let formulario = new FormData(form);
             var ruta=`/admin/verificar/`+this.retiroSelected.id;
                axios.post(ruta, formulario)
                  .then((res) => {
                   window.location.reload();
                   this.estadoprocess=false;
                  })
                  .catch((err) => {
                    this.estadoprocess=false;
                    console.log(err);
                 });
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
    .btn-attach{
        background-color: #5F01F5;
        height: 28px;
        width: 136px;
        border-radius: 4px;
        color: #ffffff;
    }
    .updateFoto{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 89px;
        border-radius: 5px;
        background-repeat: no-repeat;
        background-size: 100% 100%;

        background-position: center center;
    }
    .updateFoto2{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 250px;
        border-radius: 5px;
        background-repeat: no-repeat;
        background-size: 100% 100%;

        background-position: center center;
    }
     .updateFoto strong{
       width: 100%;

       text-align: center;
   
    }
    .updateFoto2 strong{
       width: 100%;
     
       text-align: center;
   
    }
    .user-descripcion{
        background-color:#ffffff;
        width: calc(100% - 10px);
        border-radius: 8px;
        height: 150px;
        margin-bottom: 10px;
    }

    .user-descripcion h6{
        font-family: 'Rubik';
        font-size: 20px;
       margin-bottom: 5px!important;
        margin-left: 15px;
    }
    .user-descripcion strong{
        font-family: 'Valera';
        font-size: 16px;
        margin-bottom: 5px!important;
        margin-left: 15px;
    }
    .user-descripcion p{
        font-family: 'Valera';
        font-size: 16px;
        margin-bottom: 5px!important;
        margin-left: 15px;
    }
</style>