<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#30019B">
    <meta name="msapplication-navbutton-color" content="#30019B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#30019B">

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
            src: url('/fonts/Rubik/static/Rubik-Bold.ttf');
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
               <nav-show-admin-component></nav-show-admin-component>
                           
                <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" width="40" height="4" rx="2" fill="#FBF9FF"/>
                <rect x="7" y="11" width="34" height="4" rx="2" fill="#FBF9FF"/>
                <rect y="22" width="41" height="4" rx="2" fill="#FBF9FF"/>
                </svg>
                </button>-->
                </div>
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul style="width:100%; margin-right:20px;" class="navbar-nav d-flex justify-content-end align-content-center">
                            
                           
                        
                            

                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                   
                                                <ul class="navbar-nav ml-auto">
                                                    @guest
                                                        <li class="nav-item">
                                                            <a class="nav-link text-center btn-upgrap" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li> 
                                                    @else
                                                        <li class="nav-item dropdown">
                                                            <div id="navbarDropdown" class="nav-link text-white " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                <div style="width:250px;"  class="d-flex">
                                                                <div class="flexi-user-auth">
                                                                        <a href="/home">
                                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                                        </a>
                                                                        <span>{{ Auth::user()->roles[0]->name }}</span>
                                                                </div>
                                                                
                                                                <img style="margin-left:33px" class="avatar" src="/img/user/user_min.jpg" alt="user-img">
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        
                                                            <div >
                                                                <a  href="{{ route('logout') }}"
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

        <main style="{{Request::is('register') ? '' : 'margin-top:80px;' }}">
        <div class="row">
            <nav-admin-component :user="{{ Auth::user() != null ? Auth::user()->load('roles') : 0 }}" class="col-sm-3"></nav-admin-component>
            <div style="margin-top:41px;" class="col-sm-9">
                @yield('content')
            </div>
            
        </div>
           
        </main>
    </div>
</body>
</html>
