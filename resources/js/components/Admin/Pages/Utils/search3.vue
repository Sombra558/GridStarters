<template>
    <div class="row">
         <div class="col-md-9 input-group input-search ">
                    <input  type="text" class="search-comp" placeholder="  Search" aria-label="Find your creator" aria-describedby="basic-addon1">
                    <button class="icon">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="9.76688" cy="9.76659" r="8.98856" stroke="#30019B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.0186 16.4851L19.5426 20" stroke="#30019B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                                          
         </div>
         
         <div class="col-md-3">
            <button>Descargar</button>
         </div>
       
    </div>
</template>

<script>
    export default {
        name:"search-component",
        props:["accion"],
        mes:null,
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