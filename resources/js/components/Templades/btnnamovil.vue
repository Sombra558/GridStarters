<template>
    <button class="btn row align-items-center d-md-none "  :disabled="cart.length===0"  @click.prevent="gotobuy">
        <strong style="color:#30019B; font-size:18px;">Go to store</strong>
    </button>
</template>

<script>
import { mapState } from "vuex";
    export default {
        name:"navbar-detalle",
        data() {
            return {
                
            }
        },
        methods: {
           gotobuy() {
                if (this.cart.length===Number(this.filas*this.columnas)) {
                     window.location="/confirm-payment";
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
                return arreglo.length;
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
                return arreglo.length;
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>