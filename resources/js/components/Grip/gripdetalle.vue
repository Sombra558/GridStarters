<template>
 
        <div>
            <div class="col-sm-12 menu-secundario ">
                <div class="container-fluid">
                      <div class="row justify-content-md-between">
                                        <div class=" col-sm-12 col-md-3 row">
                                            <div style="margin-left:8px; margin-top:5px;"><img class="col avatar" src="/img/user/user_min.jpg" alt="user-avatar"></div>
                                            <div style="margin-left:8px; margin-top:5px;">
                                                <strong style="margin:0px;" class="username">{{grip.user.name}}</strong>
                                                <p style="margin:0px;" class="premium">Premium</p>     
                                            </div>
                                        </div>
                                        <div class=" col-sm-12 col-md-9 d-flex justify-content-md-end justify-content-xl-end">
                                            <p class="grids-descripcion"><strong class="resalte">1.075</strong>  Grids. Leave your mark on the world buying a digital space <strong class="resalte">forever</strong></p>
                                        </div>
                        </div>
                </div>
               
            </div>
             <div class="col-sm-12">
                 <div class="container-fluid">
                     <div class="d-flex justify-content-center">
                            <table style="padding:0px;"  class="table table-responsive ">
                            <caption >{{grip.user.name}} Grid</caption>
                            <thead >
                                <tr >
                                    <th>
                                    
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">
                                    <div class="row maximizando enpadre" v-for="(fila,index) in matriz" :key="'fila'+index">
                                            
                                            <div :style="columna.src ? 'background-image: url(/storage-public/'+columna.src+');' : 'background-color: #FBF9FF;'" @click.prevent="casillaSelected(Number(fila[index].numero),matriz[Number(fila[index].numero)][Number(columna.numero)])" :id="columna.src ? '' : 'bloque-'+fila[index].numero+'-'+columna.numero" class="col color" v-for="(columna,k) in fila" :key="'columna'+k">
                                                
                                             
                                                
                                            </div>
                                    </div>
                                </th>
                                
                                </tr>
                            
                            </tbody>
                            </table>
                     </div>
                            
                 </div>
              
 
                      
                  
            </div>
        </div>

</template>

<script>
    export default {
        props:['grip'],
        data() {
            return {
                bloqueSelected:null,
                matriz: [],
                bloqueconfig:{
                    columnasize: 3,
                    filasize:4
                }
            }
        },
        mounted() {
            this.matriz=JSON.parse(this.grip.matriz);
        },
        methods: {
            casillaSelected(fila,columna) {
                localStorage.clear();
                var validabloque = document.querySelector(`#bloque-${fila}-${columna.numero}`);
                    if (validabloque!=null) {
                        if(this.bloqueSelected!=null){
                        document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#FBF9FF';
                         for (let i = 0; i < this.bloqueconfig.filasize; i++) {
                            var bloquetemp=null;
                            for (let j = 0; j < this.bloqueconfig.columnasize; j++) {
                                var validate2bloque=null;
                                    bloquetemp={
                                        fila:this.bloqueSelected.fila +i,
                                        columna: this.bloqueSelected.columna+j
                                    }
                                    validate2bloque=document.querySelector(`#bloque-${this.bloqueSelected.fila +i}-${this.bloqueSelected.columna+j}`);
                                    if (validate2bloque!=null) {
                                        document.querySelector(`#bloque-${this.bloqueSelected.fila +i}-${this.bloqueSelected.columna+j}`).style.backgroundColor = '#FBF9FF'; 
                                    }

                                    
                            }
                                }
                    }
                    this.bloqueSelected= {
                        fila:fila,
                        columna:columna.numero
                    }
                    //origem
                    //document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#D04141';
                    for (let i = 0; i < this.bloqueconfig.filasize; i++) {
                        var bloquetemp=null;
                        var statusblotemp=false;
                        for (let j = 0; j < this.bloqueconfig.columnasize; j++) {
                            bloquetemp={
                                fila:this.bloqueSelected.fila +i,
                                columna: this.bloqueSelected.columna+j
                            }
                            var tempvalidadebloque=document.querySelector(`#bloque-${this.bloqueSelected.fila +i}-${this.bloqueSelected.columna+j}`);
                            if (tempvalidadebloque!=null) {
                                document.querySelector(`#bloque-${this.bloqueSelected.fila +i}-${this.bloqueSelected.columna+j}`).style.backgroundColor = '#D04141';
                                this.addToCart(bloquetemp);
                            }else{
                                statusblotemp=true;
                                break;
                            }
                        }
                        if (statusblotemp===true) {
                            localStorage.clear();
                            var cart = [];
                            this.$store.commit("setCart",  cart);
                            break;
                        }
                    }
                }else{
                    console.log('error selected bloque este bloque no es seleccionable')
                }
                
            },
              addToCart(bloque){
            //localStorage.clear();
            var micart = localStorage.getItem('mycart');
            if (micart) {
                
                            micart = JSON.parse(micart);
                            micart.push(bloque);
                            localStorage.setItem('mycart', JSON.stringify(micart));
                            this.$store.commit("setCart",  micart);
                            console.log('agregado al carrito');
                        
                

                    
                      
                        //localStorage.clear();
                  
            } else {
                var minewcart =[];
                minewcart.push(bloque);
                localStorage.setItem('mycart', JSON.stringify(minewcart));
                this.$store.commit("setCart",  minewcart);
                console.log('agregado al carrito');
            }
           
        },
        },
      
    }
</script>
<style scoped>
.menu-secundario{
    background-color: #ffffff;
    width: 100%;
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
    .enpadre:last-child{
         border-bottom: 1px solid grey;
    }
    .color{
        background-color: #FBF9FF;
        height: 25px;
        width:25px;
           background-repeat: no-repeat;
        background-size: 100% 100%;
        border-top: 1px solid grey;
        border-left: 1px solid grey;
    }
    .color:first-child{
        background-color: #FBF9FF;
           background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 25px;
        width:25px;
    }
    .color:last-child{
        background-color: #FBF9FF;
        height: 25px;
           background-repeat: no-repeat;
        background-size: 100% 100%;
        width:25px;
     
        border-right: 1px solid grey;
        
    }
    .color:hover{
        background-color: #D04141;
    }
    .maximizando{
        margin-left: 15px;
        min-width: 1260px;
    }
    @media only screen and (max-width: 1394px) {
            .maximizando{
            margin-left: 15px;
            min-width: 1395px;
        }
        }
     @media only screen and (min-width: 1395px) {
             .maximizando{
                margin-left: 15px;
                min-width: 1260px;
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
   
</style>