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