<template>
    <div class="container-fluid">
            <br>
         
            <h2>my boards</h2>
          <table style="margin-top:25px: width:100%" class="table table-responsive">
                    <thead>
                    <tr class="table-bg">
                        <th>Date</th>
                        <th>detail</th>
                        <th>Available</th>
                        <th>Sold</th>
                        <th>Action</th>
                        <th>Public Grid</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(grid,index) in user.matriz" :key="index">
                        <td>{{grid.created_at}}</td>
                        <td><a class="btn btn-upgrap"  :href="'/home/my/'+grid.nombreURL">Go to my board</a></td>
                        <td>{{Number(1075 - grid.bloques.length)}}</td>
                        <td>{{grid.bloques.length}}</td>
                        <td><button type="button" class="btn btn-upgrap" @click.prevent="mostrarmodal2(grid)">
                                Customize link
                            </button></td>
                            <td><a  class="btn btn-upgrap"  :href="'/grid/'+grid.nombreURL">Go</a></td>
                    </tr>
                
                    </tbody>
                </table>
                <div v-if="retiroSelected" class="modal fade" id="cambiourl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="border:none">
                                <h5 class="modal-title  w-100 text-center "  id="exampleModalLongTitle"> <strong>Customize link</strong></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body px-5 py-4">
                                <form @submit.prevent="editarurl()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">link</label>
                                        <input type="text" class="form-control" v-model="retiroSelected.nombreURL"  name="nombreURL">
                                    </div>
                                    <div class="form-group">
                                        <label for="nombreURL">NombreURL</label>
                                        <input disabled class="form-control" type="text" v-model="nombreURL" name="nombreURL">
                                    </div>
                                     <div class="row justify-content-around"> 
                                        <button class="btn col-4" style="border: 1.5px solid #32BAB0; color:#32BAB0; border-radius: 10px!important;"  data-dismiss="modal" aria-label="Close"> cancelar</button>
                                       
                                        <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap col-3" :value="estadoproceso ? 'Procesando' : 'Guardar'">
                                    </div>
                                    
                                </form>
                            </div>

                            </div>
                        </div>
                </div>
    </div>
</template>

<script>
    export default {
        name:"mygrids",
        props:['user'],
        data() {
            return {
                estadoproceso: false,
                nombre:"",
                retiroSelected:null,
            }
        },
        methods: {
            editarurl(){
                var url='/home/editarurl/'+this.retiroSelected.id;
                axios.put(url,{
                    nombreURL:this.nombreURL,
                }).then((result) => {
                    window.location.reload();
                }).catch((err) => {
                    console.log(err);
                });
            },
            mostrarmodal2(retiro){
                if(retiro){
                    this.retiroSelected=retiro;
                }
                setTimeout(function(){
                $("#cambiourl").modal("show");
                },200)
            },
        },
        computed: {
            nombreURL(){
                if (this.retiroSelected) {
                     return this.retiroSelected.nombreURL.replace(/[ _#.$%?¿!¡/\\🔴]/g,"-").normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
                }else{
                    return null;
                }
               
            }
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
</style>