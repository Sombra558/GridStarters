<template>
    <button :disabled="cart.length===0"  @click.prevent="gotobuy" id="btn-buy" class="btn btn-upgrap nav-item" >
        <svg xmlns="http://www.w3.org/2000/svg" width="23.133" height="12" viewBox="0 0 23.133 20.563">
         <path id="shopping-cart-solid" d="M21.21,12.1l1.9-8.354a.964.964,0,0,0-.94-1.177H6.394L6.026.771A.964.964,0,0,0,5.082,0H.964A.964.964,0,0,0,0,.964v.643a.964.964,0,0,0,.964.964H3.77L6.592,16.363a2.249,2.249,0,1,0,2.693.344H17.7a2.248,2.248,0,1,0,2.554-.418l.222-.975a.964.964,0,0,0-.94-1.177H8.76L8.5,12.852H20.27A.964.964,0,0,0,21.21,12.1Z" fill="#fff"/>
        </svg>{{action==='movil' ? '' : 'Buy'}}
    </button>
</template>

<script>
import { mapState } from "vuex";
import toastr from "toastr";
import 'toastr/build/toastr.min.css';
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
                         var ordenado=this.cart.sort(function(a, b) {
                            return a.n - b.n;
                        });
                        this.$store.commit("setCart",  ordenado);

                         
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