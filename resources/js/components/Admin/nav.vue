<template>
    <div :class="{'mostrar' : stateMenu}" class="fondo" >
        <br>
        <div class="row m-0 align-items-center d-md-none">
            <img class="img-perfil" v-if="user.img" :src="'/storage/'+user.img" alt="avatar">
             <img class="img-perfil" v-else src="/img/user/user_min.jpg" alt="avatar">
            <div style="margin-top:15px" class="col-8">
                <div class="nombreuser">{{user.name}}</div>
                <span class="rol">Admin</span>
            </div>
        </div>
        <ul class="items-de-sidebar p-0">
                <li class="row mx-0 justify-content-center">
                    <div style="width:165px" class="col-ms-12">
                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.839 5.65899C18.509 6.17799 18.92 6.94899 18.99 7.78799L19 7.98899V16.098C19 18.188 17.349 19.888 15.28 19.998H13.29C12.339 19.979 11.57 19.239 11.5 18.309L11.49 18.168V15.309C11.49 14.998 11.259 14.739 10.95 14.688L10.86 14.678H8.189C7.87 14.688 7.61 14.918 7.57 15.218L7.56 15.309V18.159C7.56 18.218 7.549 18.288 7.54 18.338L7.53 18.359L7.519 18.428C7.4 19.279 6.7 19.928 5.83 19.989L5.7 19.998H3.91C1.82 19.998 0.11 18.359 0 16.298V7.98899C0.009 7.13799 0.38 6.34799 1 5.79799L7.23 0.787988C8.5 -0.221012 10.28 -0.261012 11.589 0.667988L11.75 0.787988L17.839 5.65899ZM17.599 16.258L17.61 16.098V7.99799C17.599 7.56899 17.42 7.16799 17.11 6.86899L16.98 6.75799L10.88 1.87799C10.12 1.26799 9.04 1.23899 8.24 1.76799L8.089 1.87799L2.009 6.77899C1.66 7.03799 1.45 7.42799 1.4 7.83799L1.389 7.99799V16.098C1.389 17.428 2.429 18.518 3.75 18.598H5.7C5.92 18.598 6.11 18.449 6.139 18.239L6.16 18.059L6.17 18.008V15.309C6.17 14.239 6.99 13.369 8.04 13.288H10.86C11.929 13.288 12.799 14.109 12.88 15.159V18.168C12.88 18.378 13.03 18.559 13.23 18.598H15.089C16.429 18.598 17.519 17.569 17.599 16.258Z" fill="#0F0426"/>
                    </svg>
                    <a href="/admin" class="pl-3">Home</a>
                    </div>
                    
                   
                </li>
            <li class="row justify-content-center mx-0">
               <div style="width:165px"  class="col-ms-12">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Iconly/Light/Image">
                            <g id="Image">
                            <path id="Stroke 1" fill-rule="evenodd" clip-rule="evenodd" d="M21.21 7.8992V16.0502C21.21 19.0702 19.32 21.2002 16.3 21.2002H7.65C4.63 21.2002 2.75 19.0702 2.75 16.0502V7.8992C2.75 4.8792 4.64 2.7502 7.65 2.7502H16.3C19.32 2.7502 21.21 4.8792 21.21 7.8992Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path id="Stroke 3" d="M5.28125 16.4309L6.80925 14.8179C7.34025 14.2549 8.22525 14.2279 8.78925 14.7579C8.80625 14.7749 9.72625 15.7099 9.72625 15.7099C10.2813 16.2749 11.1883 16.2839 11.7533 15.7299C11.7903 15.6939 14.0872 12.9079 14.0872 12.9079C14.6792 12.1889 15.7422 12.0859 16.4622 12.6789C16.5102 12.7189 18.6803 14.9459 18.6803 14.9459" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path id="Stroke 5" fill-rule="evenodd" clip-rule="evenodd" d="M10.3127 9.1331C10.3127 10.1021 9.52769 10.8871 8.55869 10.8871C7.58969 10.8871 6.80469 10.1021 6.80469 9.1331C6.80469 8.1641 7.58969 7.3791 8.55869 7.3791C9.52769 7.3801 10.3127 8.1641 10.3127 9.1331Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            </g>
                        </svg>
                        <a href="/admin/public-content" class="pl-3">Public Content</a>
                    </div>
               </li>
            <li class="row justify-content-center mx-0">
                <div style="width:165px"  class="col-ms-12">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Iconly/Light/3 User">
                            <g id="3 User">
                                <path id="Stroke 1" d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.5047 20.3597 8.0557C20.3597 6.6277 19.3187 5.4437 17.9537 5.2197" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path id="Stroke 3" d="M19.7285 14.2503C21.0795 14.4523 22.0225 14.9253 22.0225 15.9003C22.0225 16.5713 21.5785 17.0073 20.8605 17.2813" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path id="Stroke 5" fill-rule="evenodd" clip-rule="evenodd" d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path id="Stroke 7" fill-rule="evenodd" clip-rule="evenodd" d="M11.8864 11.8879C13.9954 11.8879 15.7054 10.1789 15.7054 8.06891C15.7054 5.95991 13.9954 4.24991 11.8864 4.24991C9.77741 4.24991 8.06741 5.95991 8.06741 8.06891C8.05941 10.1709 9.75641 11.8809 11.8584 11.8879H11.8864Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path id="Stroke 9" d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.5047 3.41309 8.0557C3.41309 6.6277 4.45409 5.4437 5.81909 5.2197" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path id="Stroke 11" d="M4.044 14.2503C2.693 14.4523 1.75 14.9253 1.75 15.9003C1.75 16.5713 2.194 17.0073 2.912 17.2813" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </g>
                    </svg>
                    <a href="/admin/users" class="pl-3">Users</a>
                </div>
                </li>
            
            <li class="row justify-content-center mx-0">
                <div style="width:165px"  class="col-ms-12">
               <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2777 12.8892C16.9524 12.8892 17.5188 13.446 17.4156 14.1123C16.8103 18.0323 13.4545 20.9429 9.40717 20.9429C4.92928 20.9429 1.2998 17.3134 1.2998 12.8365C1.2998 9.14812 4.10191 5.71233 7.25665 4.93549C7.93454 4.76812 8.62928 5.24496 8.62928 5.94286C8.62928 10.6713 8.78823 11.8944 9.68612 12.5597C10.584 13.225 11.6398 12.8892 16.2777 12.8892Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6921 8.9516C20.7458 5.91371 17.0142 1.01687 12.4669 1.10108C12.1132 1.10739 11.83 1.40213 11.8142 1.75476C11.6995 4.25266 11.8542 7.4895 11.9406 8.95687C11.9669 9.41371 12.3258 9.77266 12.7816 9.79897C14.29 9.88529 17.6448 10.0032 20.1069 9.63055C20.4416 9.58003 20.6869 9.2895 20.6921 8.9516Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>


                <a href="/admin/sales" class="pl-3">Sales</a>
                </div>
                </li>

            <li class="row justify-content-center mx-0">
               <div style="width:165px"  class="col-ms-12">
                <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.24512 13.7815L8.23825 9.89131L11.6524 12.5732L14.5815 8.79291" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="17.9954" cy="3.20024" r="1.9222" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.9248 2.12015H5.65704C2.6456 2.12015 0.77832 4.25287 0.77832 7.26431V15.3467C0.77832 18.3581 2.60898 20.4817 5.65704 20.4817H14.2612C17.2726 20.4817 19.1399 18.3581 19.1399 15.3467V8.30779" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <a href="/admin/reports" class="pl-3">Reports</a>
               </div>
                </li>

                 <li class="row justify-content-center mx-0">
                    <div style="width:165px"  class="col-ms-12">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.875 5.46875H3.125C2.69353 5.46875 2.34375 5.81853 2.34375 6.25V18.75C2.34375 19.1815 2.69353 19.5312 3.125 19.5312H21.875C22.3065 19.5312 22.6562 19.1815 22.6562 18.75V6.25C22.6562 5.81853 22.3065 5.46875 21.875 5.46875Z" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16.4062 16.4062H19.5312" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.7188 16.4062H13.2812" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2.34375 9.45819H22.6562" stroke="#0F0426" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                <a href="/admin/withdrawal" class="pl-3">Withdrawal</a>
                    </div>
                </li>
                   <li class="row mx-0 justify-content-center">
                       <a class="text-white salir" href="/logout"
                            @click.prevent="logout()">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="2.5em" height="2.5em" style="-ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g class="icon-tabler" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"/><path d="M7 12h14l-3-3m0 6l3-3"/></g></svg>
                        </a>
                </li>
                

        </ul>
      
    </div>
