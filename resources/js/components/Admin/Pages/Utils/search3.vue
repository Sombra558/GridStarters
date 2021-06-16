<template>
    <div class="row">
         <div style="margin-bottom:10px;" class="col-md-7 input-group input-search ">
                    <input  type="text" class="search-comp" v-model="query" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
                   
                                          
         </div>
         <div  class="col-md-5 row justify-content-between">
               <div class="col-6">
            <select  class="form-select form-select-sm selectReporte" aria-label=".form-select-sm example"  v-model="reportSelected">
                <option :value="null">Select Report</option>
                 <option v-for="report in filteredSales" :key="report.id" :value="report">{{report.transaction_id}}</option>
               
            </select>
         </div>
         <div class="col-6">
            <button :disabled="reportSelected===null ? true : false" class="btn btn-uggrad" @click.prevent="descargar(reportSelected.transaction_id)">Download</button>
         </div>
         </div>
  
       
    </div>
</template>

<script>
import { mapGetters } from "vuex";
    export default {
        name:"search-component",
        props:["accion"],
        data() {
            return {
                reportSelected: null,
            }
        },
        methods: {
            descargar(codigo) {
                window.location='/admin/reports/'+codigo;
            }
        },
        computed: {
            ...mapGetters(["filteredSales"]),
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
    border-radius: 8px;
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
       .btn-uggrad{
           background-color: #32BAB0;
           color: #ffffff;
           border-radius:8px;
           width: 100%;
           height: 44px;
       }
</style>