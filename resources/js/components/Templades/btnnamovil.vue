<template>
    <button class="btn row align-items-center d-md-none "  :disabled="cart.length===0"  @click.prevent="gotobuy">
        <strong :style="action==='movil' ? 'color:#ffffff; font-size:18px;' : 'color:#30019B; font-size:18px;'">Go to store</strong>
    </button>
</template>

<script>
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
import { mapState } from "vuex";
    export default {
        name:"navbar-detalle",
        props:['action'],
        data() {
            return {
                
            }
        },
        methods: {
           gotobuy() {
                var valid=false;
                var valid2=false;
                for (let index = 0; index < this.filas.length; index++) {
                    if (this.filas[index+1]) {
                        if (Number(this.filas[index]+1)===this.filas[index+1]) {
                            valid=false;
                        }else{
                       
                            valid=true;
                        }
                    }
                    
                }
                 for (let i = 0; i < this.columnas.length; i++) {
                    if (this.columnas[i+1]) {
                        if (Number(this.columnas[i]+1)===this.columnas[i+1]) {
                            valid2=false;
                        }else{
                        
                            valid2=true;
                        }
                    }
                    
                }
               if (valid===true || valid2===true ) {
                    toastr.info("No debe existir bloques vacios entre seleccion", "GridsTarters:");
               }else{
                     if (this.cart.length===Number(this.filas.length*this.columnas.length)) {
                     window.location="/confirm-payment";
                }else{
                    toastr.info("Debe ser una seleccion simetrica", "GridsTarters:");
                }
                  
               }
            }
        },
        mounted () {
            var micart = localStorage.getItem('mycart');
            micart = JSON.parse(micart);
            console.log(micart);
            if (micart) {
             this.$store.commit("setCart",  micart);
            };
        },
        computed: {
            ...mapState({
                cart: (state) => state.cart,
            }),
            columnas() {
                var arreglo=[];
                if (this.cart.length>0) {
                    this.cart.forEach(element => {
                        if (arreglo.length>0) {
                                if (arreglo.some(evt => evt === element.columna)==false) {
                                    arreglo.push(element.columna);
                                }
                        }else{
                            arreglo.push(element.columna);
                        }
                    });  
                }
                return arreglo.sort(function(a, b) {
                    return a - b;
                    });
            },
            filas() {
                var arreglo=[];
                if (this.cart.length>0) {
                    this.cart.forEach(element => {
                        if (arreglo.length>0) {
                                if (arreglo.some(evt => evt === element.fila)==false) {
                                    arreglo.push(element.fila);
                                }
                        }else{
                            arreglo.push(element.fila);
                        }
                    });  
                }
                return arreglo.sort(function(a, b) {
                    return a - b;
                    });
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>