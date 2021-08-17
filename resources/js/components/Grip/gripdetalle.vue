<template>
        <div>
            <div class="col-sm-12 menu-secundario ">
                <div class="container-fluid">
                      <div class="row justify-content-md-between">
                                        <div class=" col-sm-12 col-md-3 row">
                                            <div style="margin-left:8px; margin-top:5px;"><img v-if="grip.user.img" class="col avatar" :src="'/storage/'+grip.user.img" alt="user-avatar"><img v-else class="col avatar" src="/img/user/user_min.jpg" alt="user-avatar"></div>
                                            <div style="margin-left:8px; margin-top:5px;">
                                                <strong style="margin:0px;" class="username">{{grip.user.name}}</strong>
                                                <p style="margin:0px;" class="premium">Premium</p>   
                                                     
                                            </div>
                                            <div style="margin-top:5px; margin-left:15px;">
                                                         <a class="btn btn-upgrap14" href="#" @click.prevent="limpiar()" >clear selection</a>
                                                </div>  
                                        </div>
                                   
                                        <div class="col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-xl-end">
                                            <p class="grids-descripcion"><strong class="resalte">{{Number(grip.columns*grip.filas)}}</strong> Blocks. Leave your mark on the world buying a digital space <strong class="resalte">forever</strong></p>
                                        </div>
                        </div>
                </div>
            </div>
             <div  style="margin-top:10px;" class="col-sm-12">
                 <div class="container-fluid">            
                     <div style="width:100%!important;" class="d-flex justify-content-center m-0" >
                                <table style="padding:0px;margin:0px;"  :class="Number(grip.columns)<24 ? 'table table-responsive': 'table table-responsive'">
                                          
                                            <thead >
                                                <tr >
                                                    <th>
                                                    
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th >
                                                    <drag-selector v-model="checkedList" @change="handleDragSelectorChange" class="drag-selector">
                                                                <div :style="'min-width:'+Number(grip.columns*16)+'px!important; margin-left:'+Number(grip.columns*0)+'px!important;'" class="d-flex maximizando" v-for="(fila,index) in matriz" :key="'fila'+index">
                                                                    
                                                                        <drag-selector-item v-for="(columna,k) in fila" :style="columna.src ? 'background-image: url(/storage-public/'+columna.src+');' : ''" :key="'columna'+k"
                                                                        
                                                                        :value="{url:columna.url,src:columna.original,n:columna.n,identificador:String(index)+String(columna.numero),fila:index,columna:columna.numero,matriz_id:grip.id,nombreURL:grip.nombreURL}" 
                                                                        class="color" 
                                                                       :id="columna.src ? '' : 'bloque-'+index+'-'+columna.numero">
                                                    
                                                                        </drag-selector-item>
                                                                </div>
                                                    </drag-selector>
                                                </th>
                                                </tr>
                                            </tbody>
                                </table>
                         
                     </div>     
                 </div>   
            </div>
            <div v-if="blockselected" class="modal fade" id="mostrarblock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                 <a :href="blockselected.url" target="_blank" rel="noopener noreferrer">
                                <img :src="'/storage/'+blockselected.src" width="100%" height="250px" alt="">
                                 </a>
                               
                                
                            </div>

                            </div>
                        </div>
            </div>
        </div>

</template>

<script>
import { mapState } from "vuex";
import DragSelector from './DragSelector';
import DragSelectorItem from './DragSelectorItem';
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
    export default {
        props:['grip'],
        components: {
             DragSelector,DragSelectorItem
        },
        data() {
            return {
                bloqueSelected:null,
                blockselected:null,
                matriz: [],
                columntemp:1,
                rowtemp:1,
                retiroSelected:null,
                checkedList: [],
                selectedCursor: `url("/img/puntero/cohete.svg"), pointer`,
            
            }
        },
        computed: {
            ...mapState({
                cart: (state) => state.cart,
            }),
        },
        mounted() {
            this.matriz=JSON.parse(this.grip.matriz);
            localStorage.clear();

        },
        methods: {
            limpiar(){
                 this.cart.forEach(element => {
                          if (document.querySelector(`#bloque-${element.fila}-${element.columna}`)) {
                              console.log('limpia');
                            document.querySelector(`#bloque-${element.fila}-${element.columna}`).style.backgroundColor = '#FBF9FF';
                          }
                 });
                  var micart = localStorage.getItem('mycartgridstartes');
                        if (micart) {
                                            console.log('limpoa caro');
                                            micart = JSON.parse(micart);
                                            micart=[];
                                            localStorage.setItem('mycartgridstartes', JSON.stringify(micart));
                                            this.$store.commit("setCart",  micart);
                                            localStorage.clear();
                                            //window.location.reload();
                        }
            },
            handleDragSelectorChange(checkedList) {
                
              this.cart.forEach(element => {
                  if (document.querySelector(`#bloque-${element.fila}-${element.columna}`)) {
                      document.querySelector(`#bloque-${element.fila}-${element.columna}`).style.backgroundColor = '#5F01F5';
                  }else{
                      this.cart.forEach(element => {
                          if (document.querySelector(`#bloque-${element.fila}-${element.columna}`)) {
                              console.log('limpia');
                            document.querySelector(`#bloque-${element.fila}-${element.columna}`).style.backgroundColor = '#FBF9FF';
                          }
                        });
                        var micart = localStorage.getItem('mycartgridstartes');
                                if (micart) {
                                            this.mostrar(element);
                                            micart = JSON.parse(micart);
                                            micart=[];
                                            localStorage.setItem('mycartgridstartes', JSON.stringify(micart));
                                            this.$store.commit("setCart",  micart);
                                            
                                            localStorage.clear();
                                            toastr.info("imposible de seleccionar si ya el bloque esta siendo usado", "GridsTarters:");
                                            //window.location.reload();
                                }
                            }
                   
                  
              });
                
                
            },
             mostrar(block){
                 this.blockselected=block;
                setTimeout(function(){
                $("#mostrarblock").modal("show");
                },200)
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
        margin:1.2px;
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