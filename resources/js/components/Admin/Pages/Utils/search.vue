<template>
 
        <div class="row">
         <div v-if="accion==='publics'" class="col-sm-12 col-md-9 ">
                    <input  v-model="user" type="text" class="search-comp" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
               
                                          
         </div>
         <div v-if="accion==='publics'" class="col-sm-12 col-md-3">
            <select  class="form-select form-select-sm col-md-5 selectReporte" aria-label=".form-select-sm example"  v-model="mes">
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
          <div v-if="accion==='users'" class="col-sm-12 col-md-9 ">
                    <input  v-model="user2" type="text" class="search-comp" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
               
                                          
         </div>
         <div v-if="accion==='users'" class="col-sm-12 col-md-3">
            <select  class="form-select form-select-sm col-md-5 selectReporte" aria-label=".form-select-sm example"  v-model="mes2">
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
       
        </div>
    
    
</template>

<script>
    export default {
        name:"search-component",
        props:["accion"],
        computed: {
            user: {
            get() {
                return this.$store.state.filterPublics.user;
            },
            set(value) {
                this.$store.commit("setfilterPublics", {
                filter: "user",
                value,
                });
            },
            },
            mes: {
            get() {
                return this.$store.state.filterPublics.mes;
            },
            set(value) {
                this.$store.commit("setfilterPublics", {
                filter: "mes",
                value,
                });
            },
            },
            user2: {
            get() {
                return this.$store.state.filterUsers.user;
            },
            set(value) {
                this.$store.commit("setfilterUsers", {
                filter: "user",
                value,
                });
            },
            },
            mes2: {
            get() {
                return this.$store.state.filterUsers.mes;
            },
            set(value) {
                this.$store.commit("setfilterUsers", {
                filter: "mes",
                value,
                });
            },
            },
        },
    }
</script>

<style lang="scss" scoped>


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
         @media only screen and (max-width: 420px){
             .search-comp{
                width:100%;
                height: 44px;
                max-width:330px;
                background-color: #2f019b0e;
                border: none;
                border-radius: 8px;
                margin-bottom: 10px;
            }
       
             .selectReporte{
                width: 100%;
                min-width: 323px;
                height: 44px;
                    background-color: #2f019b0e;
                    border: none;
                    border-radius: 8px;
                    color: #5F01F5!important;
                    font-weight: bold;
            } 
         }
         @media only screen and (min-width: 421px){
             .search-comp{
                width:100%;
                height: 44px;
                max-width: 609px;
                background-color: #2f019b0e;
                border: none;
                border-radius: 8px;
                
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
         }
      
</style>