<template>
    <div>
        <h2 class="subtitleadmin">Public content</h2>
        <Search />
        <br>
        
             <table class="table">
                    <thead>
                    <tr class="table-bg">
                        <th>Full Name</th>
                        <th>File</th>
                        <th>Publication Date</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item,index) in filteredPublics" :key="index">
                        <td>{{item[0].user.name}}</td>
                        <td><a @click.prevent="mostrarmodal(item[0].img)" href="#">View File</a></td>
                        <td>{{item[0].created_at}}</td>
        
                    </tr>
                
                    </tbody>
            </table>
            <div class="modal fade" id="checkimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Ver Imagen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img height="400px" width="100%" :src="'/storage/'+fileSelected" alt="imagen selectad">
                            </div>

                            </div>
                        </div>
                </div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import Search from './Utils/search';
    export default {
        name:"public-content-component",
        props:['matrices'],
        data() {
            return {
                bloks: [],
                fileSelected:null,
            }
        },
        components: {
            Search,
        },
        computed: {
         ...mapGetters(["filteredPublics"]),
        },
         mounted () {
            if (this.matrices.length>0) {
                console.log('entro 1');
                this.matrices.forEach(matriz=> {
                      if (matriz.bloques.length>0) {
                        var grupo = []
                        matriz.bloques.forEach(element => {
                            if (grupo.length===0) {
                                grupo.push(element);
                            }
                            else{
                                if (grupo.some(evt => evt.codigo===element.codigo)) {
                                    grupo.push(element);
                                    console.log('coincide');
                                }else{
                                    console.log('no coincide');
                                    this.bloks.push(grupo);
                                    grupo=[];
                                    grupo.push(element);
                                }
                            }
                        });
                        this.bloks.push(grupo);
                    
                }
                });
                 this.$store.commit("setPublics", this.bloks);
            };
        },
        methods: {
             mostrarmodal(src){
                if(src){
                    this.fileSelected=src;
                }
                setTimeout(function(){
                $("#checkimg").modal("show");
                },200)
            },
        },
    }
</script>

<style lang="scss" scoped>
     .subtitleadmin{
        font-family: 'Rubik';
        font-size: 20px;
        color:#5F01F5;
    }
    .table-bg{
        background-color: #0f042613;
    }
    .table-width{
        min-width: 875px;
    }
</style>