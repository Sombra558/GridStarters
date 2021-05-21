<template>
    <button @click.prevent="gotogrips" id="btn-grids" class="btn btn-upgrap" >
        My Grids
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
            gotogrips() {
                window.location="/home/mygrids";
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