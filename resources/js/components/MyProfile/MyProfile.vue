<template>
    <div class="container-fluid">
        <br>
       <div class="contenedor-botones-profile">
           <button @click.prevent="seleccionar('mygrid')" :class="selectedtag==='mygrid' ? 'btn-profile-tag active' : 'btn-profile-tag'">My grids</button>
           <button :class="selectedtag==='account' ? 'btn-profile-tag active' : 'btn-profile-tag'" @click.prevent="seleccionar('account')">Account</button>
           <button :class="selectedtag==='earrings' ? 'btn-profile-tag active' : 'btn-profile-tag'" @click.prevent="seleccionar('earrings')">Earnings</button>
       </div>
        <section v-if="selectedtag==='mygrid'">
            <h3>My Grids</h3>
            <div class="row">
                <div class="col-sm-12 col-md-3 card-grid-profile" v-for="(grid,index) in mygrids" :key="index">
               <img :src="'/storage/'+grid[0].img" alt="" srcset="">
               <p>Size: {{grid[0].size}}</p>
               <strong>Date of purchase: {{grid[0].created_at}}</strong>
            </div>
            </div>
            
        </section>
        <section v-if="selectedtag==='account'">
            <h3>My Account</h3>
            <div class="contenedor-second-tag">
                <button :class="secondtag==='earnings' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('earnings')">Earnings</button>
                <button :class="secondtag==='purchases' ? 'btn-second-tag active-2' : 'btn-second-tag'" @click.prevent="seleccionardos('purchases')">Purchases</button>
            </div>
              <table v-if="secondtag==='earnings'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Date</th>
                  
                    <th>Transaction's ID</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody v-if="user.bank.length>0">
                <tr v-for="(grid,index) in user.bank[0].registros" :key="index">
                    <td>{{grid.created_at}}</td>
            
                    <td>{{grid.transaction_id}}</td>
                    <td>{{grid.payment_method}}</td>
                    <td>{{grid.amount}}$</td>
                </tr>
               
                </tbody>
            </table>
            <table v-if="secondtag==='purchases'" style="margin-top:25px" class="table table-responsive-sm">
                <thead>
                <tr class="table-bg">
                    <th>Date</th>
                    <th>Purchases Detail</th>
                    <th>Transaction's ID</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(history,index) in user.history" :key="index">
                    <td>{{history.created_at}}</td>
                    <td>{{history.descripcion}}</td>
                    <td>{{history.transaction_id}}</td>
                    <td>{{history.payment_method}}</td>
                    <td>{{history.amount}}$</td>
                </tr>
               
                </tbody>
            </table>
        </section>
        <section v-if="selectedtag==='earrings'">
            <h3>Earnings</h3>
            <div v-if="user.bank.length>0" class="contenedor-earrings">
                <div class="earrings">
                        <h4>Withdrawn</h4>
                        <p>$ {{user.bank[0].withdrawn}}</p>
                </div>
                <div class="earrings">
                        <h4>Available for Withdrawal</h4>
                        <p>$ {{user.bank[0].available}}</p>

                </div>
                <div class="earrings">
                        <h4>Sold grids</h4>
                        <p>{{soldgrips}}</p>
                </div>
            </div>
            <strong v-if="user.bank.length>0" class="d-block">Withdraw</strong>
                    <svg v-if="user.bank.length>0" data-toggle="modal" data-target="#exampleModalLong" width="181" height="43" viewBox="0 0 181 43" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="181" height="43" fill="white"/>
                                    <path d="M54.92 15.832C55.688 15.832 56.36 15.9387 56.936 16.152C57.512 16.3547 57.9547 16.632 58.264 16.984C58.584 17.336 58.8187 17.7147 58.968 18.12C59.1173 18.5147 59.192 18.936 59.192 19.384C59.192 19.832 59.1173 20.2587 58.968 20.664C58.8187 21.0587 58.584 21.432 58.264 21.784C57.9547 22.136 57.512 22.4187 56.936 22.632C56.36 22.8347 55.688 22.936 54.92 22.936H52.008V27H50.552V15.832H54.92ZM54.776 21.56C55.864 21.56 56.6267 21.352 57.064 20.936C57.512 20.52 57.736 20.0027 57.736 19.384C57.736 18.7653 57.512 18.248 57.064 17.832C56.6267 17.416 55.864 17.208 54.776 17.208H52.008V21.56H54.776ZM61.1111 19.288C62.0391 18.8827 63.0311 18.68 64.0871 18.68C65.1538 18.68 65.9698 18.9893 66.5351 19.608C67.1005 20.2267 67.3831 20.968 67.3831 21.832V27H66.1031L65.9271 25.976H65.8791C65.1111 26.7653 64.1245 27.16 62.9191 27.16C62.1938 27.16 61.5751 26.9413 61.0631 26.504C60.5618 26.0667 60.3111 25.4693 60.3111 24.712C60.3111 23.9547 60.6205 23.3413 61.2391 22.872C61.8685 22.4027 62.7858 22.168 63.9911 22.168H65.9271V22.04C65.9271 21.336 65.7511 20.8293 65.3991 20.52C65.0578 20.2107 64.4605 20.056 63.6071 20.056C62.7538 20.056 61.9538 20.2373 61.2071 20.6H61.1111V19.288ZM65.9271 24.68V23.336H64.1831C62.5725 23.336 61.7671 23.7627 61.7671 24.616C61.7671 25.4587 62.3325 25.88 63.4631 25.88C63.9325 25.88 64.3858 25.768 64.8231 25.544C65.2605 25.3093 65.6285 25.0213 65.9271 24.68ZM77.0421 18.84L72.1301 30.68H70.6581L72.0341 27.128L68.6581 18.84H70.2261L72.7861 25.288H72.8501L75.4741 18.84H77.0421ZM85.2694 26.008C84.5014 26.776 83.6 27.16 82.5654 27.16C81.5307 27.16 80.6347 26.7653 79.8774 25.976H79.8294V30.68H78.3734V18.84H79.6534L79.8294 19.864H79.8774C80.6347 19.0747 81.5307 18.68 82.5654 18.68C83.6 18.68 84.5014 19.064 85.2694 19.832C86.048 20.6 86.4374 21.6293 86.4374 22.92C86.4374 24.2107 86.048 25.24 85.2694 26.008ZM82.3574 20.04C81.3974 20.04 80.5547 20.44 79.8294 21.24V24.6C80.5547 25.4 81.3974 25.8 82.3574 25.8C83.1467 25.8 83.7814 25.5493 84.2614 25.048C84.7414 24.5467 84.9814 23.8373 84.9814 22.92C84.9814 22.0027 84.7414 21.2933 84.2614 20.792C83.7814 20.2907 83.1467 20.04 82.3574 20.04ZM88.6111 19.288C89.5391 18.8827 90.5311 18.68 91.5871 18.68C92.6538 18.68 93.4698 18.9893 94.0351 19.608C94.6005 20.2267 94.8831 20.968 94.8831 21.832V27H93.6031L93.4271 25.976H93.3791C92.6111 26.7653 91.6245 27.16 90.4191 27.16C89.6938 27.16 89.0751 26.9413 88.5631 26.504C88.0618 26.0667 87.8111 25.4693 87.8111 24.712C87.8111 23.9547 88.1205 23.3413 88.7391 22.872C89.3685 22.4027 90.2858 22.168 91.4911 22.168H93.4271V22.04C93.4271 21.336 93.2511 20.8293 92.8991 20.52C92.5578 20.2107 91.9605 20.056 91.1071 20.056C90.2538 20.056 89.4538 20.2373 88.7071 20.6H88.6111V19.288ZM93.4271 24.68V23.336H91.6831C90.0725 23.336 89.2671 23.7627 89.2671 24.616C89.2671 25.4587 89.8325 25.88 90.9631 25.88C91.4325 25.88 91.8858 25.768 92.3231 25.544C92.7605 25.3093 93.1285 25.0213 93.4271 24.68ZM98.9261 15.32V27H97.4701V15.32H98.9261ZM105.877 19.288C106.805 18.8827 107.797 18.68 108.853 18.68C109.919 18.68 110.735 18.9893 111.301 19.608C111.866 20.2267 112.149 20.968 112.149 21.832V27H110.869L110.693 25.976H110.645C109.877 26.7653 108.89 27.16 107.685 27.16C106.959 27.16 106.341 26.9413 105.829 26.504C105.327 26.0667 105.077 25.4693 105.077 24.712C105.077 23.9547 105.386 23.3413 106.005 22.872C106.634 22.4027 107.551 22.168 108.757 22.168H110.693V22.04C110.693 21.336 110.517 20.8293 110.165 20.52C109.823 20.2107 109.226 20.056 108.373 20.056C107.519 20.056 106.719 20.2373 105.973 20.6H105.877V19.288ZM110.693 24.68V23.336H108.949C107.338 23.336 106.533 23.7627 106.533 24.616C106.533 25.4587 107.098 25.88 108.229 25.88C108.698 25.88 109.151 25.768 109.589 25.544C110.026 25.3093 110.394 25.0213 110.693 24.68ZM121.056 20.84C120.266 20.3067 119.408 20.04 118.48 20.04C117.562 20.04 116.842 20.3067 116.32 20.84C115.797 21.3627 115.536 22.056 115.536 22.92C115.536 23.784 115.797 24.4827 116.32 25.016C116.842 25.5387 117.562 25.8 118.48 25.8C119.408 25.8 120.266 25.5333 121.056 25H121.12V26.376C120.234 26.8987 119.312 27.16 118.352 27.16C117.168 27.16 116.16 26.776 115.328 26.008C114.496 25.24 114.08 24.2107 114.08 22.92C114.08 21.6293 114.496 20.6 115.328 19.832C116.16 19.064 117.168 18.68 118.352 18.68C119.312 18.68 120.234 18.9413 121.12 19.464V20.84H121.056ZM129.634 20.84C128.845 20.3067 127.986 20.04 127.058 20.04C126.141 20.04 125.421 20.3067 124.898 20.84C124.375 21.3627 124.114 22.056 124.114 22.92C124.114 23.784 124.375 24.4827 124.898 25.016C125.421 25.5387 126.141 25.8 127.058 25.8C127.986 25.8 128.845 25.5333 129.634 25H129.698V26.376C128.813 26.8987 127.89 27.16 126.93 27.16C125.746 27.16 124.738 26.776 123.906 26.008C123.074 25.24 122.658 24.2107 122.658 22.92C122.658 21.6293 123.074 20.6 123.906 19.832C124.738 19.064 125.746 18.68 126.93 18.68C127.89 18.68 128.813 18.9413 129.698 19.464V20.84H129.634ZM131.268 22.92C131.268 21.6507 131.641 20.6267 132.388 19.848C133.135 19.0693 134.121 18.68 135.348 18.68C136.585 18.68 137.577 19.0693 138.324 19.848C139.081 20.6267 139.46 21.6507 139.46 22.92C139.46 24.1893 139.081 25.2133 138.324 25.992C137.577 26.7707 136.585 27.16 135.348 27.16C134.121 27.16 133.135 26.7707 132.388 25.992C131.641 25.2133 131.268 24.1893 131.268 22.92ZM133.508 25.112C134.041 25.592 134.66 25.832 135.364 25.832C136.068 25.832 136.681 25.592 137.204 25.112C137.737 24.6213 138.004 23.8907 138.004 22.92C138.004 21.9387 137.737 21.208 137.204 20.728C136.681 20.248 136.068 20.008 135.364 20.008C134.66 20.008 134.041 20.248 133.508 20.728C132.985 21.208 132.724 21.9387 132.724 22.92C132.724 23.8907 132.985 24.6213 133.508 25.112ZM144.298 27.16C143.413 27.16 142.714 26.8613 142.202 26.264C141.69 25.6667 141.434 24.92 141.434 24.024V18.84H142.89V23.864C142.89 25.1653 143.477 25.816 144.65 25.816C145.578 25.816 146.453 25.304 147.274 24.28V18.84H148.73V27H147.45L147.274 25.976V25.736H147.242C146.378 26.6853 145.397 27.16 144.298 27.16ZM155.696 18.68C156.581 18.68 157.28 18.9787 157.792 19.576C158.304 20.1733 158.56 20.92 158.56 21.816V27H157.104V21.976C157.104 20.6747 156.517 20.024 155.344 20.024C154.416 20.024 153.541 20.536 152.72 21.56V27H151.264V18.84H152.544L152.72 19.864V20.104H152.752C153.616 19.1547 154.597 18.68 155.696 18.68ZM165.318 20.088H162.998V24.92C162.998 25.368 163.121 25.6453 163.366 25.752C163.569 25.8373 163.83 25.88 164.15 25.88C164.47 25.88 164.822 25.7947 165.206 25.624H165.318V26.808C164.87 27.0427 164.39 27.16 163.878 27.16C162.321 27.16 161.542 26.456 161.542 25.048V20.088H160.022V19.992L162.998 17.08V18.84H165.318V20.088Z" fill="#0F0426"/>
                                    <rect x="12" y="4" width="24" height="36" fill="url(#pattern0)"/>
                                    <rect x="0.5" y="0.5" width="180" height="42" stroke="#B8A7A7" stroke-opacity="0.5"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="translate(-0.0105581 -0.254237) scale(0.015083 0.00997009)"/>
                                    </pattern>
                                    <image id="image0" width="270" height="153" xlink:href="data:image/jpeg;base64,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"/>
                                    </defs>
                    </svg>
                <table v-if="user.bank.length>0" style="margin-top:25px" class="table table-responsive-sm">
                    <thead>
                    <tr class="table-bg">
                        <th>Date</th>
                        <th>Payment voucher</th>
                        <th>Status</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody >
                    <tr v-for="(grid,index) in user.bank[0].retiros" :key="index">
                        <td>{{grid.created_at}}</td>
                        <td v-if="grid.estado==='verificado'"><a href="#" @click.prevent="mostrarmodal2(grid)">View Detail</a></td>
                        <td v-else></td>
                         <td>{{grid.estado}}</td>
                        <td>{{grid.amount}}$</td>
                    </tr>
                
                    </tbody>
          
                </table>
            <div v-if="user.matriz.length===0" class="row">
                <div class="col-sm-12 col-md-10 offset-md-1">
                      <a href="/grid-confirm-payment"><img  width="100%" src="/img/hora-de-impulsar-tu-negocio.png" alt="hora-de-impulsar-tu-negocio"></a>
                </div>
               
            </div>
        
        
        </section>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header " style="border:none">
                                <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle"><strong>Cambiar Ruta </strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4" style="border:none">
                                <form @submit.prevent="solicitarretiro()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" v-model="solicitud.email" name="email">
                                    </div>
                                     <div class="form-group">
                                        <label for="email">Amount</label>
                                        <input type="number" class="form-control" v-model="solicitud.amount" name="amount">
                                    </div>
                                    <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> cancelar</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Procesando' : 'Solicitar Retiro'">
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
                <div v-if="soldSelected" class="modal fade" id="checksold" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div :style="soldSelected.img_deposito ? 'background-image: url(/storage/'+soldSelected.img_deposito+');' : 'background-color: #b7b4be4f;'" class="modal-header">
                                 <div class="updateFoto2" ></div>
                               
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              
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
    export default {
        name:"profile-user",
        props:['user','retirovalue'],
        data() {
            return {
                selectedtag: "mygrid",
                secondtag: "earnings",
                mygrids:[],
                estadoproceso:false,
                solicitud:{
                    email:"",
                    amount:0.00
                },
                retiroSelected:null,
                soldSelected:null,
            }
        },
        computed: {
            soldgrips() {
                var sold = 0;
                if (this.user.matriz.length>0) {
                    this.user.matriz.forEach(e => {
                        sold=sold+e.bloques.length;
                    })
                }
                return sold;
            },
        },
        methods: {
            seleccionar(tag) {
                this.selectedtag=tag;
            },
            seleccionardos(tag) {
                this.secondtag=tag;
            },
            solicitarretiro(){
                this.estadoproceso=true;
                if (this.solicitud.amount >=this.retirovalue.value && this.solicitud.amount<=this.user.bank[0].available) {
                    var url="/home/solicitud";
                    axios.post(url,{
                        email:this.solicitud.email,
                        amount:this.solicitud.amount,
                        user_banks_id:this.user.bank[0].id
                    }).then((result) => {
                        window.location.reload();
                    }).catch((err) => {
                        console.log(err);
                    });
                }else{
                    console.log('imposible realizar transaccion');
                    this.estadoproceso=false;
                }
                
            },
             mostrarmodal2(retiro){
                if(retiro){
                    this.retiroSelected=retiro;
                }
                setTimeout(function(){
                $("#check").modal("show");
                },200)
            },
            
        },
        mounted () {
            if (this.user.matriz.length>0) {
                if (this.user.matriz[0].bloques.length>0) {
                    var grupo = []
                    this.user.matriz[0].bloques.forEach(element => {
                        if (grupo.length===0) {
                            grupo.push(element);
                        }
                        else{
                            if (grupo.some(evt => evt.codigo===element.codigo)) {
                                grupo.push(element);
                             
                            }else{
                         
                                this.mygrids.push(grupo);
                                grupo=[];
                                grupo.push(element);
                            }
                        }
                    });
                    this.mygrids.push(grupo);
                    
                }
            };
        },
    }
</script>

<style lang="scss" scoped>
.modal-dialog{
    max-width: 600px!important;
}
.modal-content{
    border-radius:12px;
}
label{
    font-weight: 100!important;
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