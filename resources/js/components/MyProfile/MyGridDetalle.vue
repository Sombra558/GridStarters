<template>
    <div >
        <div >
            <div class="col-sm-12 menu-secundario ">
                <div class="container-fluid">
                      <div class="row justify-content-md-between">
                                        <div class=" col-sm-12 col-md-3 row">
                                            <div style="margin-left:8px; margin-top:5px;"><img v-if="user.img" class="col avatar" :src="'/storage/'+user.img" alt="user-avatar"><img v-else class="col avatar" src="/img/user/user_min.jpg" alt="user-avatar"></div>
                                            <div style="margin-left:8px; margin-top:5px;">
                                                <strong style="margin:0px;" class="username">{{user.name}}</strong>
                                                <p style="margin:0px;" class="premium">Premium</p>     
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-9 d-flex justify-content-md-end justify-content-xl-end">
                                            <p class="grids-descripcion"><strong class="resalte">{{Number(grip.columns*grip.filas)}}</strong>  Grids. Leave your mark on the world buying a digital space <strong class="resalte">forever</strong></p>
                                        </div>
                        </div>
                </div>
               
            </div>
             <div class="col-sm-12">
                 <div class="container-fluid">
                     <div class="d-flex justify-content-center">
                            <table v-if="user.matriz.length>0" style="padding:0px;"  class="table table-responsive ">
                            <caption >{{user.name}} Grid</caption>
                            <thead >
                                <tr >
                                    <th>
                                    
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">
                                    <div :style="'min-width:'+Number(grip.columns*16)+'px!important; margin-left:'+Number(grip.columns*0)+'px!important;'" class="d-flex maximizando" v-for="(fila,index) in matriz" :key="'fila'+index">
                                            
                                            <div :style="columna.src ? 'background-image: url(/storage-public/'+columna.src+');' : 'background-color: #FBF9FF;'"  :id="'bloque-'+fila[index].numero+'-'+columna.numero" class="color" v-for="(columna,k) in fila" :key="'columna'+k">
                                                
                                             
                                                
                                            </div>
                                    </div>
                                </th>
                                
                                </tr>
                            
                            </tbody>
                            </table>
                            <div v-else>
                                <a href="/confirm-payment">crear grid</a>
                            </div>
                     </div>
                            
                 </div>
              
 
                      
                  
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['user','grip'],
        data() {
            return {
                bloqueSelected:null,
                matriz: [],
                bloqueconfig:{
                    columnasize: 1,
                    filasize:1
                }
            }
        },
        mounted() {
             this.matriz=JSON.parse(this.grip.matriz);
        },
        methods: {
            casillaSelected(fila,columna) {
                if(this.bloqueSelected!=null){
                     document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#FBF9FF';
                }
                this.bloqueSelected= {
                    fila:fila,
                    columna:columna.numero
                }
                //origem
                 //document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#D04141';
                for (let i = 0; i < this.bloqueconfig.filasize; i++) {
                    var bloquetemp=null;
                    for (let j = 0; j < this.bloqueconfig.columnasize; j++) {
                        bloquetemp={
                            fila:this.bloqueSelected.fila +i,
                            columna: this.bloqueSelected.columna+j
                        }
                        document.querySelector(`#bloque-${this.bloqueSelected.fila +i}-${this.bloqueSelected.columna+j}`).style.backgroundColor = '#D04141';
                        this.addToCart(bloquetemp);
                    }
                }
               
                //this.addToCart(this.bloqueSelected);
                //document.querySelector(`#bloque-${fila}-${columna+1}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila}-${columna+2}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+1}-${columna}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+1}-${columna+1}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+1}-${columna+2}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+2}-${columna}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+2}-${columna+1}`).style.backgroundColor = "green";
                //document.querySelector(`#bloque-${fila+2}-${columna+2}`).style.backgroundColor = "green";
            },
              addToCart(bloque){
            
            var micart = localStorage.getItem('mycart');
            if (micart) {
                
                            micart = JSON.parse(micart);
                            micart.push(bloque);
                            localStorage.setItem('mycart', JSON.stringify(micart));
                            console.log('agregado al carrito');
                        
                

                    
                      
                        //localStorage.clear();
                  
            } else {
                var minewcart =[];
                minewcart.push(bloque);
                localStorage.setItem('mycart', JSON.stringify(minewcart));
                console.log('agregado al carrito');
            }
           
        },
        },
      
    }
</script>
<style scoped>
 .btn-upgrap14{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            min-width: 220px;
            height: 38px;
            border-radius: 10px!important;
            }
.modal-dialog{
    max-width: 600px!important;
}
.modal-content{
    border-radius:12px;
}
.menu-secundario{
    background-color: #ffffff;
    width: 100%;
}
label{
    font-weight: 100!important;
}
  @media only screen and (max-width: 768px) {
            .grids-descripcion{
                margin-top: 20px;
                text-align: center;
                font-size: 14px;
            }
            .resalte{
                font-size: 16px;
                line-height: 23,7px;
                font-weight: 700;
                color: #30019B;
            }
        } 
     @media only screen and (min-width: 769px) {
             .grids-descripcion{
                width: 500px;
                margin-top: 0px;
                 font-size: 16px;
                text-align: end;
            }
            .resalte{
                font-size: 20px;
                line-height: 23,7px;
                font-weight: 700;
                color: #30019B;
            }
        }
   .avatar{
       width: 85px;
       height: 53px;
       border-radius: 50%;
   }
   p{
       font-family: 'Valera';
       font-size: 20px;
       line-height: 23,7px;
       font-weight: 500;
   }
   .username{
       font-family: 'Rubik';
       font-size: 20px;
       line-height: 23,7px;
       font-weight: bold;
   }
   .premium{
       background:linear-gradient(90deg, rgba(95,1,245,1) 4.66%, rgba(50,186,176,1) 45.34%);
       -webkit-background-clip: text;
       color: transparent;
       margin-top: -10px!important;
       font-family: 'Rubik';
       font-weight: 300!important;
   }
    .table thead th {
        vertical-align: bottom;
        border-bottom: none!important;
    }
    .table th, .table td {
        padding: 0rem;
        vertical-align: top;
        border-top:  none!important;
    }
    .color{
        background-color: #FBF9FF;
        margin:0.5px;
        height: 16px;
        width:16px!important;
        max-height: 16px;
        max-width:16px!important;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid grey;  
    }
    .color:hover{
        background-color: #5F01F5;
    }
  
    @media only screen and (max-width: 767px) {
            .maximizando{
               margin-left: 270px;
                
        }
    }
 
     @media only screen and (min-width: 768px) {
             .maximizando{
                margin-left: 105px;
                
        }
        }
    .flexiando{
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .img-grid{
        background-repeat: no-repeat;
        background-size: contain;

        background-position: center center;
    }
    .drag-selector__item.selected {
            background-color: #D04141;
        }
</style>