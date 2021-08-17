<template>
    <div>
        <input type="hidden" name="matriz" :value="JSON.stringify(matrizdin)">
          <input type="hidden" name="value" :value="precio">
        <div class="form-groud">
            <label for="Columns">Columns</label>
            <input class="form-control" type="text" name="columns" required v-model="columns">
        </div> 
        <div class="form-groud">
            <label for="Filas">Rows</label>
            <input class="form-control" type="text" name="filas" required v-model="filas">
           
        </div> 
        <div>
            <h3>Resumen:</h3>
            <p>Grid Value: {{gridvalue}}$</p>
            <p>Blocks: {{ Number(columns*filas)}}</p>
            <p>Total: {{precio}}$</p>
        </div>
         <input :disabled="validando" style="margin-top:65px" class="btn btn-cancel" type="submit" value="Buy Grid">
    </div>             
</template>

<script>
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
    export default {
        name:'confirm-payment-grid',
        props:['user','gridvalue'],
        data() {
            return {
                lastFile: null,
                columns:1,
                filas:1,
                estadoprocess:false,
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
        },
        computed: {
           matrizdin(){
               var matemp=[];
               var n=0;
               for (let index = 0; index < Number(this.filas); index++) {
                   var filatem = [];
                   for (let j = 0; j < Number(this.columns); j++) {
                       filatem.push({numero:j,src:null,n:n});
                       n++;
                   }
                   matemp.push(filatem);
                   
               }

               return matemp;
           },
           precio(){
               var pre=0;
               pre=Number(this.filas*this.columns)*this.gridvalue;
               if (pre<0) {
                   pre=pre*(-1);
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