<template>
 
        <div class="row">
         <div class="mt-2 col-sm-12 col-md-9 " v-if="accion==='Solds'">
                    <input  v-model="user" type="text" class="search-comp" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
               
                                          
         </div>
          <div class="mt-2 col-sm-12 col-md-9 " v-else>
                    <input  v-model="retiro" type="text" class="search-comp" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
               
                                          
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
                return this.$store.state.filterSold.query;
            },
            set(value) {
                this.$store.commit("setfilterSold", {
                filter: "query",
                value,
                });
            },
            },
             retiro: {
            get() {
                return this.$store.state.filterRetiros.query;
            },
            set(value) {
                this.$store.commit("setfilterRetiros", {
                filter: "query",
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