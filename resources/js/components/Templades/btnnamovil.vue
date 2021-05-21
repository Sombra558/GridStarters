<template>
 <a class="btn btn-upgrap2 d-md-none"  :disabled="cart.length===0"  @click.prevent="gotobuy"><svg xmlns="http://www.w3.org/2000/svg" width="23.133" height="12" viewBox="0 0 23.133 20.563">
                                    <path id="shopping-cart-solid" d="M21.21,12.1l1.9-8.354a.964.964,0,0,0-.94-1.177H6.394L6.026.771A.964.964,0,0,0,5.082,0H.964A.964.964,0,0,0,0,.964v.643a.964.964,0,0,0,.964.964H3.77L6.592,16.363a2.249,2.249,0,1,0,2.693.344H17.7a2.248,2.248,0,1,0,2.554-.418l.222-.975a.964.964,0,0,0-.94-1.177H8.76L8.5,12.852H20.27A.964.964,0,0,0,21.21,12.1Z" fill="#fff"/>
                                </svg></a>

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
                if (this.cart.length===0) {
                    console.log('selecione casilla')
                }else{
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
        },
    }
</script>

<style lang="scss" scoped>

</style>