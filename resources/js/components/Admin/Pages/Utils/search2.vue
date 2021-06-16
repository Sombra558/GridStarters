<template>
    <div class="row">
         <div style="margin-bottom:10px;" class="col-sm-12 col-md-8 input-group input-search ">
                    <input  type="text" class="search-comp" v-model="query" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
                 
                                          
         </div>
         <div  class="col-md-4 row justify-content-between">
               <div class="col-6">
            <select  class="form-select form-select-sm selectReporte" aria-label=".form-select-sm example"  v-model="mes">
                <option :value="0">January</option>
                <option :value="1">February</option>
                <option :value="2">March</option>
                <option :value="3">April</option>
                <option :value="4">May</option>
                <option :value="5">June</option>
                <option :value="6">July</option>
                <option :value="7">August</option>
                <option :value="8">September</option>
                <option :value="9">October</option>
                <option :value="10">November</option>
                <option :value="11">December</option>
            </select>
         </div>
         <div class="col-6">
            <select  class="form-select form-select-sm  selectReporte" aria-label=".form-select-sm example"  v-model="tipo">
                <option :value="null">Payment type</option>
                 <option value="Paypal">Paypal</option>
            </select>
         </div>
         </div>
       
       
    </div>
</template>

<script>
    export default {
        name:"search-component",
        props:["accion"],
        computed: {
             query: {
            get() {
                return this.$store.state.filterSales.query;
            },
            set(value) {
                this.$store.commit("setfilterSales", {
                filter: "query",
                value,
                });
            },
            },
            mes: {
            get() {
                return this.$store.state.filterSales.mes;
            },
            set(value) {
                this.$store.commit("setfilterSales", {
                filter: "mes",
                value,
                });
            },
            },
             tipo: {
            get() {
                return this.$store.state.filterSales.tipo;
            },
            set(value) {
                this.$store.commit("setfilterSales", {
                filter: "tipo",
                value,
                });
            },
            },
        },
    }
</script>

<style lang="scss" scoped>
.search-comp{
    width:100%;
    height: 44px;
    max-width: 609px;
    background-color: #2f019b0e;
    border: none;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}
.icon{
    background-color: #2f019b0e;
    -webkit-border-top-right-radius: 8px;
    border:none;
            -webkit-border-bottom-right-radius: 8px;
            -moz-border-radius-topright: 8px;
            -moz-border-radius-bottomright: 8px;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
}

 ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #5F01F5!important;
        font-weight: bold;
        margin-left: 15px;
        opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #5F01F5!important;
            margin-left: 15px;
            font-weight: bold;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #5F01F5!important;
            margin-left: 15px;
            font-weight: bold;
        }
       select::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #5F01F5!important;
        font-weight: bold;
        margin-left: 15px;
        opacity: 1; /* Firefox */
        }

        select:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #5F01F5!important;
            margin-left: 15px;
            font-weight: bold;
        }

        select::-ms-input-placeholder { /* Microsoft Edge */
            color: #5F01F5!important;
            margin-left: 15px;
            font-weight: bold;
        }
       .selectReporte{
           width: 100%;
           max-width: 234px;
           height: 44px;
            background-color: #2f019b0e;
            border: none;
            border-radius: 8px;
             color: #5F01F5!important;
             font-weight: bold;
       }
</style>