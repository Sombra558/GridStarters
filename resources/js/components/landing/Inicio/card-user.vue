<template>

      <div class="card-profile ">
                    <div class="card-header-profile">
                        <div class="card-img-user-profile">
                            <img v-if="user.user.img" :src="'/storage/'+user.user.img" alt="user-img">
                             <img v-else src="/img/user/user_min.jpg" alt="user-img">
                        </div>
                        <div style="margin-left: 10px" class="card-user-data">
                              <h3>{{user.user.name}}</h3>
                              <strong>{{user.bloques.length}} sold</strong>
                        </div>
                      
                    </div>
                    <a :href="'grid/'+user.nombreURL" class="portafolio">
                    <div class="card-profile-img-background">
                          <div :style="'-webkit-animation: 15s colorgroud'+Math.floor(Math.random() * 4) +' infinite;'" :id="'body-user-'+user.id" class="card--profile-body ">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2153 16.0708C20.2153 18.3988 18.3273 20.2855 15.9993 20.2855C13.6713 20.2855 11.7847 18.3988 11.7847 16.0708C11.7847 13.7415 13.6713 11.8548 15.9993 11.8548C18.3273 11.8548 20.2153 13.7415 20.2153 16.0708Z" stroke="#FBF9FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9974 25.8065C21.0747 25.8065 25.7187 22.1559 28.3334 16.0705C25.7187 9.9852 21.0747 6.33453 15.9974 6.33453H16.0027C10.9254 6.33453 6.28141 9.9852 3.66675 16.0705C6.28141 22.1559 10.9254 25.8065 16.0027 25.8065H15.9974Z" stroke="#FBF9FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <a :href="'grid/'+user.nombreURL">
                                visit profile
                            </a>
                        </div>
                    </div>
                    </a>
                  
        </div>

</template>

<script>
    export default {
        props:['user'],
        data() {
            return {
                colors:['#DB88A7b8','#E85F8Fb8','','#30019Bb8','#32BAB0b8'],
                colorselecteone:null,
                colorselectetwo:null,
            }
        },
        mounted () {
           
        },
    }
</script>

<style >
    
@media only screen and (max-width: 767px){
           .card-profile{
                height: 100%;
                min-height: 240px;
            }
            .card-header-profile{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .card-header-profile .card-img-user-profile{
                flex-basis: calc(13% - 5px);
                height: 50px;
                width: 50px;
                border-radius: 50%;
            }
             .card-profile-img-background{
                background: url('/img/card-user-profile.png');
                height: 187px;
                width: 100%;
            }
            .card-header-profile .card-img-user-profile img{
            
                height: 53px;
                width: 53px;
                border-radius: 50%;
            }
            .card-header-profile .card-user-data{
                flex-basis: calc(87% - 5px);
            }
            .card-header-profile .card-user-data h3{
                font-family: 'Rubik';
                font-size: 20px!important;
                font-weight: bold!important;
                margin: 0px;
            }
            .card-header-profile .card-user-data strong{
                font-family: 'Rubik';
                font-size: 16px;
                font-weight: 700;
                color:#5F01F5;
            }
            .card--profile-body{
                height: 187px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
             .card--profile-body a{
                font-family: 'Varela';
                color:#ffffff;
                font-size: 20px;
                font-weight: 700;
                text-decoration: none;
            }
        }  
 @media only screen and (min-width: 768px){
         .card-profile{
                height: 100%;
                min-height: 240px;
            }
            .card-header-profile{
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .card-header-profile .card-img-user-profile{
                flex-basis: calc(13% - 5px);
                height: 50px;
                width: 50px;
                border-radius: 50%;
            }
            .card-header-profile .card-img-user-profile img{
            
                height: 53px;
                width: 53px;
                border-radius: 50%;
            }
            .card-header-profile .card-user-data{
                flex-basis: calc(87% - 5px);
            }
            .card-header-profile .card-user-data h3{
                font-family: 'Rubik';
                font-size: 20px!important;
                font-weight: bold!important;
                margin: 0px;
            }
            .card-header-profile .card-user-data strong{
                font-family: 'Rubik';
                font-size: 16px;
                font-weight: 700;
                color:#5F01F5;
            }
            .card-profile-img-background{
                background: url('/img/card-user-profile.png');
                height: 187px;
                width: 100%;
            }
            .card--profile-body{
                -webkit-transition-duration: 0.9s;
                background: transparent;
                color:#ffffff;
                height: 187px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .card--profile-body a{
                font-family: 'Varela';
                color:#ffffff;
                font-size: 20px;
                text-decoration: none;
            }
        }
 
</style>