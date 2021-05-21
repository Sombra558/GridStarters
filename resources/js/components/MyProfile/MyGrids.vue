<template>
    <div class="container-fluid">
          <table style="margin-top:25px: width:100%" class="table table-responsive">
                    <thead>
                    <tr class="table-bg">
                        <th>Date</th>
                        <th>detalles</th>
                        <th>Public Url</th>
                        <th>Private Url</th>
                        <th>Available</th>
                        <th>Sold</th>
                        <th>Accion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(grid,index) in user.matriz" :key="index">
                        <td>{{grid.created_at}}</td>
                        <td><a :href="'/home/my/'+grid.nombreURL">View Detail</a></td>
                        <td>www.gridstarters.com/{{grid.nombreURL}}</td>
                        <td>www.gridstarters.com/my-{{grid.nombreURL}}</td>
                        <td>{{Number(1075 - grid.bloques.length)}}</td>
                        <td>{{grid.bloques.length}}</td>
                        <td><button type="button" class="btn btn-upgrap" data-toggle="modal" data-target="#exampleModalLong">
                                Cambiar Url
                            </button></td>
                    </tr>
                
                    </tbody>
                </table>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Cambiar Ruta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form @submit.prevent="editar()" id="form-comprobante" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombreURL">Nombre de la ruta</label>
                                        <input type="text" class="form-control" v-model="nombre" name="nombreURL">
                                    </div>
                                    <div class="form-group">
                                        <label for="nombreURL">NombreURL</label>
                                        <input disabled class="form-control" type="text" v-model="nombreURL" name="nombreURL">
                                    </div>
                                    <input type="submit" :disabled="estadoproceso" class="btn btn-upgrap" :value="estadoproceso ? 'Procesando' : 'Guardar'">
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
                nombre:""
            }
        },
        computed: {
            nombreURL(){
                return this.nombre.replace(/[ _#.$%?¿!¡/\\🔴]/g,"-").normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>