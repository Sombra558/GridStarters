<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#30019B">
    <meta name="msapplication-navbutton-color" content="#30019B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#30019B">

    <title>Gridstarters</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
     .flexi-user-auth{
           display: flex;
           flex-direction:column;
           justify-content:center;
       }
       .flexi-user-auth a{
           text-decoration:none;
           font-family: 'Valera';
           font-size:16px;
           font-weight:400;
           color:#ffffff;
       }
       .flexi-user-auth span{
           text-decoration:none;
           font-family: 'Valera';
           font-size:16px;
           color:#9DD5A8;
           font-weight:400;
       }
       .avatar{
           width:46px;
           height:46px;
           border-radius:200px;
       }
     .lindeando:hover{
            text-decoration:none;
            color:#ffffff;
        }
      ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: grey!important;
        opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: grey!important;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: grey!important;
        }
        .bg-millonario{
            background: rgb(95,1,245);
            background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(48,1,155,1) 100%);
        }
        
        @font-face {
            font-family: 'Valera';
            src: url('/fonts/Valera/Varela-Regular.ttf');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Rubik';
            src: url('../fonts/Rubik/static/Rubik-Bold.ttf');
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }
    
        $font-stack:   'Valera';
        $font-logo:   'Vake', serif;
        $primary-color: #000000;
        body {
            font: 100% $font-stack;
            color: $primary-color;
        }
        @media only screen and (min-width: 768px) and (max-width: 1092px){
            .uploadforever{
            display:none;
        }

        }   
        a:hover{
            color:#fff;
            text-decoration:none
        }
        .uploadforever{
            background-color:#ffffff;
            padding: 8px 15px; 
            color:#5F01F5;
            font-family: 'Rubik';
            border-radius: 5px;
            font-size:16px;
            width:292px;
            font-weight:700;
        }
        .contenedor-detalles{
            background: #0f042658;
           
            width:205px;
            height:41px;
            border-radius: 5px;
           padding: 5px;


        }
        .text-detalle{
            font-family: 'Valera';
            font-weight:700;
            font-size:12px;
            color:#ffffff;
            margin:0;
        }
        .text-detalle-2{
            font-family: 'Valera';
            font-size:16px;
            color:#ffffff;
            margin:0;
        }
     
        @media only screen and (max-width: 767px){
            #btn-buy{
                display:none;
            }
            .btn-upgrap{
                display:none;
            }
            .uploadforever{
            display:none;
        }

            .btn-upgrap2{
            margin-left:20px;
            background-color:#32BAB0!important;
            color:#ffffff!important;
          
            width: 50px;
            border-radius: 10px!important;
            }
            .btn-upgrap3{
                font-family: 'Valera';
                background-color:#32BAB0!important;
                color:#ffffff!important;
                
                width: 120px;
                border-radius: 10px!important;
            }

        }  
        @media only screen and (min-width: 768px){
            .btn-upgrap{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            width: 100%;
            min-width: 150px;
            border-radius: 10px!important;
            }
            .btn-upgrap2{
                display:none;
            }
            .btn-upgrap3{
            display:none;
            }

            } 
        @media only screen and (max-width: 767px){
            .fondo-movil{
                background: rgb(48,1,155);
                background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(15,4,38,1) 100%);
                height:100vh;
            }
           
            .flexi-login{
            display:flex;
            justify-content:center;
            align-items:center;
           
            }
            .fondo-movil-register{
                background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(50,186,176,1) 100%);
                min-height: 850px;
                height:100vh;
            }
            .card-register{
                margin-top:120px;
                background:#ffffff;
                width:100%;
                max-width:443px;
                border: 1px solid #D1D1D1;
                min-height:632px;
                border-radius: 8px;
            }
            .card-register .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-register .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
            }
            .card-register .card-login-title h2::after{
            content: '';
            border-radius: 5px;
            margin-top: .5rem;
            display: block;
            height: 4px;
            width: 188px;
            background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(48,1,155,1) 100%);
            margin-bottom: 1rem;
            }
            .card-login{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                max-width:443px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
            }
            .card-login .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-login .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
            }
            .card-login .card-login-title h2::after{
            content: '';
            border-radius: 5px;
            margin-top: .5rem;
            display: block;

            height: 4px;
            width: 188px;
            background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(219,136,167,1) 100%);
            margin-bottom: 1rem;
            }
            .card-body-login{
                height:100%;
                display:flex;
                justify-content:center;
            }
            .stilashon{
        
                background: #2f019b15;
                border-radius: 5px;
                width:282.65px!important;
            }
            label{
                font-family: 'Valera';
                font-weight: 700;
                color:#000000;

            }
            .forgot{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                color:#5F01F5!important;
                text-decoration:none;
            }
            .forgot:hover{
        
                text-decoration:none;
            }
        
            .btn-login{
                margin-top: 10px;
                background: #30019B;
                width: 100%;
                height: 41px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .btn-register{
                margin-top: 0px;
                background: #B7B4BE;
            
                width: 100%;
                height: 41px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .registernow{
                color:black;
                margin-top:10px;
                text-decoration:none;
                font-size:16px;
                font-family: 'Valera'!important;
                font-weight: 700;
            }
            .registernow:hover{
    
                text-decoration:none;
            
            }
            .img-decoration-login{
            display:none;
            }
            .cohete-login{
                display:none;
            }
            .btn-login-sm{
                margin-top: 10px;
                background-color: #30019B!important;
                width: 100%;
                height: 41px;
                border-radius:10px;
                box-shadow:none;
                border:none;
                color:#ffffff!important;
            }
            .card-reset{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:341px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
            }
            .card-reset .card-reset-title{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
            }
            .card-reset .card-reset-title h2{
                margin-top:39px;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
                text-align:center;
           
            }
            .card-reset .card-reset-title p{
                text-align:center;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                max-width:340px;
                color:#0f042690;
              
            }
            .card-body-reset{
                display:flex;
                justify-content:center;
            }
        }
        @media only screen and (min-width: 768px) and (max-width: 1023px){
            .fondo-movil{
                background: rgb(48,1,155);
                background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(15,4,38,1) 100%);
                height:100vh;
            }
            .fondo-movil-register{
                background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(50,186,176,1) 100%);
                min-height: 650px;
                height:100vh;
            }
            .card-register{
                margin-top:120px;
                background:#ffffff;
                width:100%;
                max-width:443px;
                border: 1px solid #D1D1D1;
                min-height:632px;
                border-radius: 8px;
            }
            .card-register .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-register .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
            }
            .btn-register{
                margin-top: 0px;
                background: #B7B4BE;
            
                width: 100%;
                height: 41px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .card-register .card-login-title h2::after{
            content: '';
            border-radius: 5px;
            margin-top: .5rem;
            display: block;
            height: 4px;
            width: 188px;
            background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(48,1,155,1) 100%);
            margin-bottom: 1rem;
            }
            .flexi-login{
            display:flex;
            justify-content:center;
            align-items:center;
            }
        
            .card-login{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:443px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
            }
            .card-login .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-login .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important; 
            }
            .card-login .card-login-title h2::after{
            content: '';
            border-radius: 5px;
            margin-top: .5rem;
            display: block;

            height: 4px;
            width: 188px;
            background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(219,136,167,1) 100%);
            margin-bottom: 1rem;
            }
            .card-body-login{
                display:flex;
                justify-content:center;
            }
            .stilashon{
        
                background: #2f019b15;
                border-radius: 5px;
                width:282.65px!important;
            }
            label{
                font-family: 'Valera';
                font-weight: 700;
                color:#000000;

            }
            .forgot{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                color:#5F01F5!important;
                text-decoration:none;
            }
            .forgot:hover{
        
                text-decoration:none;
            }
            .btn-login{
                margin-top: 10px;
                background: #30019B;
                width: 100%;
                height: 41px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .registernow{
                color:black;
                margin-top:10px;
                text-decoration:none;
                font-size:16px;
                font-family: 'Valera'!important;
                font-weight: 700;
            }
            .registernow:hover{
                text-decoration:none;
            }
            .img-decoration-login{
            display:none;
            }
            .cohete-login{
                display:none;
            }
            .card-reset{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:443px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
            }
            .card-reset .card-reset-title{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
            }
            .card-reset .card-reset-title h2{
                margin-top:39px;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
                text-align:center;
           
            }
            .card-reset .card-reset-title p{
                text-align:center;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                max-width:340px;
                color:#0f042690;
              
            }
            .card-body-reset{
                display:flex;
                justify-content:center;
            }
        } 
        @media only screen and (min-width: 1024px){
            .fondo-movil-register{
                background-image: url('./img/fondo-register.png');
                background-repeat: no-repeat;
                background-size: 55% 100%;
                background-position: right;
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
            }
            .flexi-login{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .card-login{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:443px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
             }
            .card-login .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-login .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important; 
            }
            .card-login .card-login-title h2::after{
                content: '';
                border-radius: 5px;
                margin-top: .5rem;
                display: block;
                height: 4px;
                width: 188px;
                background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(219,136,167,1) 100%);
                margin-bottom: 1rem;
            }
            .card-body-login{
                display:flex;
                justify-content:center;
            }
            .card-register{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:443px;
                border: 1px solid #D1D1D1;
                min-height:620px;
                border-radius: 8px;
            }
            .card-register .card-login-title{
                margin-top:39px;
                display:flex;
                justify-content:center;
                text-align:center;
            }
            .card-register .card-login-title h2{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
            }
            .card-register .card-login-title h2::after{
                content: '';
                border-radius: 5px;
                margin-top: .5rem;
                display: block;
                height: 4px;
                width: 188px;
                background: linear-gradient(90deg, rgba(95,1,245,1) 0%, rgba(48,1,155,1) 100%);
                margin-bottom: 1rem;
            }
            .card-body-login{
                display:flex;
                justify-content:center;
            }
            .stilashon{
                background: #2f019b15;
                border-radius: 5px;
                width:364px!important;
            }
            label{
                font-family: 'Valera';
                font-weight: 700;
                color:#000000;
            }
            .forgot{
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                color:#5F01F5!important;
                text-decoration:none;
            }
            .forgot:hover{
                text-decoration:none;
            }
            .btn-login{
                margin-top: 10px;
                background: #30019B;
                width: 100%;
                height: 41px;
                padding:0px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .btn-register{
                margin-top: 0px;
                background: #B7B4BE;
            
                width: 100%;
                height: 41px;
                border-radius:12px;
                box-shadow:none;
                border:none;
                color:#ffffff;
            }
            .registernow{
                color:black;
                margin-top:10px;
                text-decoration:none;
                font-size:16px;
                font-family: 'Valera'!important;
                font-weight: 700;
            }
            .registernow:hover{
                text-decoration:none;
            }
            .img-decoration-login{
                margin-top:15px;
                background-image: url('./img/fondo-login.png');
                height: 611px;
                width:100%;
                max-width:609px!important;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                background-position: center center;
                display:flex;
                justify-content:center;
                align-items:center;
        
            }
            .img-decoration-register{
                width:100%;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .cohete-login{
                width:366px;
                height:419px;
            }
            .card-reset{
                margin-top:59px;
                background:#ffffff;
                width:100%;
                min-width:443px;
                border: 1px solid #D1D1D1;
                min-height:512px;
                border-radius: 8px;
            }
            .card-reset .card-reset-title{
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
            }
            .card-reset .card-reset-title h2{
                margin-top:39px;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:24px!important;
                text-align:center;
           
            }
            .card-reset .card-reset-title p{
                text-align:center;
                font-family: 'Valera'!important;
                font-weight: 700;
                font-size:16px!important;
                max-width:340px;
                color:#0f042690;
              
            }
            .card-body-reset{
                display:flex;
                justify-content:center;
            }

            }
        .btn-login-sm{
            margin-top: 10px;
            background-color:#32BAB0!important;
            width: 100%;
            min-width: 104px;
            height: 40px;
            border-radius:12px;
            box-shadow:none;
            border:none;
            color:#ffffff!important;
        }


        @media only screen and (max-width: 767px){
    .cont-menu-mobile{
        height: 100vh;
        width:100%;
        background: #fff;
        position: fixed;
        z-index: 99999999;
        top:0;
        transition: 0.3s ease all;
        transform: translateY(100%);
        overflow: auto;
    }
    .show-menu{
        transition: 0.5s ease all;
        transform: translateY(0%);
        animation: circle 0.5s 
    }
    @keyframes circle {
    0%{
      border-top-left-radius: 10rem;
      border-top-right-radius: 10rem;
    }
    50%{
      border-top-left-radius: 5rem;
      border-top-right-radius: 5rem;
    }
    75%{
      border-top-left-radius: 0rem;
      border-top-right-radius: 0rem;
    }
    100%{
      border-top-left-radius: 0rem;
      border-top-right-radius: 0rem;
    }
  }
  .hidden-menu{
    transition: 0.3s ease all;
    transform: translateY(100%);
  }
  .ocultar-menu{
    position:absolute;
    right:1rem;
    top:1rem;
  }
}
    </style>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


    <nav class="navbar navbar-expand-md navbar-light bg-millonario shadow-sm fixed-top d-md-block d-none">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="171px" heigth="128px" src="/img/logo.png" alt="">
                    
                </a>
                <div>
             
                                <btn-grids-movil-component></btn-grids-movil-component>
                           
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" width="40" height="4" rx="2" fill="#FBF9FF"/>
                <rect x="7" y="11" width="34" height="4" rx="2" fill="#FBF9FF"/>
                <rect y="22" width="41" height="4" rx="2" fill="#FBF9FF"/>
                </svg>
                </button>
                </div>
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  
                    <ul style="width:100%" class="navbar-nav d-flex justify-content-between align-content-center">
                             <li style="margin-top:18px;margin-left:15px" class="nav-item">
                                <span class="uploadforever">$5 Each・Upload A Photo Forever</span>
                            </li>
                           
                            <div style="margin-right:35px;" class="d-flex justify-content-end align-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                    <svg height="42" fill="#fff" viewBox="0 0 512 512" width="42" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/>
                                    </svg>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 0C9.40382 0 0 9.40382 0 21C0 32.5962 9.40382 42 21 42C32.5962 42 42 32.5962 42 21C42 9.40382 32.5962 0 21 0ZM31.5353 16.0677V18.9112C30.1945 18.9116 28.8917 18.6489 27.6631 18.1305C26.873 17.797 26.137 17.3672 25.4637 16.8479L25.4839 25.6001C25.4755 27.5709 24.6958 29.4226 23.2846 30.8173C22.1361 31.9527 20.6809 32.6746 19.1036 32.9083C18.733 32.9632 18.3558 32.9913 17.9744 32.9913C16.2859 32.9913 14.6829 32.4443 13.3717 31.4352C13.1249 31.2452 12.8889 31.0392 12.6642 30.8173C11.1348 29.3057 10.3462 27.2571 10.479 25.1019C10.5803 23.4613 11.2371 21.8968 12.3321 20.6705C13.7808 19.0477 15.8074 18.147 17.9744 18.147C18.3558 18.147 18.733 18.1757 19.1036 18.2305V19.2819V22.2064C18.7522 22.0905 18.3769 22.0268 17.9861 22.0268C16.0063 22.0268 14.4047 23.642 14.4343 25.6232C14.4531 26.8908 15.1455 27.9989 16.1668 28.6097C16.6468 28.8968 17.1989 29.0747 17.7881 29.107C18.2498 29.1323 18.6931 29.068 19.1036 28.9325C20.5181 28.4653 21.5385 27.1367 21.5385 25.5697L21.5431 19.7088V9.00867H25.459C25.4627 9.39668 25.5021 9.77525 25.5753 10.1421C25.8709 11.6269 26.7078 12.9152 27.8727 13.7934C28.8884 14.5595 30.1531 15.0136 31.524 15.0136C31.5249 15.0136 31.5362 15.0136 31.5352 15.0127V16.0677H31.5353Z" fill="#FBF9FF"/>
                                    </svg>
                                    </a>
                                </li>
                                @if(Auth::user() != null)
                                <li  style="margin-top:8px;margin-left:15px;" class="nav-item">
                                        <div class="row contenedor-detalles">
                                            <div class="col-6">
                                                    <h5 class="text-detalle">SOLD</h5>
                                                    <P class="text-detalle-2">{{$grip->bloques->count()}}</P>
                                            </div>
                                            <div class="col-6">
                                                    <h5 class="text-detalle">AVAILABLE</h5>
                                                    <P  class="text-detalle-2">{{1075 - $grip->bloques->count()}}</P>
                                            </div>
                                        </div>
                                </li>
                                @endif
                            
                            </div>
                           
                            

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul  style="min-width:400px!important;" class="navbar-nav justify-content-between">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn-login-sm text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li style="margin-left:5px;" class="nav-item">
                                    <a class="nav-link btn-login-sm text-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <btn-buy-component style="margin-top:15px;"></btn-buy-component>
                                <div class="d-md-none">
                                    <a class="btn btn-upgrap3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                             
                            </li>
                            <li style="min-width:220px;!important" class="nav-item d-flex">
                                                       
                                                        <div class="nav-link text-white ">
                                                                                <div class="row">
                                                                                        <div class="flexi-user-auth">
                                                                                        <a href="/home" class="lindeando">
                                                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                                                        </a>
                                                                                        @if(Auth::user()->roles[0]->name==='Administrator')
                                                                                                <span>{{ Auth::user()->roles[0]->name }}</span>
                                                                                                @else
                                                                                            <a class="lindeando" href="/home/perfil">go to my profile</a>
                                                                                                @endif
                                                                                        </div>
                                                                        
                                                                            
                                                                                </div>
                                                                    </div>
                                                                    <div id="navbarDropdown" class="nav-link text-white " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                            <div class="row">
                                                                                
                                                                                    <div>
                                                                                        @if(Auth::user()->img)
                                                                                        <img style="margin-left:33px" class="avatar" src="/storage/{{Auth::user()->img}}" alt="user-img">
                                                                                        @else
                                                                                        <img style="margin-left:33px" class="avatar" src="/img/user/user_min.jpg" alt="user-img">
                                                                                        @endif
                                                                                    </div>
                                                                        
                                                                            </div>
                                                                    </div>
                                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        
                                                        <div >
                                                            @if(Auth::user()->roles[0]->name === 'Administrator')
                                                            <a class="dropdown-item" href="/admin">
                                                                Admin
                                                            </a>
                                                            @endif
                                                            <a class="dropdown-item" href="/">
                                                                Home
                                                            </a>
                                                            <a class="dropdown-item" href="/home/mygrids">
                                                                My boards
                                                            </a>
                                                            <a class="dropdown-item" href="/home">
                                                                My Account
                                                            </a>
                                                           
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </div>

                                                        </div>
                                                           
                                                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="navbar navbar-expand-md navbar-light  shadow-sm fixed-top p-0 d-block d-md-none w-100">


            <div class="container-fluid">
            <div class="bg-millonario w-100 row justify-content-between m-0  align-items-center">
                <a class="navbar-brand  px-3 col-5" href="{{ url('/') }}">
                    <img width="131px" heigth="88px" src="/img/logo.png" alt="">
                    
                </a>
                
                <ul style="width:100%" class="navbar-nav row m-0 flex-row justify-content-between align-content-center col-6 p-0">
                    <div class="col-7 row align-items-center mx-0 justify-content-center p-0">
                        <h5 class="text-detalle my-0 col-6" style="color:#fff;"><strong>SOLD</strong></h5>
                        <P class="text-detalle-2 my-0 col-6" style="color:#fff; line-height"> {{$grip->bloques->count()}}</P>
                    </div>  
                    <div class="row align-items-center m-0 p-0 col-5">
                        <button  onclick="active()" class="navbar-toggler p-0" style="border:none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" width="40" height="4" rx="2" fill="#FBF9FF"/>
                                <rect x="7" y="11" width="34" height="4" rx="2" fill="#FBF9FF"/>
                                <rect y="22" width="41" height="4" rx="2" fill="#FBF9FF"/>
                            </svg>
                        </button>
                    </div>
                </ul>
            </div>
                
               

            <div class="shadow-lg navbar-collapse cont-menu-mobile pt-5 row flex-column mx-0" id="idsito"  id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <button class="btn ocultar-menu " onclick="cerrar()">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="#626262"><path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8L1.293 2.707a1 1 0 0 1 0-1.414z"/></g></svg>
                    </button>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav align-items-center justify-content-center mt-3 w-100">

                    <!--
                        <div style="margin-right:0px;" class="d-flex justify-content-center align-content-center w-100">
                        @if(Auth::user() != null)
                        <li  style="margin-top:8px; list-style:none" class="nav-item flex-column w-100">
                                <div class="row m-0 flex-column align-items-center">
                                   
                                    <div class="col-6 row align-items-center mx-0 mb-2 justify-content-center">
                                            <h5 class="text-detalle my-0 mx-2" style="color:#30019B;"><strong>AVAILABLE</strong></h5>
                                            <P  class="text-detalle my-0 mx-2" style="color:#30019B;">{{1075 - $grip->bloques->count()}}</P>
                                    </div>
                                </div>
                        </li>
                        @endif
                    </div>
                    -->
                        <svg version="1.1"  width= "16rem" style="margin-top: -7rem;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                            <g transform="translate(0 128)">
                            <path fill="#30019B" d="m895.08 243.85c-0.21 0-0.76 0.03-1.22 0.05s-1.13 0.06-1.48 0.09c-0.34 0.03-0.87 0.08-1.16 0.11-0.3 0.03-0.93 0.1-1.4 0.16s-1.18 0.16-1.56 0.22c-0.39 0.06-1.02 0.16-1.41 0.23-0.38 0.07-1.07 0.2-1.53 0.29-0.45 0.09-1.19 0.24-1.63 0.34-0.45 0.1-1.32 0.31-1.94 0.46-0.62 0.16-1.58 0.41-2.12 0.56s-1.29 0.36-1.65 0.47c-0.37 0.11-1.13 0.34-1.69 0.52-0.55 0.18-1.45 0.48-1.99 0.67s-1.33 0.47-1.75 0.63c-0.43 0.16-1.17 0.45-1.65 0.64-0.49 0.19-1.34 0.54-1.89 0.78s-1.39 0.61-1.85 0.82-1.51 0.71-2.32 1.11-1.83 0.93-2.28 1.17c-0.44 0.24-1.08 0.59-1.42 0.78-0.33 0.19-0.94 0.54-1.35 0.77-0.4 0.24-0.98 0.59-1.29 0.78s-0.82 0.51-1.15 0.72c-0.33 0.2-1.02 0.66-1.55 1.01-0.52 0.35-1.26 0.85-1.63 1.11-0.38 0.27-0.97 0.69-1.31 0.94-0.35 0.26-0.96 0.72-1.37 1.03-0.4 0.31-1.01 0.78-1.35 1.05-0.33 0.27-0.95 0.78-1.38 1.13-0.42 0.36-1.08 0.92-1.45 1.25-0.38 0.33-0.9 0.79-1.17 1.04-0.27 0.24-0.89 0.82-1.39 1.3-0.5 0.47-1.31 1.28-1.8 1.8-0.5 0.52-1.08 1.14-1.31 1.39-0.22 0.25-0.63 0.7-0.89 1.01-0.27 0.3-0.72 0.82-1.01 1.16-0.28 0.33-0.83 1-1.21 1.49-0.39 0.49-0.94 1.18-1.21 1.54l-0.5 0.67-0.97-0.03c-0.54-0.01-1.41-0.03-1.93-0.04-0.55-0.02-1.38-0.01-1.96 0.02-0.55 0.02-1.21 0.05-1.47 0.07s-0.78 0.07-1.17 0.11c-0.38 0.04-0.99 0.11-1.35 0.16-0.35 0.05-1.01 0.16-1.45 0.24-0.45 0.08-1.14 0.21-1.55 0.3-0.4 0.09-1.01 0.24-1.35 0.32-0.33 0.09-0.81 0.22-1.06 0.29-0.24 0.07-0.75 0.23-1.13 0.35-0.37 0.12-0.95 0.31-1.27 0.43-0.33 0.12-0.86 0.32-1.19 0.45s-0.9 0.37-1.27 0.53c-0.38 0.17-0.97 0.44-1.32 0.6-0.34 0.17-0.92 0.46-1.29 0.66-0.37 0.19-0.87 0.47-1.13 0.62s-0.7 0.41-0.97 0.58c-0.28 0.17-1.06 0.67-1.74 1.12-0.69 0.45-1.99 1.3-2.9 1.9s-2.95 1.95-4.54 3c-1.59 1.04-2.99 1.97-3.11 2.06s-0.34 0.27-0.48 0.4c-0.15 0.13-0.4 0.39-0.55 0.58-0.16 0.19-0.37 0.47-0.48 0.63-0.1 0.16-0.27 0.44-0.36 0.63-0.09 0.18-0.23 0.48-0.29 0.65-0.07 0.17-0.17 0.51-0.23 0.74-0.05 0.23-0.12 0.61-0.15 0.83-0.02 0.25-0.03 0.61-0.02 0.95 0.01 0.3 0.05 0.67 0.07 0.83 0.03 0.16 0.09 0.43 0.14 0.6 0.04 0.16 0.13 0.44 0.19 0.61 0.07 0.17 0.18 0.42 0.25 0.57 0.08 0.15 0.2 0.37 0.27 0.49s0.24 0.37 0.38 0.55c0.14 0.19 0.4 0.49 0.58 0.67s0.48 0.45 0.68 0.6c0.2 0.14 0.51 0.35 0.68 0.45 0.18 0.1 0.45 0.23 0.59 0.3 0.15 0.06 0.41 0.16 0.58 0.22 0.17 0.05 1.99 0.49 4.06 0.96s5.91 1.36 8.55 1.96 4.84 1.11 4.88 1.12l0.09 0.03-0.23 0.18c-0.12 0.1-0.44 0.39-0.7 0.64-0.26 0.26-0.61 0.63-0.78 0.82-0.16 0.2-0.43 0.56-0.6 0.8-0.17 0.23-0.44 0.66-0.6 0.93-0.16 0.28-0.38 0.71-0.49 0.96-0.11 0.24-0.28 0.64-0.37 0.89s-0.23 0.74-0.32 1.07c-0.08 0.34-0.19 0.85-0.23 1.12s-0.09 0.77-0.11 1.11c-0.02 0.33-0.03 0.81-0.02 1.06 0.02 0.24 0.05 0.66 0.08 0.91 0.03 0.26 0.1 0.7 0.16 0.99 0.05 0.29 0.16 0.72 0.23 0.96 0.07 0.23 0.19 0.58 0.26 0.77 0.07 0.18 0.2 0.5 0.29 0.7 0.08 0.19 0.16 0.38 0.18 0.4 0.01 0.04-0.13 0.05-0.65 0.05h-0.65l-0.76 0.19c-0.65 0.16-0.82 0.22-1.11 0.37-0.18 0.1-0.59 0.34-0.91 0.53-0.31 0.18-0.82 0.51-1.14 0.72-0.31 0.21-0.82 0.57-1.13 0.8-0.3 0.23-0.75 0.58-0.99 0.77-0.24 0.2-0.63 0.55-0.88 0.77s-0.71 0.67-1.03 0.99c-0.31 0.32-0.7 0.72-0.85 0.89s-0.42 0.5-0.61 0.73-0.49 0.61-0.67 0.85c-0.17 0.23-0.48 0.65-0.67 0.94-0.2 0.28-0.51 0.76-0.69 1.05s-0.48 0.78-0.66 1.09c-0.18 0.32-0.53 0.99-0.79 1.51-0.25 0.51-0.59 1.24-0.74 1.61-0.16 0.38-0.39 0.93-0.5 1.22-0.11 0.3-0.31 0.85-0.43 1.23-0.13 0.37-0.32 1-0.43 1.39-0.11 0.38-0.26 0.97-0.34 1.29s-0.19 0.83-0.25 1.13c-0.06 0.29-0.15 0.78-0.2 1.07-0.05 0.3-0.12 0.79-0.16 1.1s-0.1 0.81-0.13 1.12c-0.03 0.32-0.07 1-0.09 1.52-0.03 0.73-0.03 1.17 0 1.86 0.02 0.51 0.07 1.21 0.11 1.56s0.12 0.86 0.17 1.13c0.04 0.26 0.13 0.68 0.19 0.93s0.19 0.66 0.27 0.92c0.09 0.27 0.23 0.64 0.32 0.84s0.28 0.58 0.42 0.84 0.34 0.59 0.44 0.74 0.23 0.34 0.3 0.42c0.07 0.09 0.16 0.16 0.2 0.16 0.03 0 0.24 0.14 0.45 0.32 0.3 0.25 0.5 0.38 0.87 0.57 0.27 0.14 0.66 0.33 0.88 0.42s0.59 0.24 0.83 0.32c0.24 0.09 0.66 0.22 0.95 0.3s0.76 0.2 1.06 0.26c0.3 0.05 0.74 0.13 0.99 0.16 0.24 0.03 0.71 0.07 1.04 0.09 0.38 0.02 1.01 0.02 1.75 0 0.63-0.02 1.45-0.06 1.82-0.09s0.99-0.09 1.38-0.14 0.9-0.13 1.14-0.17 0.71-0.13 1.06-0.2 0.89-0.19 1.2-0.27c0.32-0.08 0.81-0.2 1.08-0.28 0.28-0.08 0.86-0.27 1.3-0.41 0.43-0.15 1.13-0.4 1.54-0.57 0.42-0.17 0.97-0.4 1.22-0.51 0.26-0.12 0.81-0.38 1.22-0.59 0.42-0.22 1.03-0.54 1.35-0.73 0.33-0.19 0.78-0.46 1.01-0.6 0.23-0.15 0.66-0.43 0.97-0.64 0.3-0.21 0.8-0.57 1.11-0.8s0.74-0.57 0.96-0.74c0.21-0.18 0.6-0.51 0.86-0.74 0.25-0.22 0.7-0.64 0.99-0.93 0.28-0.28 0.72-0.75 0.97-1.04s0.61-0.71 0.79-0.93c0.18-0.23 0.47-0.6 0.64-0.83s0.49-0.69 0.72-1.02c0.22-0.34 0.57-0.9 0.78-1.24 0.21-0.35 0.47-0.83 0.59-1.07 0.12-0.23 0.26-0.57 0.31-0.75l0.1-0.32 0.01-0.98c0.01-0.54 0.02-0.98 0.02-0.98 0.01 0 0.2 0.09 0.42 0.19 0.23 0.11 0.62 0.27 0.88 0.37 0.26 0.09 0.66 0.22 0.9 0.29 0.24 0.06 0.63 0.16 0.88 0.21s0.66 0.11 0.93 0.14 0.86 0.07 1.33 0.08c0.67 0.01 0.95 0.01 1.33-0.04 0.26-0.03 0.69-0.1 0.93-0.15 0.25-0.05 0.63-0.14 0.85-0.2s0.59-0.18 0.83-0.27c0.24-0.08 0.62-0.23 0.85-0.34 0.22-0.1 0.58-0.28 0.8-0.4s0.6-0.35 0.84-0.51c0.25-0.17 0.63-0.44 0.85-0.61 0.21-0.18 0.58-0.51 0.82-0.74s0.57-0.58 0.72-0.76c0.16-0.19 0.3-0.33 0.32-0.32 0.01 0.01 0.9 3.88 1.98 8.6 1.23 5.36 2.01 8.72 2.09 8.95 0.07 0.2 0.21 0.53 0.31 0.73 0.1 0.21 0.28 0.53 0.41 0.72 0.13 0.2 0.35 0.49 0.49 0.66 0.15 0.16 0.42 0.44 0.6 0.6 0.19 0.17 0.5 0.41 0.69 0.53 0.18 0.13 0.51 0.32 0.73 0.43s0.56 0.25 0.76 0.32 0.52 0.16 0.71 0.2c0.27 0.06 0.47 0.08 0.91 0.08 0.31 0 0.76-0.02 1-0.04s0.6-0.07 0.81-0.11 0.54-0.13 0.75-0.2c0.2-0.07 0.5-0.18 0.67-0.26 0.16-0.08 0.4-0.2 0.54-0.28s0.38-0.24 0.54-0.36c0.17-0.11 0.43-0.33 0.6-0.48 0.16-0.14 0.42-0.42 0.57-0.61 0.19-0.22 1.58-2.34 4.09-6.22 2.09-3.23 3.96-6.14 4.16-6.47s0.52-0.88 0.72-1.24c0.2-0.35 0.54-1.01 0.77-1.47 0.23-0.45 0.53-1.08 0.68-1.4 0.14-0.31 0.36-0.84 0.5-1.17 0.13-0.32 0.36-0.89 0.49-1.25 0.14-0.37 0.37-1.02 0.51-1.44 0.14-0.43 0.36-1.14 0.48-1.58 0.13-0.45 0.32-1.16 0.42-1.58 0.1-0.43 0.24-1.1 0.32-1.49 0.08-0.4 0.2-1.09 0.27-1.53 0.07-0.45 0.17-1.16 0.22-1.58 0.05-0.43 0.11-1.1 0.14-1.49 0.03-0.4 0.08-1.21 0.1-1.81 0.03-0.79 0.03-1.4 0-2.28-0.02-0.66-0.04-1.46-0.04-1.78v-0.58l0.74-0.57c0.41-0.31 1.04-0.8 1.4-1.08 0.35-0.29 0.92-0.75 1.25-1.03 0.34-0.28 0.94-0.79 1.33-1.14 0.4-0.34 0.93-0.82 1.19-1.05 0.26-0.24 0.92-0.86 1.47-1.38 0.55-0.53 1.37-1.35 1.83-1.82 0.46-0.48 1.03-1.08 1.28-1.35s0.7-0.77 1.01-1.11c0.31-0.35 0.83-0.96 1.17-1.35 0.33-0.4 0.93-1.12 1.31-1.6 0.39-0.48 0.92-1.16 1.17-1.49 0.26-0.34 0.7-0.94 0.99-1.33 0.29-0.4 0.71-0.99 0.93-1.31 0.23-0.33 0.68-0.98 0.99-1.46 0.32-0.47 0.74-1.11 0.93-1.42 0.19-0.3 0.58-0.92 0.85-1.37 0.28-0.45 0.72-1.2 0.98-1.66 0.26-0.45 0.6-1.06 0.76-1.33 0.15-0.28 0.49-0.91 0.75-1.4 0.26-0.5 0.66-1.26 0.87-1.69 0.22-0.44 0.59-1.19 0.81-1.67 0.23-0.49 0.53-1.14 0.68-1.46 0.14-0.32 0.43-0.97 0.63-1.45 0.21-0.48 0.54-1.29 0.75-1.8 0.2-0.51 0.53-1.34 0.71-1.84 0.19-0.5 0.47-1.27 0.62-1.7 0.15-0.44 0.36-1.05 0.47-1.37 0.1-0.32 0.28-0.86 0.39-1.21 0.11-0.34 0.3-0.97 0.43-1.41 0.13-0.43 0.3-1.06 0.39-1.38 0.09-0.33 0.26-0.98 0.38-1.44 0.12-0.47 0.32-1.27 0.44-1.8 0.12-0.52 0.31-1.43 0.43-2.01 0.11-0.58 0.28-1.44 0.36-1.9 0.07-0.47 0.2-1.24 0.26-1.71 0.07-0.48 0.18-1.3 0.24-1.83 0.06-0.54 0.13-1.26 0.16-1.62s0.07-0.95 0.1-1.31c0.03-0.41 0.05-1.42 0.05-2.63 0-1.3-0.02-2.15-0.05-2.53-0.03-0.32-0.08-0.86-0.12-1.22s-0.12-0.95-0.18-1.31c-0.06-0.37-0.16-0.89-0.21-1.15-0.06-0.27-0.17-0.68-0.24-0.92-0.06-0.24-0.19-0.64-0.28-0.91-0.09-0.26-0.25-0.65-0.34-0.87-0.1-0.22-0.29-0.59-0.42-0.83-0.13-0.25-0.33-0.58-0.44-0.74s-0.3-0.4-0.42-0.54l-0.21-0.26h-0.14c-0.12 0-0.24-0.07-0.84-0.5-0.39-0.27-0.84-0.57-0.99-0.66-0.14-0.09-0.43-0.25-0.64-0.35-0.2-0.1-0.55-0.26-0.77-0.35s-0.58-0.22-0.81-0.3-0.65-0.21-0.94-0.28c-0.28-0.08-0.79-0.2-1.13-0.27-0.33-0.07-0.89-0.16-1.24-0.21-0.34-0.05-0.89-0.12-1.2-0.15-0.32-0.03-0.84-0.07-1.17-0.09s-1.03-0.04-1.56-0.05c-0.54-0.01-1.14-0.01-1.35 0zm1.67 7.79c1.33 0.01 1.9 0.03 2.3 0.07 0.3 0.03 0.74 0.09 0.99 0.13s0.64 0.12 0.87 0.18 0.52 0.15 0.65 0.19c0.12 0.05 0.31 0.13 0.41 0.18 0.14 0.07 0.21 0.14 0.26 0.25 0.05 0.08 0.14 0.29 0.2 0.47 0.07 0.17 0.18 0.53 0.25 0.8 0.07 0.26 0.16 0.66 0.2 0.9 0.04 0.23 0.09 0.64 0.12 0.91s0.07 0.75 0.09 1.08c0.02 0.32 0.04 1.03 0.04 1.56 0 0.54-0.02 1.28-0.04 1.66-0.02 0.37-0.05 0.89-0.07 1.15-0.02 0.25-0.07 0.79-0.11 1.2-0.04 0.4-0.13 1.15-0.2 1.65-0.06 0.51-0.19 1.31-0.26 1.78-0.08 0.48-0.25 1.39-0.38 2.03s-0.33 1.58-0.45 2.08c-0.12 0.51-0.32 1.29-0.43 1.75-0.12 0.45-0.3 1.11-0.4 1.45-0.1 0.35-0.28 0.98-0.41 1.41-0.13 0.42-0.35 1.12-0.49 1.54-0.14 0.43-0.38 1.13-0.53 1.56-0.16 0.44-0.39 1.08-0.52 1.44-0.14 0.36-0.42 1.09-0.64 1.62-0.21 0.54-0.57 1.41-0.8 1.93-0.22 0.52-0.57 1.31-0.78 1.75-0.2 0.45-0.68 1.43-1.06 2.19s-0.83 1.65-1 1.96c-0.17 0.32-0.51 0.92-0.75 1.35-0.23 0.42-0.67 1.18-0.97 1.67-0.29 0.49-0.75 1.23-1 1.64-0.26 0.4-0.65 1-0.87 1.32-0.22 0.33-0.63 0.94-0.93 1.37-0.3 0.42-0.89 1.24-1.32 1.82-0.43 0.57-1.02 1.34-1.31 1.7-0.3 0.37-0.74 0.91-0.99 1.21-0.24 0.29-0.67 0.79-0.95 1.11s-0.77 0.87-1.09 1.22c-0.33 0.36-1.15 1.2-1.82 1.87s-1.52 1.5-1.89 1.83c-0.37 0.34-0.99 0.9-1.38 1.24-0.4 0.35-1.01 0.88-1.37 1.17-0.35 0.3-0.97 0.81-1.38 1.13-0.4 0.32-1.08 0.84-1.5 1.16-0.43 0.33-1.16 0.86-1.63 1.2-0.46 0.33-1.38 0.96-2.05 1.4-0.66 0.44-1.5 0.98-1.86 1.21-0.37 0.22-0.93 0.56-1.24 0.75-0.32 0.19-0.88 0.51-1.24 0.72-0.37 0.21-1.03 0.58-1.48 0.82-0.44 0.24-1.3 0.68-1.9 0.99-0.6 0.3-1.48 0.73-1.96 0.95-0.47 0.22-1.17 0.54-1.56 0.71s-1.04 0.45-1.46 0.62-1.11 0.45-1.54 0.62c-0.44 0.17-1.17 0.45-1.64 0.61-0.46 0.17-1.28 0.45-1.81 0.63-0.54 0.18-1.25 0.41-1.6 0.51l-0.62 0.2-10.03-10.03-10.03-10.03 0.2-0.62c0.1-0.34 0.35-1.12 0.55-1.72 0.21-0.6 0.48-1.39 0.61-1.76 0.14-0.37 0.38-1.01 0.54-1.44 0.17-0.42 0.43-1.09 0.59-1.47 0.16-0.39 0.43-1.04 0.62-1.46 0.18-0.41 0.48-1.09 0.67-1.51 0.19-0.41 0.62-1.29 0.95-1.95 0.33-0.67 0.77-1.52 0.97-1.89 0.2-0.38 0.55-1.02 0.78-1.42 0.22-0.41 0.7-1.22 1.05-1.8s0.84-1.38 1.09-1.78c0.26-0.39 0.72-1.1 1.04-1.58 0.32-0.47 0.79-1.15 1.05-1.51 0.25-0.35 0.69-0.95 0.97-1.33s0.75-0.99 1.04-1.36c0.29-0.38 0.74-0.94 1-1.26s0.76-0.91 1.12-1.33c0.35-0.41 0.87-1 1.15-1.31 0.27-0.31 0.7-0.78 0.95-1.04 0.25-0.27 0.8-0.84 1.22-1.27 0.43-0.43 1.11-1.1 1.51-1.48 0.41-0.38 0.94-0.87 1.17-1.08 0.24-0.21 0.71-0.63 1.04-0.92 0.34-0.29 0.9-0.76 1.24-1.04 0.35-0.29 0.89-0.72 1.21-0.97 0.31-0.25 0.86-0.67 1.22-0.94s0.98-0.73 1.4-1.02c0.41-0.3 1.05-0.74 1.42-0.99s0.98-0.65 1.36-0.9c0.39-0.25 1.04-0.65 1.44-0.9 0.41-0.25 1.05-0.63 1.42-0.84 0.38-0.22 0.99-0.57 1.37-0.78 0.37-0.2 1.08-0.58 1.56-0.83 0.48-0.26 1.24-0.64 1.67-0.85 0.44-0.21 1.12-0.53 1.51-0.72 0.4-0.18 1.05-0.47 1.46-0.65 0.4-0.18 1.12-0.48 1.59-0.68 0.48-0.19 1.22-0.48 1.64-0.64 0.43-0.17 1.17-0.44 1.65-0.61 0.49-0.18 1.28-0.45 1.76-0.61 0.49-0.16 1.24-0.39 1.68-0.53 0.43-0.13 1.1-0.32 1.49-0.43 0.38-0.11 1.2-0.33 1.81-0.48 0.61-0.16 1.41-0.35 1.78-0.43 0.37-0.09 0.97-0.22 1.35-0.29 0.38-0.08 0.99-0.2 1.37-0.27 0.37-0.06 1.04-0.18 1.48-0.25 0.45-0.07 1.11-0.17 1.48-0.22 0.36-0.04 1.04-0.12 1.51-0.17 0.46-0.05 1.08-0.11 1.38-0.13 0.3-0.03 0.75-0.06 1.01-0.07 0.25-0.02 1.26-0.03 2.22-0.02v-0.01zm-11.68 7.04c-0.45-0.01-0.98 0-1.16 0.02s-0.53 0.06-0.79 0.1c-0.25 0.05-0.63 0.12-0.83 0.17-0.21 0.05-0.62 0.17-0.91 0.27-0.3 0.1-0.73 0.27-0.98 0.38-0.24 0.11-0.62 0.29-0.83 0.41-0.22 0.12-0.57 0.34-0.79 0.48s-0.56 0.39-0.75 0.55c-0.2 0.16-0.51 0.43-0.7 0.61-0.19 0.17-0.48 0.47-0.64 0.65-0.17 0.19-0.44 0.52-0.6 0.74-0.17 0.22-0.4 0.56-0.53 0.76-0.12 0.19-0.34 0.58-0.48 0.86s-0.34 0.71-0.44 0.97-0.24 0.67-0.31 0.92c-0.07 0.24-0.17 0.64-0.22 0.88-0.05 0.23-0.11 0.63-0.14 0.87s-0.07 0.68-0.08 0.97c-0.01 0.3-0.01 0.76 0.02 1.07 0.02 0.29 0.07 0.71 0.1 0.91 0.03 0.21 0.09 0.57 0.14 0.79 0.05 0.23 0.18 0.68 0.28 0.99 0.11 0.32 0.28 0.77 0.38 1.01s0.29 0.62 0.42 0.86 0.36 0.61 0.5 0.83c0.15 0.22 0.41 0.58 0.58 0.79 0.17 0.22 0.53 0.61 0.8 0.88 0.27 0.26 0.66 0.63 0.88 0.8 0.21 0.17 0.57 0.43 0.79 0.57 0.22 0.15 0.56 0.36 0.77 0.48 0.2 0.11 0.52 0.27 0.71 0.36s0.55 0.24 0.81 0.34c0.27 0.09 0.7 0.23 0.96 0.3 0.27 0.07 0.67 0.16 0.88 0.2 0.22 0.04 0.54 0.09 0.72 0.11s0.59 0.05 0.9 0.06c0.34 0.01 0.8 0 1.12-0.02 0.31-0.02 0.75-0.07 0.99-0.11s0.61-0.12 0.82-0.17 0.56-0.15 0.77-0.22c0.22-0.06 0.57-0.19 0.78-0.28 0.21-0.08 0.57-0.25 0.81-0.37 0.23-0.12 0.6-0.32 0.82-0.45s0.61-0.41 0.88-0.61c0.33-0.24 0.69-0.56 1.12-0.99s0.74-0.78 0.99-1.12c0.2-0.26 0.47-0.66 0.6-0.88 0.14-0.21 0.35-0.59 0.47-0.84 0.13-0.25 0.3-0.62 0.38-0.83s0.2-0.52 0.25-0.7c0.06-0.18 0.16-0.51 0.21-0.73 0.06-0.23 0.14-0.61 0.18-0.85s0.09-0.65 0.12-0.92c0.02-0.3 0.03-0.76 0.02-1.22-0.02-0.45-0.05-0.93-0.1-1.24-0.04-0.27-0.14-0.77-0.22-1.09-0.08-0.33-0.22-0.79-0.3-1.03-0.09-0.23-0.24-0.61-0.34-0.83-0.09-0.22-0.27-0.57-0.38-0.77-0.11-0.21-0.28-0.49-0.37-0.62-0.09-0.14-0.26-0.39-0.38-0.56-0.12-0.16-0.32-0.42-0.44-0.57-0.13-0.15-0.43-0.48-0.67-0.72s-0.62-0.59-0.85-0.78c-0.23-0.18-0.57-0.44-0.76-0.57-0.18-0.12-0.54-0.34-0.79-0.48s-0.62-0.33-0.82-0.42-0.54-0.23-0.75-0.31-0.58-0.2-0.83-0.27c-0.25-0.06-0.61-0.15-0.81-0.19-0.19-0.04-0.53-0.1-0.75-0.13-0.23-0.03-0.77-0.06-1.23-0.07zm-0.52 7.87c0.07-0.01 0.26 0 0.43 0 0.17 0.01 0.41 0.04 0.53 0.07s0.35 0.1 0.51 0.16 0.4 0.19 0.55 0.29c0.14 0.09 0.34 0.24 0.43 0.32s0.25 0.26 0.36 0.4c0.11 0.15 0.27 0.4 0.35 0.55 0.08 0.16 0.18 0.42 0.22 0.58 0.07 0.24 0.09 0.37 0.09 0.84 0 0.43-0.02 0.62-0.07 0.81-0.04 0.14-0.13 0.39-0.2 0.55-0.08 0.16-0.19 0.37-0.26 0.46-0.06 0.1-0.21 0.27-0.32 0.39-0.11 0.11-0.29 0.28-0.42 0.37-0.12 0.08-0.35 0.22-0.52 0.3s-0.45 0.18-0.62 0.22c-0.26 0.06-0.43 0.08-0.81 0.08-0.4 0-0.54-0.02-0.83-0.09-0.19-0.05-0.46-0.16-0.61-0.23s-0.36-0.2-0.47-0.27c-0.1-0.07-0.28-0.23-0.4-0.34-0.11-0.11-0.28-0.32-0.37-0.46-0.09-0.13-0.21-0.36-0.27-0.49-0.05-0.13-0.13-0.34-0.16-0.45-0.03-0.12-0.07-0.36-0.09-0.53-0.02-0.22-0.02-0.42 0.01-0.65 0.02-0.18 0.08-0.46 0.13-0.62s0.13-0.37 0.18-0.47 0.15-0.27 0.23-0.39 0.21-0.28 0.29-0.37 0.24-0.23 0.36-0.33 0.33-0.23 0.46-0.3 0.35-0.17 0.48-0.22c0.14-0.05 0.35-0.1 0.47-0.12 0.12-0.03 0.27-0.05 0.34-0.06zm-21.47 9.95c-0.61 0-1.19 0-1.28 0.01-0.09 0-0.38 0.04-0.64 0.07-0.27 0.03-0.72 0.09-0.99 0.14-0.28 0.05-0.72 0.15-0.99 0.21-0.27 0.07-0.69 0.19-0.95 0.27-0.26 0.09-0.69 0.24-0.96 0.35-0.27 0.1-0.69 0.29-0.94 0.4-0.24 0.12-0.65 0.33-0.91 0.47-0.25 0.15-0.71 0.43-1.02 0.63-0.31 0.21-0.75 0.53-0.98 0.72-0.24 0.18-0.62 0.52-0.87 0.73-0.24 0.22-0.63 0.61-0.87 0.88-0.24 0.26-0.56 0.63-0.71 0.81-0.15 0.19-0.39 0.52-0.55 0.74s-0.39 0.58-0.53 0.79c-0.14 0.22-0.42 0.74-0.63 1.16-0.21 0.41-0.45 0.94-0.55 1.18-0.09 0.24-0.23 0.62-0.31 0.86s-0.21 0.68-0.29 0.97c-0.07 0.3-0.18 0.75-0.23 1.01s-0.11 0.67-0.14 0.91c-0.03 0.25-0.08 0.72-0.1 1.05-0.02 0.34-0.03 0.88-0.02 1.29 0.02 0.39 0.05 0.92 0.08 1.19s0.08 0.68 0.12 0.92 0.12 0.61 0.17 0.84 0.14 0.59 0.2 0.81c0.06 0.21 0.2 0.64 0.3 0.94 0.11 0.3 0.29 0.75 0.4 1.01 0.11 0.25 0.31 0.66 0.44 0.92s0.38 0.69 0.54 0.95 0.4 0.64 0.54 0.83 0.35 0.48 0.47 0.64c0.13 0.15 0.38 0.45 0.56 0.65 0.18 0.21 0.55 0.59 0.81 0.85 0.26 0.25 0.63 0.59 0.82 0.75s0.5 0.4 0.69 0.54c0.19 0.15 0.48 0.35 0.64 0.46 0.17 0.11 0.46 0.29 0.65 0.4 0.18 0.12 0.52 0.3 0.73 0.42 0.22 0.11 0.58 0.29 0.81 0.39 0.23 0.11 0.67 0.28 0.97 0.4 0.31 0.11 0.75 0.26 0.99 0.33s0.54 0.15 0.66 0.18c0.13 0.04 0.39 0.09 0.57 0.13 0.17 0.04 0.6 0.11 0.95 0.17 0.34 0.05 0.97 0.11 1.4 0.13 0.62 0.03 0.95 0.03 1.53 0 0.41-0.03 0.94-0.07 1.16-0.1 0.23-0.03 0.63-0.09 0.9-0.14s0.68-0.14 0.92-0.2c0.23-0.06 0.65-0.19 0.93-0.27 0.28-0.1 0.69-0.24 0.92-0.33 0.22-0.09 0.69-0.29 1.02-0.46 0.34-0.16 0.79-0.39 1.01-0.52 0.21-0.12 0.59-0.36 0.82-0.52 0.24-0.15 0.59-0.4 0.78-0.54 0.19-0.15 0.47-0.37 0.62-0.5 0.15-0.12 0.44-0.39 0.65-0.58s0.55-0.54 0.76-0.78c0.21-0.23 0.52-0.59 0.69-0.81 0.17-0.21 0.44-0.57 0.59-0.78 0.15-0.22 0.41-0.63 0.59-0.92 0.17-0.28 0.43-0.78 0.59-1.09 0.15-0.32 0.37-0.8 0.48-1.08 0.1-0.28 0.27-0.74 0.36-1.02 0.09-0.29 0.22-0.76 0.29-1.05 0.06-0.28 0.15-0.66 0.18-0.82 0.03-0.17 0.09-0.56 0.13-0.87 0.05-0.37 0.08-0.86 0.09-1.5 0.02-0.61 0.01-1.15-0.02-1.5-0.02-0.29-0.07-0.76-0.11-1.04-0.04-0.27-0.13-0.76-0.2-1.08-0.07-0.31-0.19-0.81-0.28-1.09-0.09-0.29-0.22-0.7-0.3-0.92s-0.22-0.58-0.32-0.79c-0.09-0.22-0.26-0.57-0.37-0.79-0.1-0.22-0.29-0.56-0.41-0.77-0.12-0.2-0.29-0.49-0.38-0.63s-0.3-0.45-0.47-0.68c-0.17-0.24-0.47-0.63-0.66-0.87-0.2-0.23-0.55-0.62-0.78-0.85-0.22-0.24-0.61-0.61-0.86-0.83-0.25-0.21-0.68-0.56-0.96-0.77s-0.74-0.53-1.02-0.71c-0.29-0.17-0.78-0.45-1.09-0.61-0.32-0.17-0.81-0.4-1.1-0.52-0.28-0.12-0.77-0.31-1.09-0.41-0.32-0.11-0.85-0.26-1.18-0.34-0.32-0.08-0.78-0.18-1.02-0.22s-0.63-0.1-0.88-0.13c-0.29-0.04-0.83-0.06-1.56-0.07zm-31.38 6.39c0.04 0 0.06 0 0.06 0.01s-0.11 0.22-0.25 0.46c-0.14 0.25-0.47 0.83-0.73 1.31-0.26 0.47-0.69 1.27-0.96 1.78-0.26 0.5-0.7 1.36-0.97 1.92-0.27 0.55-0.68 1.42-0.91 1.92s-0.64 1.42-0.9 2.04c-0.27 0.61-0.66 1.55-0.86 2.07-0.21 0.53-0.54 1.37-0.72 1.87-0.19 0.5-0.35 0.95-0.36 1.01-0.03 0.08-0.05 0.09-0.12 0.08-0.05-0.01-3.89-0.88-8.53-1.93-4.64-1.06-8.44-1.93-8.44-1.94s0.65-0.44 1.43-0.96c0.79-0.52 2.33-1.53 3.42-2.26 1.1-0.73 2.38-1.57 2.84-1.88 0.47-0.3 1.07-0.7 1.35-0.87s0.75-0.45 1.04-0.62c0.3-0.16 0.78-0.42 1.06-0.57 0.29-0.15 0.77-0.39 1.08-0.53 0.31-0.15 0.73-0.34 0.93-0.42 0.21-0.09 0.64-0.27 0.96-0.39 0.31-0.13 0.89-0.34 1.27-0.47 0.39-0.13 1-0.32 1.37-0.43 0.37-0.1 0.96-0.26 1.33-0.35 0.36-0.09 0.9-0.21 1.2-0.27s0.79-0.15 1.1-0.2c0.3-0.05 0.87-0.13 1.25-0.18 0.39-0.05 0.96-0.11 1.26-0.13 0.31-0.02 0.6-0.05 0.65-0.05 0.05-0.01 0.12-0.01 0.15-0.02zm31.2 1.43c0.32 0 0.71 0.01 0.88 0.03s0.48 0.07 0.68 0.11c0.21 0.05 0.6 0.15 0.86 0.24 0.27 0.08 0.68 0.25 0.92 0.37s0.6 0.32 0.81 0.46 0.52 0.37 0.7 0.52 0.46 0.41 0.63 0.59c0.17 0.17 0.41 0.45 0.53 0.62 0.13 0.16 0.31 0.43 0.41 0.59s0.28 0.49 0.39 0.73c0.12 0.23 0.28 0.62 0.35 0.86 0.08 0.23 0.19 0.63 0.24 0.88s0.11 0.66 0.13 0.91c0.02 0.27 0.03 0.65 0.02 0.89-0.02 0.22-0.05 0.58-0.08 0.79-0.03 0.2-0.1 0.55-0.16 0.77-0.05 0.22-0.16 0.56-0.23 0.76-0.08 0.19-0.22 0.51-0.31 0.7-0.1 0.2-0.24 0.46-0.33 0.59-0.08 0.14-0.25 0.39-0.38 0.57-0.14 0.18-0.39 0.48-0.57 0.66-0.17 0.19-0.46 0.46-0.64 0.61s-0.49 0.38-0.7 0.52c-0.21 0.13-0.57 0.34-0.81 0.46-0.24 0.11-0.59 0.26-0.79 0.33s-0.53 0.17-0.74 0.22c-0.2 0.05-0.56 0.12-0.8 0.15-0.23 0.03-0.66 0.05-0.96 0.05-0.29 0-0.72-0.02-0.95-0.05s-0.59-0.1-0.79-0.14c-0.2-0.05-0.53-0.15-0.74-0.22-0.2-0.08-0.57-0.23-0.81-0.34-0.23-0.12-0.59-0.32-0.8-0.46s-0.53-0.37-0.7-0.52c-0.18-0.15-0.47-0.41-0.63-0.59-0.17-0.18-0.41-0.45-0.54-0.62-0.12-0.16-0.3-0.42-0.4-0.57-0.09-0.16-0.25-0.45-0.35-0.64-0.1-0.2-0.24-0.52-0.31-0.71-0.07-0.2-0.18-0.54-0.24-0.76-0.05-0.22-0.13-0.58-0.16-0.79-0.05-0.28-0.06-0.61-0.07-1.08 0-0.47 0.02-0.81 0.07-1.08 0.03-0.22 0.11-0.58 0.16-0.79 0.06-0.22 0.17-0.56 0.24-0.76 0.07-0.19 0.21-0.51 0.31-0.71s0.26-0.48 0.35-0.64c0.1-0.15 0.28-0.41 0.4-0.57 0.13-0.17 0.37-0.45 0.54-0.62 0.16-0.18 0.45-0.44 0.63-0.59 0.17-0.15 0.49-0.38 0.7-0.52 0.2-0.13 0.57-0.34 0.8-0.46 0.24-0.11 0.62-0.27 0.85-0.35s0.57-0.18 0.76-0.22 0.5-0.1 0.7-0.13c0.19-0.02 0.61-0.05 0.93-0.05zm-36.44 24.98c0.02 0 4.28 4.24 9.47 9.43 6.77 6.77 9.42 9.44 9.4 9.48-0.02 0.02-0.25 0.36-0.52 0.75-0.27 0.38-0.61 0.83-0.77 0.99-0.15 0.16-0.4 0.37-0.54 0.48-0.15 0.1-0.4 0.24-0.57 0.32-0.16 0.08-0.43 0.18-0.61 0.23-0.17 0.05-0.47 0.11-0.68 0.13-0.27 0.03-0.46 0.03-0.74 0-0.2-0.02-0.49-0.07-0.64-0.11-0.16-0.04-0.45-0.15-0.64-0.25-0.2-0.09-0.48-0.25-0.63-0.36-0.17-0.12-2.68-2.58-7.45-7.31-3.96-3.92-7.25-7.21-7.33-7.3-0.07-0.1-0.2-0.29-0.28-0.42-0.08-0.14-0.2-0.37-0.26-0.51-0.06-0.15-0.14-0.4-0.18-0.55-0.04-0.17-0.08-0.45-0.09-0.73s0-0.57 0.03-0.75c0.02-0.17 0.08-0.43 0.13-0.59s0.15-0.42 0.23-0.58 0.22-0.38 0.3-0.51c0.09-0.12 0.24-0.3 0.34-0.41s0.27-0.27 0.38-0.36c0.12-0.08 0.52-0.36 0.91-0.61s0.72-0.46 0.74-0.46zm45.27 13.73c0.01 0 0.02 0.11 0.01 0.24s-0.05 0.57-0.09 0.98c-0.04 0.4-0.12 1.07-0.18 1.47-0.06 0.41-0.18 1.1-0.27 1.53-0.08 0.43-0.23 1.08-0.32 1.44s-0.24 0.9-0.32 1.21c-0.09 0.3-0.25 0.8-0.35 1.11-0.1 0.3-0.29 0.84-0.43 1.2-0.13 0.35-0.33 0.85-0.44 1.11s-0.34 0.77-0.51 1.13c-0.17 0.37-0.47 0.97-0.67 1.34-0.2 0.38-0.51 0.94-0.7 1.26s-0.43 0.72-0.54 0.88c-0.11 0.17-0.21 0.29-0.22 0.28-0.02-0.01-1.27 1.88-2.78 4.2s-2.75 4.22-2.76 4.22c-0.01 0.01-0.89-3.81-1.95-8.48s-1.93-8.51-1.93-8.53c0-0.03 0.04-0.06 0.1-0.07 0.05-0.01 0.48-0.16 0.94-0.33s1.23-0.46 1.71-0.64c0.47-0.18 1.27-0.5 1.77-0.71 0.51-0.21 1.24-0.52 1.64-0.69 0.39-0.17 1.12-0.5 1.62-0.73 0.49-0.23 1.46-0.69 2.15-1.04 0.69-0.34 1.7-0.85 2.23-1.14 0.54-0.28 1.26-0.68 1.62-0.88 0.35-0.2 0.66-0.36 0.67-0.36zm-48.22 2.94l2.59 2.6 2.58 2.59-0.02 0.2c-0.01 0.11-0.13 1.6-0.26 3.31-0.12 1.71-0.24 3.14-0.25 3.18s-0.17 0.31-0.37 0.61c-0.19 0.3-0.5 0.73-0.67 0.97-0.18 0.24-0.51 0.65-0.74 0.92-0.22 0.26-0.68 0.76-1.02 1.1-0.34 0.33-0.81 0.78-1.06 0.99-0.25 0.2-0.59 0.48-0.75 0.61-0.17 0.13-0.5 0.36-0.73 0.52-0.22 0.16-0.71 0.48-1.07 0.7-0.37 0.22-1.01 0.57-1.44 0.78-0.42 0.21-0.96 0.46-1.18 0.56-0.23 0.1-0.69 0.28-1.02 0.4-0.34 0.13-0.87 0.31-1.19 0.41s-0.89 0.26-1.26 0.36c-0.38 0.1-0.97 0.23-1.31 0.3-0.35 0.07-0.92 0.17-1.26 0.22-0.35 0.05-0.93 0.11-1.29 0.15-0.42 0.03-1.02 0.06-1.6 0.06-0.52 0-1.11-0.02-1.31-0.04-0.21-0.03-0.55-0.08-0.76-0.12s-0.46-0.1-0.56-0.13-0.24-0.09-0.31-0.14c-0.07-0.04-0.19-0.15-0.27-0.25-0.08-0.09-0.2-0.29-0.26-0.43-0.06-0.15-0.15-0.42-0.19-0.6s-0.08-0.53-0.09-0.78c-0.02-0.24-0.02-0.71 0-1.04 0.01-0.33 0.05-0.79 0.08-1.02s0.1-0.65 0.15-0.92 0.16-0.81 0.26-1.21c0.1-0.39 0.25-0.96 0.35-1.26 0.09-0.29 0.23-0.74 0.32-0.99 0.08-0.24 0.24-0.66 0.34-0.93 0.11-0.27 0.29-0.72 0.42-1 0.12-0.29 0.32-0.74 0.45-1.01s0.37-0.74 0.53-1.04c0.16-0.31 0.45-0.8 0.62-1.1 0.18-0.29 0.47-0.75 0.65-1.02s0.53-0.76 0.78-1.1c0.26-0.34 0.63-0.8 0.83-1.04s0.63-0.69 0.95-1.01c0.31-0.32 0.79-0.76 1.06-0.98 0.27-0.23 0.69-0.57 0.95-0.76s0.64-0.46 0.85-0.6c0.2-0.14 0.51-0.34 0.68-0.44 0.27-0.16 0.35-0.18 0.56-0.2 0.14-0.01 1.34-0.09 2.67-0.16 1.34-0.08 2.63-0.16 2.88-0.18 0.24-0.01 0.5-0.03 0.57-0.03l0.12-0.01zm-685.91 50.24c-10.54 0-19.86 5.22-25.37 13.14-0.27 0.4-0.54 0.8-0.79 1.21-2.82 4.5-4.44 9.78-4.44 15.43 0 16.31 13.57 29.6 30.29 29.77h0.31c14.78 0 27.15-10.25 29.99-23.82v-0.01l-8.34-5.94-8.34-5.95h-10.57v11.9h11.35c-2.41 5.09-7.81 8.65-14.09 8.65-0.1 0-0.2-0.01-0.31-0.01-7.32-0.14-13.4-5.12-14.81-11.69-0.1-0.47-0.18-0.94-0.23-1.43-0.05-0.48-0.08-0.97-0.08-1.47 0-0.51 0.03-1 0.08-1.49 0.79-7.36 7.37-13.12 15.35-13.12 3.59 0 6.91 1.17 9.53 3.12 0.37 0.28 0.73 0.57 1.08 0.88l10.72-10.72c-5.52-5.22-13.04-8.45-21.33-8.45zm45.51 0.91v15.17h28.11c3.47 0 6.27 2.81 6.27 6.27 0 3.25-2.47 5.92-5.63 6.24-0.21 0.02-0.42 0.03-0.64 0.03h-9.14l-6.07 15.17 12.21 14.77h21.24l-13.91-15.21c9.77-2 17.11-10.64 17.11-21 0-11.84-9.6-21.44-21.44-21.44h-28.11zm73.83 0v16.72 2.98 37.95h16.68v-37.95-2.97-0.01h0.04l-0.04-0.03v-16.67h-16.66l-0.02-0.02zm59.45 0l-16.69 15.17v42.48h16.69v-0.01h10.6c0.5 0 1-0.01 1.49-0.04 6.4-0.32 12.26-2.7 16.9-6.49 0.36-0.29 0.71-0.59 1.05-0.9 1.03-0.92 1.99-1.92 2.88-2.98 0.29-0.36 0.58-0.72 0.86-1.08 3.61-4.79 5.75-10.74 5.75-17.22 0-15.95-12.98-28.93-28.93-28.93h-10.6zm77.31 0l-16.63 15.23v5.26l16.63 15.15h18.77v6.83h-33.17v15.14h33.17l16.7-15.14v-6.83l-16.7-15.15h-18.77v-5.26h33.17v-15.23h-33.17zm56.04 0v15.14h16.55v42.47h16.71v-42.47h16.54v-15.14h-49.8zm82.74 0l-21.48 57.61h17.45l13.34-35.72 13.41 35.72h17.45l-21.73-57.61h-18.44zm51.87 0v15.14h28.06c3.46 0 6.26 2.8 6.26 6.26 0 3.45-2.8 6.25-6.26 6.25h-9.13l-6.01 15.23 12.18 14.73h21.23l-13.91-15.22c9.72-1.98 17.12-10.62 17.12-20.99 0-11.77-9.63-21.4-21.48-21.4h-28.06zm69.87 0v15.14h16.54v42.47h16.71v-42.47h16.54v-15.14h-49.79zm87.76 0l-16.71 15.14v27.49l16.71 14.98h30.2v-15.14h-30.2v-6.83h27.4v-15.15h-27.4v-5.35h30.2v-15.14h-30.2zm52.31 0v15.14h28.06c3.46 0 6.26 2.8 6.26 6.26 0 3.45-2.8 6.25-6.26 6.25h-9.13l-6.01 15.23 12.18 14.73h21.23l-13.91-15.22c9.72-1.98 17.12-10.62 17.12-20.99 0-11.77-9.62-21.4-21.48-21.4h-28.06zm87.24 0l-16.63 15.23v5.26l16.63 15.15h18.76v6.83h-33.17v15.14h33.17l16.71-15.14v-6.83l-16.71-15.15h-18.76v-5.26h33.17v-15.23h-33.17zm-565.14 15.17h10.6c0.48 0 0.95 0.03 1.41 0.07 1.85 0.19 3.59 0.75 5.14 1.59 4.29 2.34 7.21 6.88 7.21 12.1 0 1.89-0.39 3.69-1.08 5.31-2.1 4.88-6.99 8.23-12.68 8.23h-10.6v-27.3zm182.16 87.95c-2.16 0-4.14 0.77-5.49 2.28-1.34 1.5-1.94 3.54-1.95 5.85v0.01 1.52h-3.83v4.51h3.83v20.88h1.69 2.79v-20.88h5.81v-4.51h-5.81v-1.44c0-1.46 0.33-2.33 0.81-2.88 0.52-0.59 1.09-0.85 2.17-0.85 0.78 0 1.43 0.09 1.95 0.23l1.85 0.54 0.68-4.39-1.39-0.44c-0.94-0.3-1.97-0.42-3.11-0.42v-0.01zm-43.69 0.43v10.62c-0.19-0.13-0.34-0.32-0.54-0.44-1.54-0.91-3.32-1.35-5.23-1.35-3.01 0-5.67 1.29-7.43 3.64h-0.01v0.01c-1.76 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.54 9.31s4.41 3.73 7.41 3.73c1.88 0 3.65-0.4 5.21-1.21h0.01l0.01-0.01c0.21-0.11 0.38-0.29 0.58-0.42v1.23h4.48v-34.62h-4.48zm187.61 0v10.62c-0.19-0.13-0.34-0.32-0.54-0.44-1.54-0.91-3.32-1.35-5.23-1.35-3.01 0-5.67 1.29-7.43 3.64l-0.01 0.01c-1.76 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.55 9.31 1.75 2.4 4.4 3.73 7.4 3.73 1.89 0 3.65-0.4 5.21-1.21h0.01l0.01-0.01c0.21-0.11 0.38-0.29 0.58-0.42v1.23h4.49v-34.62h-4.49zm37.09 1.22c-0.72 0-1.51 0.35-2 0.87-0.5 0.5-0.81 1.27-0.81 1.96 0 0.71 0.31 1.49 0.82 1.99 0.5 0.5 1.28 0.82 1.99 0.82 0.69 0 1.46-0.32 1.96-0.81 0.52-0.49 0.87-1.28 0.87-2 0-0.71-0.35-1.48-0.86-1.97-0.49-0.51-1.26-0.86-1.97-0.86zm-425.67 7.61c-3.14 0-5.92 1.26-7.84 3.61-1.91 2.35-2.8 5.45-2.8 9.06v0.73c0 3.68 0.89 6.82 2.8 9.18 1.93 2.36 4.72 3.62 7.88 3.62 2.59 0 4.94-0.78 6.78-2.33l0.01-0.01c1.86-1.58 2.93-3.83 3.06-6.35l0.09-1.78h-4.47l-0.1 1.58c-0.1 1.51-0.57 2.43-1.51 3.19l-0.01 0.01c-0.96 0.79-2.15 1.2-3.85 1.2-2.05 0-3.36-0.61-4.47-1.98-1.1-1.39-1.73-3.39-1.73-6.21v-0.71c0-2.89 0.64-4.93 1.72-6.31 1.1-1.4 2.4-2.02 4.44-2.02 1.72 0 2.88 0.45 3.84 1.35l0.01 0.01 0.01 0.01c0.97 0.89 1.47 1.96 1.55 3.59l0.08 1.61h4.47l-0.07-1.76c-0.11-2.68-1.12-5.05-2.97-6.75-1.84-1.69-4.25-2.54-6.92-2.54zm48.55 0c-2.07 0-3.97 0.54-5.48 1.67v-1.27h-4.49v25.39h4.49v-15.9c0.35-1.87 1.02-3.17 1.95-4.07h0.01v-0.01c0.95-0.92 2.01-1.34 3.5-1.35l2.92 0.25 0.2-1.61 0.29-2.3-1.24-0.47c-0.68-0.26-1.38-0.33-2.15-0.33zm39.73 0c-2.15 0-4.16 0.56-5.91 1.66l-0.01 0.01c-1.73 1.1-3.09 2.68-4.03 4.61v0.01c-0.92 1.91-1.36 4.06-1.36 6.38v0.98 0.01c0.01 2.29 0.47 4.43 1.41 6.34v0.01c0.94 1.9 2.3 3.45 4.03 4.54l0.01 0.01c1.75 1.09 3.76 1.64 5.9 1.64s4.15-0.56 5.88-1.67h0.01c1.74-1.11 3.11-2.68 4.03-4.6s1.37-4.08 1.37-6.41v-0.98c-0.02-2.31-0.49-4.46-1.44-6.37-0.94-1.92-2.31-3.48-4.04-4.56-1.74-1.07-3.73-1.61-5.85-1.61zm246.83 0c-2.02 0-3.95 0.62-5.61 1.79-0.19 0.14-0.32 0.34-0.5 0.48v-1.87h-4.48v25.39h4.48v-15.52c0.43-1.8 1.18-3.18 2.29-4.25 1.12-1.09 2.27-1.56 3.76-1.56 1.75 0 2.65 0.42 3.22 1.1 0.58 0.69 1.04 2.02 1.05 4.15v16.08h4.48v-16.05-0.01c-0.01-2.93-0.64-5.38-2.16-7.13-1.51-1.78-3.85-2.6-6.53-2.6zm133.82 0c-2.02 0-3.96 0.62-5.61 1.79-0.2 0.14-0.33 0.34-0.51 0.48v-1.87h-4.48v25.39h4.48v-15.52c0.44-1.8 1.19-3.18 2.3-4.25 1.12-1.09 2.26-1.56 3.76-1.56 1.75 0 2.65 0.42 3.21 1.1h0.01c0.58 0.69 1.03 2.02 1.05 4.15v16.08h4.48v-16.05-0.01c-0.02-2.93-0.64-5.38-2.16-7.13-1.51-1.78-3.85-2.6-6.53-2.6zm47.67 0c-3 0-5.67 1.29-7.43 3.64v0.01c-1.77 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.54 9.31s4.41 3.73 7.41 3.73c1.86 0 3.62-0.39 5.16-1.19h0.01c0.19-0.1 0.33-0.26 0.51-0.37-0.13 1.81-0.59 3.15-1.4 4.03h-0.01c-0.92 1.01-2.11 1.53-4.03 1.53-1.13 0-2.01-0.24-2.74-0.66h-0.01c-0.8-0.45-1.57-1.11-2.31-2.06l-1.14-1.45-3.2 3.03 0.87 1.2c1.01 1.38 2.26 2.49 3.72 3.25h0.01c1.47 0.77 3.12 1.14 4.84 1.14 2.92 0 5.51-1.01 7.33-3v-0.01c1.83-1.99 2.68-4.74 2.68-7.93v-23.31h-4.5v1.39c-0.19-0.13-0.33-0.3-0.52-0.41v-0.01c-1.55-0.92-3.33-1.37-5.23-1.37h-0.01zm-390.85 0.4l7.37 25.39h3.6l5.19-16.07 5.28 16.07h3.59l7.39-25.39h-4.81l-4.57 15.99-5.03-15.99h-3.6l-5.04 15.95-4.58-15.95h-4.79zm149.36 0v15.88 0.01c0.03 2.93 0.7 5.4 2.23 7.21l0.01 0.01v0.01c1.57 1.81 3.97 2.68 6.69 2.68 2.12 0 4-0.39 5.57-1.28h0.01l0.01-0.01c0.11-0.06 0.2-0.17 0.31-0.24v1.12h1.69 2.81v-25.39h-4.5v16.95c-0.3 1.53-0.89 2.52-1.83 3.22-0.97 0.73-2.27 1.14-4.11 1.14-1.63 0-2.54-0.41-3.22-1.19-0.69-0.81-1.16-2.15-1.18-4.23v-15.89h-4.49zm148.32 0v25.39h4.48v-1.69-23.7h-4.48zm-329.83 2.27l0.01 0.02c0-0.01-0.01-0.01-0.01-0.01v-0.01zm-87.45 0.68l0.01 0.01h-0.01v-0.01zm468.53 0.03v0.01-0.01zm-386.4 1.1c1.34 0 2.43 0.33 3.44 1.01l0.01 0.01h0.01c1.03 0.68 1.84 1.61 2.45 2.9 0.62 1.3 0.94 2.7 0.94 4.27v0.63c0 2.67-0.68 4.64-1.99 6.19v0.01c-1.29 1.54-2.74 2.21-4.82 2.21-1.38 0-2.5-0.33-3.52-1s-1.82-1.59-2.43-2.86l-0.01-0.01c-0.6-1.29-0.91-2.71-0.91-4.32v-0.65c0-2.59 0.67-4.55 1.99-6.14 1.3-1.57 2.76-2.25 4.84-2.25zm106.9 0c3.09 0 4.69 1.16 5.79 4.21v9.54c-0.5 1.15-1.16 1.96-2.07 2.54-0.99 0.61-2.2 0.94-3.76 0.94-1.82 0-2.89-0.56-3.85-1.96-0.98-1.45-1.56-3.56-1.56-6.45 0-3.25 0.61-5.52 1.56-6.87 0.99-1.39 2.08-1.95 3.89-1.95zm187.61 0c3.09 0 4.7 1.16 5.79 4.21v9.54c-0.5 1.14-1.16 1.96-2.07 2.54-0.99 0.61-2.2 0.94-3.76 0.94-1.82 0-2.89-0.56-3.85-1.96-0.98-1.45-1.56-3.56-1.56-6.45 0-3.25 0.62-5.52 1.57-6.87 0.98-1.39 2.08-1.95 3.88-1.95zm133.8 0c1.6 0 2.76 0.38 3.67 1.08 0.88 0.67 1.58 1.73 2.1 3.27v9.28c-0.44 1.14-1.07 1.97-2.01 2.6-0.99 0.65-2.21 1-3.8 1-1.81 0-2.89-0.56-3.86-1.95v-0.01c-0.99-1.42-1.57-3.53-1.57-6.45 0-3.25 0.61-5.52 1.56-6.87 0.99-1.39 2.09-1.95 3.91-1.95z" />
                            </g>
                        </svg>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn-login-sm text-center" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li style="margin-left:5px;" class="nav-item">
                                    <a class="nav-link btn-login-sm text-center" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                            <btn-grids-movil-component class="w-100 mx-0 mb-2 btn-carritox"></btn-grids-movil-component>
                                <btn-buy-component>
                                </btn-buy-component>
                                <div class="d-md-none row justify-content-center">
                                    <a class="btn " style="color:#30019B;font-size:18px;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <strong>{{ __('Logout') }}</strong>
                                        
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                             
                            </li>
                        @endguest
                    </ul>

                    


<div class="position-absolute" style="bottom:1rem; width:80%;">
<ul class="row m-0 justify-content-center navbar-nav flex-row pt-3 mb-2 " style="border-top: solid 1px #ccc;">
                        <li class="nav-item  row mx-2 justify-content-center">
                            <a class="nav-link" href="{{ route('login') }}">
                            <svg height="42" fill="#30019B " viewBox="0 0 512 512" width="42" xmlns="http://www.w3.org/2000/svg">
                                <path d="m305 256c0 27.0625-21.9375 49-49 49s-49-21.9375-49-49 21.9375-49 49-49 49 21.9375 49 49zm0 0"/><path d="m370.59375 169.304688c-2.355469-6.382813-6.113281-12.160157-10.996094-16.902344-4.742187-4.882813-10.515625-8.640625-16.902344-10.996094-5.179687-2.011719-12.960937-4.40625-27.292968-5.058594-15.503906-.707031-20.152344-.859375-59.402344-.859375-39.253906 0-43.902344.148438-59.402344.855469-14.332031.65625-22.117187 3.050781-27.292968 5.0625-6.386719 2.355469-12.164063 6.113281-16.902344 10.996094-4.882813 4.742187-8.640625 10.515625-11 16.902344-2.011719 5.179687-4.40625 12.964843-5.058594 27.296874-.707031 15.5-.859375 20.148438-.859375 59.402344 0 39.25.152344 43.898438.859375 59.402344.652344 14.332031 3.046875 22.113281 5.058594 27.292969 2.359375 6.386719 6.113281 12.160156 10.996094 16.902343 4.742187 4.882813 10.515624 8.640626 16.902343 10.996094 5.179688 2.015625 12.964844 4.410156 27.296875 5.0625 15.5.707032 20.144532.855469 59.398438.855469 39.257812 0 43.90625-.148437 59.402344-.855469 14.332031-.652344 22.117187-3.046875 27.296874-5.0625 12.820313-4.945312 22.953126-15.078125 27.898438-27.898437 2.011719-5.179688 4.40625-12.960938 5.0625-27.292969.707031-15.503906.855469-20.152344.855469-59.402344 0-39.253906-.148438-43.902344-.855469-59.402344-.652344-14.332031-3.046875-22.117187-5.0625-27.296874zm-114.59375 162.179687c-41.691406 0-75.488281-33.792969-75.488281-75.484375s33.796875-75.484375 75.488281-75.484375c41.6875 0 75.484375 33.792969 75.484375 75.484375s-33.796875 75.484375-75.484375 75.484375zm78.46875-136.3125c-9.742188 0-17.640625-7.898437-17.640625-17.640625s7.898437-17.640625 17.640625-17.640625 17.640625 7.898437 17.640625 17.640625c-.003906 9.742188-7.898437 17.640625-17.640625 17.640625zm0 0"/><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm146.113281 316.605469c-.710937 15.648437-3.199219 26.332031-6.832031 35.683593-7.636719 19.746094-23.246094 35.355469-42.992188 42.992188-9.347656 3.632812-20.035156 6.117188-35.679687 6.832031-15.675781.714844-20.683594.886719-60.605469.886719-39.925781 0-44.929687-.171875-60.609375-.886719-15.644531-.714843-26.332031-3.199219-35.679687-6.832031-9.8125-3.691406-18.695313-9.476562-26.039063-16.957031-7.476562-7.339844-13.261719-16.226563-16.953125-26.035157-3.632812-9.347656-6.121094-20.035156-6.832031-35.679687-.722656-15.679687-.890625-20.6875-.890625-60.609375s.167969-44.929688.886719-60.605469c.710937-15.648437 3.195312-26.332031 6.828125-35.683593 3.691406-9.808594 9.480468-18.695313 16.960937-26.035157 7.339844-7.480469 16.226563-13.265625 26.035157-16.957031 9.351562-3.632812 20.035156-6.117188 35.683593-6.832031 15.675781-.714844 20.683594-.886719 60.605469-.886719s44.929688.171875 60.605469.890625c15.648437.710937 26.332031 3.195313 35.683593 6.824219 9.808594 3.691406 18.695313 9.480468 26.039063 16.960937 7.476563 7.34375 13.265625 16.226563 16.953125 26.035157 3.636719 9.351562 6.121094 20.035156 6.835938 35.683593.714843 15.675781.882812 20.683594.882812 60.605469s-.167969 44.929688-.886719 60.605469zm0 0"/>
                            </svg>
                            </a>
                        </li>
                        <li class="nav-item  row mx-2 justify-content-center">
                            <a class="nav-link" href="{{ route('login') }}">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0C9.40382 0 0 9.40382 0 21C0 32.5962 9.40382 42 21 42C32.5962 42 42 32.5962 42 21C42 9.40382 32.5962 0 21 0ZM31.5353 16.0677V18.9112C30.1945 18.9116 28.8917 18.6489 27.6631 18.1305C26.873 17.797 26.137 17.3672 25.4637 16.8479L25.4839 25.6001C25.4755 27.5709 24.6958 29.4226 23.2846 30.8173C22.1361 31.9527 20.6809 32.6746 19.1036 32.9083C18.733 32.9632 18.3558 32.9913 17.9744 32.9913C16.2859 32.9913 14.6829 32.4443 13.3717 31.4352C13.1249 31.2452 12.8889 31.0392 12.6642 30.8173C11.1348 29.3057 10.3462 27.2571 10.479 25.1019C10.5803 23.4613 11.2371 21.8968 12.3321 20.6705C13.7808 19.0477 15.8074 18.147 17.9744 18.147C18.3558 18.147 18.733 18.1757 19.1036 18.2305V19.2819V22.2064C18.7522 22.0905 18.3769 22.0268 17.9861 22.0268C16.0063 22.0268 14.4047 23.642 14.4343 25.6232C14.4531 26.8908 15.1455 27.9989 16.1668 28.6097C16.6468 28.8968 17.1989 29.0747 17.7881 29.107C18.2498 29.1323 18.6931 29.068 19.1036 28.9325C20.5181 28.4653 21.5385 27.1367 21.5385 25.5697L21.5431 19.7088V9.00867H25.459C25.4627 9.39668 25.5021 9.77525 25.5753 10.1421C25.8709 11.6269 26.7078 12.9152 27.8727 13.7934C28.8884 14.5595 30.1531 15.0136 31.524 15.0136C31.5249 15.0136 31.5362 15.0136 31.5352 15.0127V16.0677H31.5353Z" fill="#30019B "/>
                            </svg>
                            </a>
                        </li>
                </ul>
</div>
               

               
                </div>
            </div>
        </nav>

        <main >
        <br><br><br><br>

            @yield('content')
        </main>
    </div>
    <script>
        function active(){
            var act = document.getElementById('idsito').classList.add("show-menu");

            var clase =  document.getElementById('idsito').classList.contains("hidden-menu");
            if(clase){
                document.getElementById('idsito').classList.remove("hidden-menu");
            }
            console.log('aagg')
        }

        function cerrar(){
            var act = document.getElementById('idsito')
            var clase = act.classList.contains("show-menu");

            if(clase){
                document.getElementById('idsito').classList.add("hidden-menu");
                console.log('existe')
            }
        }
    </script>         



</body>
</html>
