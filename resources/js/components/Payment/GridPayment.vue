<template>
    <div>
        <input type="hidden" name="matriz" :value="JSON.stringify(matrizdin)">
        <input type="hidden" name="value" :value="precio">
        <input v-if="planSelected" type="hidden" :value="planSelected.columns" name="columns" >
        <input v-if="planSelected" type="hidden" :value="planSelected.filas" name="filas" >
        <div>
               <div class="row maxii">
              <div v-for="plan in planes" :key="plan.id"  class="col-sm-12 col-md-12 col-lg-6">
                  <div :class="plan.id===planSelected.id ? 'card-plan planofer' : 'card-plan'">
                      <div class="d-flex justify-content-between">
                          <div>
                              <input  style="margin-left: 3px;" type="radio" v-model="planSelected" name="plan" :value="plan"
                        checked>
                        <label class="plan-name" for="plan">{{plan.name}}</label>
                        <p class="plan-precio2" v-if="plan.estado===1">USD 49,99</p>
                        <p class="plan-precio">USD {{plan.precio}}{{plan.estado===1 ?' NOW':''}}</p>
                          </div>
                          <img v-if="plan.src" :src="plan.src" alt="plan src">
                          <span  v-if="plan.estado===1" class="btn btn-limit">Limited</span>
                      </div>
                       
                        
                        <p class="plan-subname">{{plan.name}} include</p>
                        <p class="inclui" style="margin-left: 18px;"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0.5C3.875 0.5 0.5 3.875 0.5 8C0.5 12.125 3.875 15.5 8 15.5C12.125 15.5 15.5 12.125 15.5 8C15.5 3.875 12.125 0.5 8 0.5ZM11.15 6.725L7.55 10.325C7.25 10.625 6.8 10.625 6.5 10.325L4.85 8.675C4.55 8.375 4.55 7.925 4.85 7.625C5.15 7.325 5.6 7.325 5.9 7.625L7.025 8.75L10.1 5.675C10.4 5.375 10.85 5.375 11.15 5.675C11.45 5.975 11.45 6.425 11.15 6.725Z" fill="#5F01F5"/>
                        </svg>
                        {{Number(plan.columns*plan.filas)}} blocks</p>
                  </div>
               
              </div>
            </div>
        </div>
        <div v-if="planSelected">
           
                 <div class="resumen-card">
                    <h3 class="resumen-order">Order summary</h3>
                    <div style="margin-left:26px;margin-right:26px;" class="d-flex justify-content-between">
                        <span>Grid Value:</span>
                        <span>{{planSelected.precio}}$</span>
                    </div>
                    <div style="margin-left:26px;margin-right:26px;" class="d-flex justify-content-between">
                        <span>Blocks:</span>
                        <span>{{ Number(planSelected.columns*planSelected.filas)}} UND</span>
                    </div>
                     <div style="margin-left:26px;margin-right:26px;" class="d-flex justify-content-between">
                        <span>Total:</span>
                         <span>{{planSelected.precio}}$</span>
                    </div>
                    
                    <div class="centradiv">
                         <input  style="margin-top:45px" class="btn btn-order" type="submit" value="Place order">
                    </div>
                    <br>
                </div>
          

        </div>
       
        
    </div>             
</template>

