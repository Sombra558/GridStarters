<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
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
            min-width: 181px;
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
    </style>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-millonario shadow-sm fixed-top">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="171px" heigth="128px" src="/img/logo.png" alt="">
                </a>
                <div>
                <a class="btn btn-upgrap2 d-md-none" href="/payment"><svg xmlns="http://www.w3.org/2000/svg" width="23.133" height="12" viewBox="0 0 23.133 20.563">
                                    <path id="shopping-cart-solid" d="M21.21,12.1l1.9-8.354a.964.964,0,0,0-.94-1.177H6.394L6.026.771A.964.964,0,0,0,5.082,0H.964A.964.964,0,0,0,0,.964v.643a.964.964,0,0,0,.964.964H3.77L6.592,16.363a2.249,2.249,0,1,0,2.693.344H17.7a2.248,2.248,0,1,0,2.554-.418l.222-.975a.964.964,0,0,0-.94-1.177H8.76L8.5,12.852H20.27A.964.964,0,0,0,21.21,12.1Z" fill="#fff"/>
                                </svg></a>
                           
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
                             <li style="margin-top:18px;margin-left:30px" class="nav-item">
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
                                <li  style="margin-top:8px;margin-left:25px;" class="nav-item">
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
                    <ul class="navbar-nav ml-auto">
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
                                <btn-buy-component></btn-buy-component>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
        <br><br><br><br>

            @yield('content')
        </main>
    </div>
</body>
</html>
