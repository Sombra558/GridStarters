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
                                        </div>
                                        <div style="margin-top:5px;" class="col-sm-12 col-md-3 d-flex justify-content-md-end justify-content-xl-end"><a class="btn btn-upgrap14" href="#" @click.prevent="limpiar()" >
clear selection</a></div>
                                        <div class="col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-xl-end">
                                            <p class="grids-descripcion"><strong class="resalte">1.075</strong>Grids. Leave your mark on the world buying a digital space <strong class="resalte">forever</strong></p>
                                        </div>
                        </div>
                </div>
            </div>
             <div class="col-sm-12">
                 <div class="container-fluid">            
                     <div style="width:100%!important" c>
                                <table style="padding:0px;"  class="table table-responsive d-flex justify-content-center">
                                          
                                            <thead >
                                                <tr >
                                                    <th>
                                                    
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <th scope="row">
                                                    <drag-selector v-bind:style="{cursor: selectedCursor}" v-model="checkedList" @change="handleDragSelectorChange" class="drag-selector">
                                                                <div class="row maximizando enpadre" v-for="(fila,index) in matriz" :key="'fila'+index">
                                                                    
                                                                        <drag-selector-item v-for="(columna,k) in fila" :style="columna.src ? 'background-image: url(/storage-public/'+columna.src+');' : ''" :key="'columna'+k"
                                                                        :value="{identificador:String(index)+String(columna.numero),fila:index,columna:columna.numero,matriz_id:grip.id,nombreURL:grip.nombreURL}" 
                                                                        class="col color" 
                                                                       :id="columna.src ? '' : 'bloque-'+fila[index].numero+'-'+columna.numero">
                                                    
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
                                <img :src="'/storage/'+blockselected.original" width="100%" height="250px" alt="">
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
                selectedCursor: `url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='32px' height='32px' viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve'%3E %3Cpath d='M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4 L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1 c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1 c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z'/%3E %3C/svg%3E"), pointer`,
            
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
                                            console.log('limpoa caro');
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
        margin:2px;
        height: 25px;
        width:20px;
        max-height: 25px;
        max-width:20px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid grey;  
    }
    .color:hover{
        background-color: #5F01F5;
    }
    .maximizando{
        margin-left: 15px;
          width: 100%!important;
    }
    @media only screen and (max-width: 1394px) {
            .maximizando{
            margin-left: 15px;
              width: 100%!important;
        }
        }
     @media only screen and (min-width: 1395px) {
             .maximizando{
                margin-left: 15px;
                width: 100%!important;
               
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