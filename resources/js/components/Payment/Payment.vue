<template>
                        <div>
                        <input type="hidden" name="cart" :value="JSON.stringify(bloque)">
                        <input type="hidden" name="size" :value="columnas+'x'+filas">
                        <input type="hidden" name="matriz_id" :value="bloque[0].matriz_id">
                        <input type="hidden" name="column" :value="columnas">
                        <input type="hidden" name="fila" :value="filas">
                        <div class="form-groud">
                             <label for="img-grip">Upload your photo or banner</label>
                                <div :style="grip.src ? 'background-image: url('+grip.src+');' : 'background-color: #b7b4be4f;'" @click="bannerChangeProfPicture()" class="updateFoto">
                                        <div>
                                            
                                        </div>
                                <strong style="color:grey!important">Upload File</strong>
                                   
                                </div>
                                <span style="font-size:12px!important">Please upload jpg, jpeg or png</span>
                            <input style="opacity:0" class="d-block" id="ProfImgChangeInput" name="img" type="file" accept=".jpg,.jpeg,.png" @change="fileSelected">
                        </div>
                        <div class="form-groud">
                             <label for="img-grip">Link your website</label>
                             <input type="text" class="form-control" name="url">
                        </div>
                        <div class="row">
                            <span style="margin-left:0px" class="col-sm-12 col-md-9">
                                No. of grids that you would like to block
                            </span>
                 
                        </div>
                        <div style="margin-top:20px;" class="padre-content-position">
                            <div class="col-6 content-position">
                                <label class="d-block" for="column">Column</label>
                                <span v-if="bloque===null" style="color:grey!important">No. Column</span>
                                <span v-else style="color:grey!important">{{columnas}}</span>
                            </div>
                            <div class="col-6 content-position">
                                <label class="d-block" for="row">Row</label>
                                <span  v-if="bloque===null" style="color:grey!important" >No. row</span>
                                <span v-else style="color:grey!important">{{filas}}</span>
                            </div>
                            
                        </div> 
                          <div class="flexi-btn-form">
                            <input :disabled="lastFile===null ? true : false" style="margin-top:65px" class="btn btn-grip" @click.prevent="comprar()"  type="button" value="Save & pay">
                            <input @click.prevent="cancel()" style="margin-top:65px" class="btn btn-cancel" type="button" value="Cancel">
                        </div>           
                        </div>
                       
                        
                  
               
</template>

<script>
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
    export default {
        name:'confirm-payment',
        props:['user'],
        data() {
            return {
                lastFile: null,
                estadoprocess:false,
                grip:{
                    src:null,
                },
                bloque:null,
            }
        },
        mounted () {
        var micart = localStorage.getItem('mycartgridstartes');
         micart = JSON.parse(micart);
    
         if (micart) {
           this.bloque=micart.sort(function(a, b) {
              return a.n - b.n;
            });
         }
        },
        computed: {
            columnas() {
                var arreglo=[];
                if (this.bloque.length>0) {
                    this.bloque.forEach(element => {
                        if (arreglo.length>0) {
                                if (arreglo.some(evt => evt === element.columna)==false) {
                                    arreglo.push(element.columna);
                                }
                        }else{
                            arreglo.push(element.columna);
                        }
                    });  
                }
                return arreglo.length;
            },
            filas() {
                var arreglo=[];
                if (this.bloque.length>0) {
                    this.bloque.forEach(element => {
                        if (arreglo.length>0) {
                                if (arreglo.some(evt => evt === element.fila)==false) {
                                    arreglo.push(element.fila);
                                }
                        }else{
                            arreglo.push(element.fila);
                        }
                    });  
                }
                return arreglo.length;
            }
        },
        methods: {
            cancel(){
                window.location= `/grid/${this.bloque[0].nombreURL}`;
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
            createGrid(){
                this.estadoprocess=true;
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
             if (this.lastFile!=null) {
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
             }
             
            },
             comprar() {
                const mercadoPagoForm = document.getElementById("comprar");
                var fileName = document.getElementById("ProfImgChangeInput").value;
                var idxDot = fileName.lastIndexOf(".") + 1;
                var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
                if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
                          mercadoPagoForm.submit();
                }else{
                      toastr.info("Only jpg/jpeg and png files are allowed!", "GridsTarters:");
                   
                }   
                
              
            
            },
        },
    }
</script>

<style lang="scss" scoped>
    .updateFoto{
        background-color: #b7b4be4f;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 89px;
        border-radius: 5px;
        background-repeat: no-repeat;
        background-size: 420px 100%;
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