</template>

<script>
import { mapState } from "vuex";
    export default {
        name:"menu-lateral-estudiante",
        props:['user'],
        computed: {
         ...mapState(["stateMenu"]),
        },
        methods: {
             logout() {
            axios
                .post("/logout")
                .then((res) => {
                

                window.location.href = "/";
                })
                .catch((e) => {
                console.log(e.response);
                });
            },
        },
    }
</script>

<style lang="scss" scoped>
    @media only screen and (max-width: 540px){
    .fondo{
        background: #FBF9FF;
        height:100vh;
        padding: 1rem;
        width:100%;
        max-width: 216px;
        position: fixed;
        z-index: 9;
        transition: 0.3s ease all;
    }}
      @media only screen and (min-width: 541px){
    .fondo{
        background: #FBF9FF;
        height:100vh;
        padding: 1rem;
        width:100%;
        max-width: 216px;
        position: relative;
        z-index: 9;
        transition: 0.3s ease all;
    }}
    .mostrar{
        transform: translateX(0%)!important;
        transition: 0.3s ease all;
    }
    .img-perfil{
        border-radius: 25%;
        max-width: 3rem;
    }
    .nombreuser{
        font-family: 'TitilliumWeb-Regular';
        color:#000000;
        font-size: 18px;
        line-height: 1;
        font-weight: 600;
    }
    .rol{
        font-family: 'TitilliumWeb-Regular';
        color: #000000;
        font-size: 16px;
        line-height: 0;
    }
    .items-de-sidebar{
        list-style:none;
        li{
            margin: 2rem 0;
            a{
                color: #000000;
                 font-size: 16px;
                font-family: 'Valera';
            }
            a:hover{
                color: #000000;
                text-decoration:none;
                
            }
        }
    }
    .salir{
        display: none;
    }
@media only screen and (max-width: 769px){
     .fondo{

        transform: translateX(-100%)
    }
    .salir{
        position: absolute;
        bottom: 2rem;
        display: block;
    }
 }
</style>