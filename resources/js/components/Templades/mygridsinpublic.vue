<template>
    <button @click.prevent="gotogrips" id="btn-grids" class="btn btn-upgrap nav-item" >
        My boards
    </button>
</template>

<script>
import { mapState } from "vuex";
    export default {
        name:"navbar-detalle",
        props:['user'],
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

<style scoped>
 .btn-upgrap{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            width: 100%;
            min-width: 150px;
            border-radius: 10px!important;
            }
</style>