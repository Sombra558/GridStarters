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
                                        <div class=" col-sm-12 col-md-9 d-flex justify-content-md-end justify-content-xl-end">
                                            <p class="grids-descripcion"><strong class="resalte">1.075</strong>  Grids. Leave your mark on the world buying a digital space <strong class="resalte">forever</strong></p>
                                        </div>
                        </div>
                </div>
               
            </div>
             <div class="col-sm-12">
                 <div class="container-fluid">
                       <a style="margin-left:15px;" href="#" @click.prevent="mostrarmodal2()">Config Block Size</a>
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
                                            
                                            <div>
                                                
                                            </div>
                                            <div :style="columna.src ? 'background-image: url(/storage-public/'+columna.src+');' : 'background-color: #FBF9FF;'" @click.prevent="columna.src ? mostrar(columna) :casillaSelected(Number(fila[index].numero),matriz[Number(fila[index].numero)][Number(columna.numero)])" :id="columna.src ? '' : 'bloque-'+fila[index].numero+'-'+columna.numero" class="col color" v-for="(columna,k) in fila" :key="'columna'+k">
                                                
                                            </div>
                                    </div>
                                </th>
                                
                                </tr>
                            
                            </tbody>
                            </table>
                     </div>
                            
                 </div>
              
             <div class="modal fade p-0" id="cambiourl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title w-100 text-center" id="exampleModalLongTitle"> <strong>Config Block Size</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4" style="border:none">
                                    <div class="form-group">
                                        <label for="nombreURL">Columns Size</label>
                                        <input type="number"  min="1" pattern="^[0-9]+" class="form-control" v-model="columntemp"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="nombreURL">Row Size</label>
                                        <input class="form-control"  min="1" pattern="^[0-9]+" type="number" v-model="rowtemp">
                                    </div>
                                    <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close">Cencel</button>
                                        <input type="submit"  @click.prevent="definirsize()" class="btn btn-upgrap col-3" value="Save">
                                    </div>
                                   
                               
                            </div>

                            </div>
                        </div>
                </div>
                      
                  
            </div>
            <div v-if="blockselected" class="modal fade" id="mostrarblock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Visualizar</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <img :src="'/storage/'+blockselected.original" width="100%" height="250px" alt="">
                            </div>

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
                blockselected:null,
                matriz: [],
                columntemp:1,
                rowtemp:1,
                bloqueconfig:{
                    columnasize: 1,
                    filasize:1
                },
                retiroSelected:null,
            }
        },
        mounted() {
            this.matriz=JSON.parse(this.grip.matriz);
        },
        methods: {
             mostrar(block){
                 this.blockselected=block;
                setTimeout(function(){
                $("#mostrarblock").modal("show");
                },200)
            },
             mostrarmodal2(){
    
                   
                   this.bloqueconfig.columnasize=this.columntemp;
                   this.bloqueconfig.filasize=this.rowtemp;
               
                   setTimeout(function(){
                    $("#cambiourl").modal("show");
                    },200)
              
                
            },
            definirsize(){
                 localStorage.clear();
                 if(this.bloqueSelected!=null){
                        document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#FBF9FF';
                         for (let i = 0; i < this.bloqueSelected.filasize; i++) {
                            var bloquetemp=null;
                            for (let j = 0; j < Number(this.bloqueSelected.columnsize); j++) {
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
                    localStorage.clear();
                  
                    if (this.columntemp - Math.floor(this.columntemp) == 0 && this.rowtemp - Math.floor(this.rowtemp)== 0) {
                        if (this.columntemp<43 && this.rowtemp<25) {
                        this.bloqueconfig.columnasize=this.columntemp;
                        this.bloqueconfig.filasize=this.rowtemp;
                            console.log(this.bloqueconfig);
                        setTimeout(function(){
                        $("#cambiourl").modal("hide");
                            },200)
                    }else{
                        console.log('limite superado');
                    }
                    } else {
                        alert ("Es un numero decimal");
                    }
                      
                 
            },
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
                        columna:columna.numero,
                        matriz_id:this.grip.id,
                        url:this.grip.nombreURL,
                        filasize:this.bloqueconfig.filasize,
                        columnsize:this.bloqueconfig.columnasize,
                    }
                    //origem
                    //document.querySelector(`#bloque-${this.bloqueSelected.fila}-${this.bloqueSelected.columna}`).style.backgroundColor = '#D04141';
                    for (let i = 0; i < this.bloqueconfig.filasize; i++) {
                        var bloquetemp=null;
                        var statusblotemp=false;
                        for (let j = 0; j < this.bloqueconfig.columnasize; j++) {
                            bloquetemp={
                                fila:this.bloqueSelected.fila +i,
                                columna: this.bloqueSelected.columna+j,
                                matriz_id:this.grip.id,
                                url:this.grip.nombreURL,
                                filasize:this.bloqueconfig.filasize,
                                columnsize:this.bloqueconfig.columnasize,
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
            var micart = localStorage.getItem('mycartgridstartes');
            if (micart) {
                
                            micart = JSON.parse(micart);
                            micart.push(bloque);
                            localStorage.setItem('mycartgridstartes', JSON.stringify(micart));
                            this.$store.commit("setCart",  micart);
                            console.log('agregado al carrito');
                        
                

                    
                      
                        //localStorage.clear();
                  
            } else {
                var minewcart =[];
                minewcart.push(bloque);
                localStorage.setItem('mycartgridstartes', JSON.stringify(minewcart));
                this.$store.commit("setCart",  minewcart);
                console.log('agregado al carrito');
            }
           
        },
        },
      
    }
</script>
<style scoped>
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