<script>
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
    export default {
        name:'confirm-payment-grid',
        props:['user','gridvalue','planes'],
        data() {
            return {
                lastFile: null,
                columns:1,
                filas:1,
                estadoprocess:false,
                planSelected:null,
                grip:{
                    src:null,
                },
                bloque:null,
            }
        },
        mounted () {
        var micart = localStorage.getItem('mycart');
         micart = JSON.parse(micart);
         console.log(micart);
         if (micart) {
           this.bloque=micart;
         }
         this.planSelected=this.planes[0];
        },
        computed: {
           matrizdin(){
               var matemp=[];
               var n=0;
               if (this.planSelected!=null) {
                 for (let index = 0; index < Number(this.planSelected.filas); index++) {
                   var filatem = [];
                   for (let j = 0; j < Number(this.planSelected.columns); j++) {
                       filatem.push({numero:j,src:null,n:n});
                       n++;
                   }
                   matemp.push(filatem);
                   
               }

               }
              
               return matemp;
           },
           precio(){
               var pre=0;
               if (this.planSelected!=null) {
                   pre=Number(this.planSelected.precio);
                    if (pre<0) {
                        pre=pre*(-1);
                    }
               }
               
               return pre;
           },
           validando(){
               var valid=false;
               if (Number(this.columns<=0) || Number(this.columns)>100) {
                   valid=true;
                    toastr.info("El maximo permitido es 100 columnas", "GridsTarters:");
               }
                if (this.filas<=0 || this.filas>100) {
                   valid=true;
                   toastr.info("El maximo permitido es 100 filas", "GridsTarters:");
               }
               return valid;
           }
        },
        methods: {
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
            createGrid(){
                this.estadoprocess=true;
                let form = $("#payment-form")[0];
                let formulario = new FormData(form);
                var url = "/create-grid";
                axios.post(url,{
                    user_id:this.user.id,
                    matriz:JSON.stringify(this.matriz),
                }).then((result) => {
                    
                     window.location="/";
                }).catch((err) => {
                    this.estadoprocess=false;
                    console.log(err)
                }); 
            },
            crearposition(){
             this.estadoprocess=true;
             let form = $("#payment-form")[0];
             let formulario = new FormData(form);
             var ruta=`/crear-bloque`;
                axios.post(ruta, formulario)
                  .then((res) => {
                   localStorage.clear();
                   window.location=res.data;
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
.inclui{
    margin-bottom: 10px!important;
  
}
    .centradiv{
        display: flex;
        justify-content: center;
        width: 100%;
        padding-bottom: 15px;
    }
    .maxii{
        width: 100%;
        max-width: 451px;
    }
    .btn-limit{
        width: 65px;
        height: 27px;
        background-color: #5F01F5;
        color: #ffffff;
        border-radius: 4px;
       
        font-size: 12px;
    }
    .btn-order{
        width: 100%;
        max-width: 379px;
        background-color: #5F01F5;
        margin-bottom: 15px!important;
        color: #ffffff;
    }
   
    .resumen-order{
        font-size: 17px;
        margin-top: 22px;
        margin-left: 26px;
    }
    .card-plan{
        width: 107%;
        margin-bottom: 20px;
        max-height: 183px;
        border-radius: 6px;
        padding: 10px;
        border: 1px solid #101521;
    }
    .plan-name{
        color: #000000;
        font-size: 16px;
        font-weight: bold;
    }
    .plan-precio{
        margin-left: 18px;
        color: #5F01F5;
        font-size: 13px;
        margin-top: 0px;
        margin-bottom: 0px;
    }
     .plan-precio2{
         margin-top: 0px;
         margin-bottom: 0px;
        margin-left: 18px;
        text-decoration: line-through;
        color: #000000;
        font-size: 10px;
    }
    .planofer{
        -webkit-box-shadow: 0px 4px 4px 0px #5F01F5; 
box-shadow: 0px 4px 4px 0px #5F01F5;
    }
    .plan-subname{
        color: #000000;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
        margin-left: 20px;
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
     .updateFoto strong{
       width: 100%;

       text-align: center;
   
    }
    .buy-tite{
        color:#5F01F5;
        font-family: 'valera';
        font-size: 20px;
        line-height: 2.6;
        margin-top: 10px;
        font-weight: 700;
    }
    form label, span{
        color:#0F0426;
        font-family: 'Valera';
        font-size:16px;
        line-height: 1.08;
        margin-top: 10px;
        font-weight: 700;
    }
    
    
    .maxi{
        margin-left: 0px;
    }
     @media only screen and (max-width: 768px){
            .maxi{
                margin-left: 15px;
            }
            }
             .resumen-card{
        width: 100%;
        max-width: 451px;
        margin-left:0px;
        border: 1px solid #D1D1D1;
        height: 234px;
        border-radius: 6px;
    }

     @media only screen and (max-width: 767px){
            .padre-content-position{
                display: flex;
                justify-content: space-between;
                width: 100%;
            }
            .content-position:first-child{
                flex-basis: calc(50% - 2rem);
                background-color: #b7b4be4f;
                height: 86px;
                
                max-width: 140px;
                border-radius: 5px;
            }
            .content-position:last-child{
                flex-basis: calc(50% - 2rem);
                background-color: #b7b4be4f;
               
                height: 86px;
                max-width: 140px;
                border-radius: 5px;
            }
            .content-position  label, span{
                font-family: 'valera';
                font-size:14px;
                margin-left: 15px;
                font-weight: 700;
            }
            .preview{
            text-decoration: none;
            background-color: #ffffff;
            border: 1px solid #30019B;
            color:#30019B;
            font-family: 'valera';
            font-size:16px;
            max-width: 100px;
            line-height: 2.08;
            margin-top: 0px;
            margin-top: 20px;
            padding: 0px 20px;
            font-weight: 700;
            border-radius: 5px;
        }
        .padre-pago-descripcion{
            display: flex;
            flex-direction: column-reverse;
        }
        .metod-pay h3{
            margin-top: 20px;
            font-size: 18px;
        }
        .flexi-btn-form{
            display: flex;
            justify-content: space-between;
        }
        .btn-grip{
            font-family: 'Valera';
            background-color:#30019B!important;
            color:#ffffff!important;
            flex-basis: calc(50% - 2rem);
            width: 144px;
            border-radius: 10px!important;
    }
    .btn-cancel{
        font-family: 'Valera';
            background-color:#0f04263f!important;
            color:#ffffff!important;
             flex-basis: calc(50% - 2rem);
            width: 144px;
            border-radius: 10px!important;
    }
    }   
     @media only screen and (min-width: 768px){
          .resumen-card{
        width: 100%;
        max-width: 435px;
        margin-left:0px;
        border: 1px solid #D1D1D1;
   
        height: 234px;
        border-radius: 6px;
    }
            .padre-content-position{
                    display: flex;
                    justify-content: space-between;
                    width: 100%;
                }
            .content-position:first-child{
                background-color: #b7b4be4f;
                height: 86px;
                max-width: 240px;
              
                border-radius: 5px;
            }
            .content-position:last-child{
                background-color: #b7b4be4f;
                height: 86px;
              
                max-width: 240px;
                border-radius: 5px;
            }
            .content-position  label, span{
                font-family: 'valera';
                font-size:16px;
          
                font-weight: 700;
            }
            .preview{
            text-decoration: none;
            background-color: #ffffff;
            border: 1px solid #30019B;
            color:#30019B;
            font-family: 'valera';
            font-size:16px;
            max-width: 100px;
            line-height: 2.08;
            margin-top: 0px;
            padding: 0px 20px;
            font-weight: 700;
            border-radius: 5px;
        }
        .padre-pago-descripcion{
            display: flex;
            flex-direction: column;
            
            
        }
        .btn-grip{
        font-family: 'Valera';
            background-color:#30019B!important;
            color:#ffffff!important;
          
            width: 181px;
            border-radius: 10px!important;
    }
    .btn-cancel{
        font-family: 'Valera';
            background-color:#0f04263f!important;
            color:#ffffff!important;
            width: 144px;
            border-radius: 10px!important;
    }
    }     
</style>