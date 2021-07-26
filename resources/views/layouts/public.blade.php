<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="GridStarters">
    <meta property="og:image" content="https://firebasestorage.googleapis.com/v0/b/lernet-proyect.appspot.com/o/protocol.png?alt=media&token=757ae645-b561-481b-8789-8fdca85205be">
    <meta property="og:url" content="http://159.203.68.74/">
    <meta property="og:description"
        content="$5 Each・Upload A Photo Forever">
    <meta property="og:image:type" content=".png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="theme-color" content="#30019B">
    <meta name="msapplication-navbutton-color" content="#30019B">
    <meta name="apple-mobile-web-app-status-bar-style" content="#30019B">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GridStarters</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #ffffff!important;
        opacity: 1; /* Firefox */
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #ffffff!important;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #ffffff!important;
        }
        .principal-seccion{
            height:85vh;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-image: url('/img/header-escritorio.png');
        }
        .bg-millonarioB{
            background: linear-gradient(91.97deg , #30019B 9.96%, #0F0426 89.26%);
        }
        .lindeando:hover{
            text-decoration:none;
            color:#ffffff;
            margin-top;: 0px !important;
        }
        @media only screen and (max-width: 767px){
            .btn-upgrap{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            width: 100%;
            margin-top:35px;
            min-width: 104px;
            border-radius: 12px!important;
        }
        .btn-search{
            box-shadow:none!important; 
            border:1px solid transparent!important;
            background-color:#fbf9ff8a!important;
        }
            .alineado-padre{
                width:100%;
                flex-direction:column-reverse;
                height: 100vh;
                display:flex;
                align-items:center;
                justify-content:center;
            }
            .alineado-padre .cohete{
                margin-right:0px;
                height:375px;
                margin-bottom:10px;
             }
             .alineado-padre .cohete img{
                width:200px;
             }
            .alinenado-hijo{
                display:flex;
                height:100%;
                max-height:360px;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }
            .alinenado-hijo svg{
                height:90px;
                width:300px;
            }
            .alinenado-hijo h1{
                font-family:'Rubik';
                margin-top:20px!important;
                font-size: 20px!important;
                text-align:center;
                color:#ffffff;
          
                max-width:254px;
                font-weight:500;
            }
            .alinenado-hijo .input-search{
                width:100%;
            }
            .alinenado-hijo .input-search input{
            width: calc(100%-50px);
            height: 44px;
            background: #fbf9ff8c;
            border: none;
            font-size: 10pt;
            float: left;
            color: #fff;
            
            -webkit-border-radius: 12px;
            -moz-border-radius: 12px;
            border-radius: 12px;
        }
        .alinenado-hijo .input-search button.icon{
            -webkit-border-top-right-radius: 12px;
            -webkit-border-bottom-right-radius: 12px;
            -moz-border-radius-topright: 12px;
            -moz-border-radius-bottomright: 12px;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            z-index: 5;
            border: none;
            background: #fbf9ff8c;
            height: 44px!important;
            width: 50px;
            color: #ffffff;
            opacity: 1;
            font-size: 10pt;
            
            -webkit-transition: all .55s ease;
            -moz-transition: all .55s ease;
            -ms-transition: all .55s ease;
            -o-transition: all .55s ease;
            transition: all .55s ease;
            }
         
        }  
        @media only screen and (min-width: 768px) and  (max-width: 1024px){
            .btn-upgrap{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            width: 100%;
            min-width: 181px;
            border-radius: 12px!important;
        }
        .btn-search{
            box-shadow:none!important; 
            border:1px solid transparent!important;
            background-color:#fbf9ff8a!important;
        }
            .alineado-padre{
            width:100%;
            height: 65vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
      
        .background-img-cohete{
           
        }
        .alinenado-hijo{
            display:flex;
            height:100%;
            flex-direction:column;
            align-items:center;
            justify-content:center;
         
          
        }
        .alinenado-hijo svg{
          height:90px;
          width:350px;
        }
        .alinenado-hijo h1{
            font-family:'Rubik';
            margin-top:20px!important;
            font-size: 24px!important;
            text-align:center;
            color:#ffffff;
            max-width:304px;
            font-weight:500;
        }
        .alinenado-hijo .input-search{
            width:425px
        }
        .alinenado-hijo .input-search input{
            width: 375px;
            height: 44px;
            background: #fbf9ff8c;
            border: none;
            font-size: 10pt;
            float: left;
            color: #fff;
            
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 12px;
        }
        .alinenado-hijo .input-search button.icon{
            -webkit-border-top-right-radius: 12px;
            -webkit-border-bottom-right-radius: 12px;
            -moz-border-radius-topright: 12px;
            -moz-border-radius-bottomright: 12px;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            z-index: 5;
            border: none;
       
            height: 44px!important;
            width: 50px;
            color: #ffffff;
            opacity: 1;
            font-size: 10pt;
            background: #fbf9ff8c;
            -webkit-transition: all .55s ease;
            -moz-transition: all .55s ease;
            -ms-transition: all .55s ease;
            -o-transition: all .55s ease;
            transition: all .55s ease;
            }
          
        }
        @media only screen and (min-width: 1025px){
            .btn-upgrap{
            font-family: 'Valera';
            background-color:#32BAB0!important;
            color:#ffffff!important;
            width: 100%;
            min-width: 181px;
            border-radius: 12px!important;
        }
        .btn-search{
            box-shadow:none!important; 
            border:1px solid transparent!important;
            background-color:#fbf9ff8a!important;
        }
            .alineado-padre{
            width:100%;
            height: 65vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .alineado-padre .cohete{
           display:none;
        }
        .background-img-cohete{
            background-image: url('./img/cohete-inicio.png');
            background-repeat: no-repeat;
            background-size: 750px contain;
            background-position: left;
        }
        .alinenado-hijo{
            display:flex;
            height:100%;
            flex-direction:column;
            align-items:center;
            justify-content:center;
         
          
        }
        .alinenado-hijo svg{
          height:124.8px;
          width:350px;
        }
        .alinenado-hijo h1{
            font-family:'Rubik';
            margin-top:20px!important;
            font-size: 24px!important;
            text-align:center;
            color:#ffffff;
            max-width:304px;
            font-weight:500;
        }
        .alinenado-hijo .input-search{
            width:425px
        }
        .alinenado-hijo .input-search input{
            width: 375px;
            height: 44px;
            background: #fbf9ff8c;
            border: none;
            font-size: 10pt;
            float: left;
            color: #fff;
            
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 12px;
        }
        .alinenado-hijo .input-search button.icon{
            -webkit-border-top-right-radius: 12px;
            -webkit-border-bottom-right-radius: 12px;
            -moz-border-radius-topright: 12px;
            -moz-border-radius-bottomright: 12px;
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            z-index: 5;
            border: none;
       
            height: 44px!important;
            width: 50px;
            color: #ffffff;
            opacity: 1;
            font-size: 10pt;
            background: #fbf9ff8c;
            -webkit-transition: all .55s ease;
            -moz-transition: all .55s ease;
            -ms-transition: all .55s ease;
            -o-transition: all .55s ease;
            transition: all .55s ease;
            }
          
        }
        @font-face {
            font-family: 'Valera';
            src: url('/fonts/Valera/Varela-Regular.ttf');
            font-weight:700;
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

  .portafolio{
        text-align: center;
        width: calc(100% + 10px);
        display: inline-block;
        -webkit-animation: 15s perspectivaY infinite;
        -webkit-backface-visibility: visible;
        -webkit-box-shadow: 6px 7px 44px 1px rgba(0,0,0,0.75);
        -moz-box-shadow: 6px 7px 44px 1px rgba(0,0,0,0.75);
        box-shadow: 6px 7px 44px 1px rgba(0,0,0,0.75);
        margin-bottom: 3rem ;
        z-index: 0;       
    }
    @keyframes perspectivaY{
            0%{-webkit-transform: perspective(400px)
                                rotateY(20deg);
            
            }
            25%{
                -webkit-transform: perspective(400px)
                                rotateY(-10deg);
            }
            50%{ 
                -webkit-transform: perspective(400px)
                                rotateY(10deg);
            }
            75%{ 
                -webkit-transform: perspective(400px)
                                rotateY(-10deg);
            }
            100%{ 
                -webkit-transform: perspective(400px)
                                rotateY(20deg);
            }
    }
    @keyframes colorgroud0{
        0%{
            background: #32BAB0b8;
        }
      
        50%{
            background: #5F01F5b8;
        }
        100%{
            background: #32BAB0b8;
        }
    }
    @keyframes colorgroud1{
        0%{
            background: #DB88A7b8;
        }
      
        50%{
            background: #32BAB0b8;
        }
        100%{
            background: #DB88A7b8;
        }
    }
    @keyframes colorgroud2{
        0%{
            background: #30019Bb8;
        }
      
        50%{
            background: #32BAB0b8;
        }
        100%{
            background: #30019Bb8;
        }
    }
    @keyframes colorgroud3{
        0%{
            background: #E85F8Fb8;
        }
      
        50%{
            background: #5F01F5b8;
        }
        100%{
            background: #E85F8Fb8;
        }
    }
    @keyframes colorgroud4{
        0%{
            background: #32BAB0b8;
        }
      
        50%{
            background: #DB88A7b8;
        }
        100%{
            background: #32BAB0b8;
        }
    }
    @keyframes colorgroud5{
        0%{
            background: #32BAB0b8;
        }
      
        50%{
            background: #30019Bb8;
        }
        100%{
            background: #32BAB0b8;
        }
    }

    </style>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
                <div id="app">
                <div class="principal-seccion">
                            <div class="container-fluid">
                                <nav style="box-shadow:none!important;" class="navbar navbar-expand-md navbar-light shadow-sm d-md-block d-none">
                                        <div class="container-fluid"> 
                                        @guest
                                        <ul style="max-width:350px!important; width:100%!important;" class="navbar-nav ml-auto justify-content-between" >
                                                    @else

                                                    <ul style="max-width:550px!important; width:100%!important;" class="navbar-nav ml-auto justify-content-between" >
                                                 
                                                    @endguest       
                                       
                                        <li class="nav-item">
                                                    @guest
                                                    <btn-buy-comp ></btn-buy-comp>
                                                    @else

                                                    <btn-buy-comp style="margin-top:15px;"></btn-buy-comp>
                                                 
                                                    @endguest       
                                              
                                            
                                            
                                            </li>
                                            <li class="nav-item">
                                                    @guest
                                                   
                                                    @else

                                                
                                                    <btn-grids-comp style="margin-top:15px;"></btn-grids-comp>
                                                    @endguest       
                                              
                                            
                                            
                                            </li>
                                                     @guest
                                                        <li class="nav-item">
                                                            <a class="nav-link text-center btn-upgrap" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                        </li> 
                                                    @else
                                                        <li class="nav-item row">
                                                            
                                                                    <div class="nav-link text-white ">
                                                                                <div class="row">
                                                                                        <div class="flexi-user-auth">
                                                                                        <a href="/home" class="lindeando">
                                                                                            {{ Auth::user()->name }} <span class="caret"></span>
                                                                                        </a>
                                                                                        @if(Auth::user()->roles[0]->name==='Administrator')
                                                                                            
                                                                                                <span><a style="color:#9DD5A8;!important;" class="lindeando" href="/admin">{{ Auth::user()->roles[0]->name }}</a></span>
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
                                                        </li>
                                                    @endguest
                                        </ul>          
                                                    
                                        
                                        </div>
                                    </nav>




<nav class="navbar navbar-expand-md navbar-light  shadow-sm fixed-top p-0 d-block d-md-none w-100">
    <div class="container-fluid">
    <div class="bg-millonarioB w-100 row justify-content-between m-0  align-items-center">
        <ul style="width:100%" class="navbar-nav row m-0 flex-row justify-content-between align-content-center col-12 p-0">
        <div  class="nav-link text-white col-12" >
            <div  class="d-flex justify-content-start">
                @guest
                <div class="nav-link text-white col-10"  >
                    <div class="row col-12 m-0">
                   
                    
                    
                    </div>
                </div>
                @else
                <div class="nav-link text-white col-10">
                    <div class="row col-12 m-0">
                    <div class="flexi-user-auth">
                        <a href="/home">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                         <span><a href="/home/perfil">go to my profile</a></span>
                    </div>
                    @if(Auth::user()->img)
                    <img style="margin-left:33px" class="avatar" src="/storage/{{Auth::user()->img}}" alt="user-img">
                    @else
                    <img style="margin-left:33px" class="avatar" src="/img/user/user_min.jpg" alt="user-img">
                    @endif
                    </div>
                </div>
                @endguest
                <div class="row align-items-center m-0 p-0 col-2">
                <button  onclick="active()" class="navbar-toggler p-0" style="border:none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" width="40" height="4" rx="2" fill="#FBF9FF"/>
                        <rect x="7" y="11" width="34" height="4" rx="2" fill="#FBF9FF"/>
                        <rect y="22" width="41" height="4" rx="2" fill="#FBF9FF"/>
                    </svg>
                </button>
            </div>
       
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

            <svg version="1.1" width= "16rem" style="margin-top: -7rem;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024" enable-background="new 0 0 1024 1024" xml:space="preserve">
                <g transform="translate(0 128)">
                <path fill="#30019B" d="m895.08 243.85c-0.21 0-0.76 0.03-1.22 0.05s-1.13 0.06-1.48 0.09c-0.34 0.03-0.87 0.08-1.16 0.11-0.3 0.03-0.93 0.1-1.4 0.16s-1.18 0.16-1.56 0.22c-0.39 0.06-1.02 0.16-1.41 0.23-0.38 0.07-1.07 0.2-1.53 0.29-0.45 0.09-1.19 0.24-1.63 0.34-0.45 0.1-1.32 0.31-1.94 0.46-0.62 0.16-1.58 0.41-2.12 0.56s-1.29 0.36-1.65 0.47c-0.37 0.11-1.13 0.34-1.69 0.52-0.55 0.18-1.45 0.48-1.99 0.67s-1.33 0.47-1.75 0.63c-0.43 0.16-1.17 0.45-1.65 0.64-0.49 0.19-1.34 0.54-1.89 0.78s-1.39 0.61-1.85 0.82-1.51 0.71-2.32 1.11-1.83 0.93-2.28 1.17c-0.44 0.24-1.08 0.59-1.42 0.78-0.33 0.19-0.94 0.54-1.35 0.77-0.4 0.24-0.98 0.59-1.29 0.78s-0.82 0.51-1.15 0.72c-0.33 0.2-1.02 0.66-1.55 1.01-0.52 0.35-1.26 0.85-1.63 1.11-0.38 0.27-0.97 0.69-1.31 0.94-0.35 0.26-0.96 0.72-1.37 1.03-0.4 0.31-1.01 0.78-1.35 1.05-0.33 0.27-0.95 0.78-1.38 1.13-0.42 0.36-1.08 0.92-1.45 1.25-0.38 0.33-0.9 0.79-1.17 1.04-0.27 0.24-0.89 0.82-1.39 1.3-0.5 0.47-1.31 1.28-1.8 1.8-0.5 0.52-1.08 1.14-1.31 1.39-0.22 0.25-0.63 0.7-0.89 1.01-0.27 0.3-0.72 0.82-1.01 1.16-0.28 0.33-0.83 1-1.21 1.49-0.39 0.49-0.94 1.18-1.21 1.54l-0.5 0.67-0.97-0.03c-0.54-0.01-1.41-0.03-1.93-0.04-0.55-0.02-1.38-0.01-1.96 0.02-0.55 0.02-1.21 0.05-1.47 0.07s-0.78 0.07-1.17 0.11c-0.38 0.04-0.99 0.11-1.35 0.16-0.35 0.05-1.01 0.16-1.45 0.24-0.45 0.08-1.14 0.21-1.55 0.3-0.4 0.09-1.01 0.24-1.35 0.32-0.33 0.09-0.81 0.22-1.06 0.29-0.24 0.07-0.75 0.23-1.13 0.35-0.37 0.12-0.95 0.31-1.27 0.43-0.33 0.12-0.86 0.32-1.19 0.45s-0.9 0.37-1.27 0.53c-0.38 0.17-0.97 0.44-1.32 0.6-0.34 0.17-0.92 0.46-1.29 0.66-0.37 0.19-0.87 0.47-1.13 0.62s-0.7 0.41-0.97 0.58c-0.28 0.17-1.06 0.67-1.74 1.12-0.69 0.45-1.99 1.3-2.9 1.9s-2.95 1.95-4.54 3c-1.59 1.04-2.99 1.97-3.11 2.06s-0.34 0.27-0.48 0.4c-0.15 0.13-0.4 0.39-0.55 0.58-0.16 0.19-0.37 0.47-0.48 0.63-0.1 0.16-0.27 0.44-0.36 0.63-0.09 0.18-0.23 0.48-0.29 0.65-0.07 0.17-0.17 0.51-0.23 0.74-0.05 0.23-0.12 0.61-0.15 0.83-0.02 0.25-0.03 0.61-0.02 0.95 0.01 0.3 0.05 0.67 0.07 0.83 0.03 0.16 0.09 0.43 0.14 0.6 0.04 0.16 0.13 0.44 0.19 0.61 0.07 0.17 0.18 0.42 0.25 0.57 0.08 0.15 0.2 0.37 0.27 0.49s0.24 0.37 0.38 0.55c0.14 0.19 0.4 0.49 0.58 0.67s0.48 0.45 0.68 0.6c0.2 0.14 0.51 0.35 0.68 0.45 0.18 0.1 0.45 0.23 0.59 0.3 0.15 0.06 0.41 0.16 0.58 0.22 0.17 0.05 1.99 0.49 4.06 0.96s5.91 1.36 8.55 1.96 4.84 1.11 4.88 1.12l0.09 0.03-0.23 0.18c-0.12 0.1-0.44 0.39-0.7 0.64-0.26 0.26-0.61 0.63-0.78 0.82-0.16 0.2-0.43 0.56-0.6 0.8-0.17 0.23-0.44 0.66-0.6 0.93-0.16 0.28-0.38 0.71-0.49 0.96-0.11 0.24-0.28 0.64-0.37 0.89s-0.23 0.74-0.32 1.07c-0.08 0.34-0.19 0.85-0.23 1.12s-0.09 0.77-0.11 1.11c-0.02 0.33-0.03 0.81-0.02 1.06 0.02 0.24 0.05 0.66 0.08 0.91 0.03 0.26 0.1 0.7 0.16 0.99 0.05 0.29 0.16 0.72 0.23 0.96 0.07 0.23 0.19 0.58 0.26 0.77 0.07 0.18 0.2 0.5 0.29 0.7 0.08 0.19 0.16 0.38 0.18 0.4 0.01 0.04-0.13 0.05-0.65 0.05h-0.65l-0.76 0.19c-0.65 0.16-0.82 0.22-1.11 0.37-0.18 0.1-0.59 0.34-0.91 0.53-0.31 0.18-0.82 0.51-1.14 0.72-0.31 0.21-0.82 0.57-1.13 0.8-0.3 0.23-0.75 0.58-0.99 0.77-0.24 0.2-0.63 0.55-0.88 0.77s-0.71 0.67-1.03 0.99c-0.31 0.32-0.7 0.72-0.85 0.89s-0.42 0.5-0.61 0.73-0.49 0.61-0.67 0.85c-0.17 0.23-0.48 0.65-0.67 0.94-0.2 0.28-0.51 0.76-0.69 1.05s-0.48 0.78-0.66 1.09c-0.18 0.32-0.53 0.99-0.79 1.51-0.25 0.51-0.59 1.24-0.74 1.61-0.16 0.38-0.39 0.93-0.5 1.22-0.11 0.3-0.31 0.85-0.43 1.23-0.13 0.37-0.32 1-0.43 1.39-0.11 0.38-0.26 0.97-0.34 1.29s-0.19 0.83-0.25 1.13c-0.06 0.29-0.15 0.78-0.2 1.07-0.05 0.3-0.12 0.79-0.16 1.1s-0.1 0.81-0.13 1.12c-0.03 0.32-0.07 1-0.09 1.52-0.03 0.73-0.03 1.17 0 1.86 0.02 0.51 0.07 1.21 0.11 1.56s0.12 0.86 0.17 1.13c0.04 0.26 0.13 0.68 0.19 0.93s0.19 0.66 0.27 0.92c0.09 0.27 0.23 0.64 0.32 0.84s0.28 0.58 0.42 0.84 0.34 0.59 0.44 0.74 0.23 0.34 0.3 0.42c0.07 0.09 0.16 0.16 0.2 0.16 0.03 0 0.24 0.14 0.45 0.32 0.3 0.25 0.5 0.38 0.87 0.57 0.27 0.14 0.66 0.33 0.88 0.42s0.59 0.24 0.83 0.32c0.24 0.09 0.66 0.22 0.95 0.3s0.76 0.2 1.06 0.26c0.3 0.05 0.74 0.13 0.99 0.16 0.24 0.03 0.71 0.07 1.04 0.09 0.38 0.02 1.01 0.02 1.75 0 0.63-0.02 1.45-0.06 1.82-0.09s0.99-0.09 1.38-0.14 0.9-0.13 1.14-0.17 0.71-0.13 1.06-0.2 0.89-0.19 1.2-0.27c0.32-0.08 0.81-0.2 1.08-0.28 0.28-0.08 0.86-0.27 1.3-0.41 0.43-0.15 1.13-0.4 1.54-0.57 0.42-0.17 0.97-0.4 1.22-0.51 0.26-0.12 0.81-0.38 1.22-0.59 0.42-0.22 1.03-0.54 1.35-0.73 0.33-0.19 0.78-0.46 1.01-0.6 0.23-0.15 0.66-0.43 0.97-0.64 0.3-0.21 0.8-0.57 1.11-0.8s0.74-0.57 0.96-0.74c0.21-0.18 0.6-0.51 0.86-0.74 0.25-0.22 0.7-0.64 0.99-0.93 0.28-0.28 0.72-0.75 0.97-1.04s0.61-0.71 0.79-0.93c0.18-0.23 0.47-0.6 0.64-0.83s0.49-0.69 0.72-1.02c0.22-0.34 0.57-0.9 0.78-1.24 0.21-0.35 0.47-0.83 0.59-1.07 0.12-0.23 0.26-0.57 0.31-0.75l0.1-0.32 0.01-0.98c0.01-0.54 0.02-0.98 0.02-0.98 0.01 0 0.2 0.09 0.42 0.19 0.23 0.11 0.62 0.27 0.88 0.37 0.26 0.09 0.66 0.22 0.9 0.29 0.24 0.06 0.63 0.16 0.88 0.21s0.66 0.11 0.93 0.14 0.86 0.07 1.33 0.08c0.67 0.01 0.95 0.01 1.33-0.04 0.26-0.03 0.69-0.1 0.93-0.15 0.25-0.05 0.63-0.14 0.85-0.2s0.59-0.18 0.83-0.27c0.24-0.08 0.62-0.23 0.85-0.34 0.22-0.1 0.58-0.28 0.8-0.4s0.6-0.35 0.84-0.51c0.25-0.17 0.63-0.44 0.85-0.61 0.21-0.18 0.58-0.51 0.82-0.74s0.57-0.58 0.72-0.76c0.16-0.19 0.3-0.33 0.32-0.32 0.01 0.01 0.9 3.88 1.98 8.6 1.23 5.36 2.01 8.72 2.09 8.95 0.07 0.2 0.21 0.53 0.31 0.73 0.1 0.21 0.28 0.53 0.41 0.72 0.13 0.2 0.35 0.49 0.49 0.66 0.15 0.16 0.42 0.44 0.6 0.6 0.19 0.17 0.5 0.41 0.69 0.53 0.18 0.13 0.51 0.32 0.73 0.43s0.56 0.25 0.76 0.32 0.52 0.16 0.71 0.2c0.27 0.06 0.47 0.08 0.91 0.08 0.31 0 0.76-0.02 1-0.04s0.6-0.07 0.81-0.11 0.54-0.13 0.75-0.2c0.2-0.07 0.5-0.18 0.67-0.26 0.16-0.08 0.4-0.2 0.54-0.28s0.38-0.24 0.54-0.36c0.17-0.11 0.43-0.33 0.6-0.48 0.16-0.14 0.42-0.42 0.57-0.61 0.19-0.22 1.58-2.34 4.09-6.22 2.09-3.23 3.96-6.14 4.16-6.47s0.52-0.88 0.72-1.24c0.2-0.35 0.54-1.01 0.77-1.47 0.23-0.45 0.53-1.08 0.68-1.4 0.14-0.31 0.36-0.84 0.5-1.17 0.13-0.32 0.36-0.89 0.49-1.25 0.14-0.37 0.37-1.02 0.51-1.44 0.14-0.43 0.36-1.14 0.48-1.58 0.13-0.45 0.32-1.16 0.42-1.58 0.1-0.43 0.24-1.1 0.32-1.49 0.08-0.4 0.2-1.09 0.27-1.53 0.07-0.45 0.17-1.16 0.22-1.58 0.05-0.43 0.11-1.1 0.14-1.49 0.03-0.4 0.08-1.21 0.1-1.81 0.03-0.79 0.03-1.4 0-2.28-0.02-0.66-0.04-1.46-0.04-1.78v-0.58l0.74-0.57c0.41-0.31 1.04-0.8 1.4-1.08 0.35-0.29 0.92-0.75 1.25-1.03 0.34-0.28 0.94-0.79 1.33-1.14 0.4-0.34 0.93-0.82 1.19-1.05 0.26-0.24 0.92-0.86 1.47-1.38 0.55-0.53 1.37-1.35 1.83-1.82 0.46-0.48 1.03-1.08 1.28-1.35s0.7-0.77 1.01-1.11c0.31-0.35 0.83-0.96 1.17-1.35 0.33-0.4 0.93-1.12 1.31-1.6 0.39-0.48 0.92-1.16 1.17-1.49 0.26-0.34 0.7-0.94 0.99-1.33 0.29-0.4 0.71-0.99 0.93-1.31 0.23-0.33 0.68-0.98 0.99-1.46 0.32-0.47 0.74-1.11 0.93-1.42 0.19-0.3 0.58-0.92 0.85-1.37 0.28-0.45 0.72-1.2 0.98-1.66 0.26-0.45 0.6-1.06 0.76-1.33 0.15-0.28 0.49-0.91 0.75-1.4 0.26-0.5 0.66-1.26 0.87-1.69 0.22-0.44 0.59-1.19 0.81-1.67 0.23-0.49 0.53-1.14 0.68-1.46 0.14-0.32 0.43-0.97 0.63-1.45 0.21-0.48 0.54-1.29 0.75-1.8 0.2-0.51 0.53-1.34 0.71-1.84 0.19-0.5 0.47-1.27 0.62-1.7 0.15-0.44 0.36-1.05 0.47-1.37 0.1-0.32 0.28-0.86 0.39-1.21 0.11-0.34 0.3-0.97 0.43-1.41 0.13-0.43 0.3-1.06 0.39-1.38 0.09-0.33 0.26-0.98 0.38-1.44 0.12-0.47 0.32-1.27 0.44-1.8 0.12-0.52 0.31-1.43 0.43-2.01 0.11-0.58 0.28-1.44 0.36-1.9 0.07-0.47 0.2-1.24 0.26-1.71 0.07-0.48 0.18-1.3 0.24-1.83 0.06-0.54 0.13-1.26 0.16-1.62s0.07-0.95 0.1-1.31c0.03-0.41 0.05-1.42 0.05-2.63 0-1.3-0.02-2.15-0.05-2.53-0.03-0.32-0.08-0.86-0.12-1.22s-0.12-0.95-0.18-1.31c-0.06-0.37-0.16-0.89-0.21-1.15-0.06-0.27-0.17-0.68-0.24-0.92-0.06-0.24-0.19-0.64-0.28-0.91-0.09-0.26-0.25-0.65-0.34-0.87-0.1-0.22-0.29-0.59-0.42-0.83-0.13-0.25-0.33-0.58-0.44-0.74s-0.3-0.4-0.42-0.54l-0.21-0.26h-0.14c-0.12 0-0.24-0.07-0.84-0.5-0.39-0.27-0.84-0.57-0.99-0.66-0.14-0.09-0.43-0.25-0.64-0.35-0.2-0.1-0.55-0.26-0.77-0.35s-0.58-0.22-0.81-0.3-0.65-0.21-0.94-0.28c-0.28-0.08-0.79-0.2-1.13-0.27-0.33-0.07-0.89-0.16-1.24-0.21-0.34-0.05-0.89-0.12-1.2-0.15-0.32-0.03-0.84-0.07-1.17-0.09s-1.03-0.04-1.56-0.05c-0.54-0.01-1.14-0.01-1.35 0zm1.67 7.79c1.33 0.01 1.9 0.03 2.3 0.07 0.3 0.03 0.74 0.09 0.99 0.13s0.64 0.12 0.87 0.18 0.52 0.15 0.65 0.19c0.12 0.05 0.31 0.13 0.41 0.18 0.14 0.07 0.21 0.14 0.26 0.25 0.05 0.08 0.14 0.29 0.2 0.47 0.07 0.17 0.18 0.53 0.25 0.8 0.07 0.26 0.16 0.66 0.2 0.9 0.04 0.23 0.09 0.64 0.12 0.91s0.07 0.75 0.09 1.08c0.02 0.32 0.04 1.03 0.04 1.56 0 0.54-0.02 1.28-0.04 1.66-0.02 0.37-0.05 0.89-0.07 1.15-0.02 0.25-0.07 0.79-0.11 1.2-0.04 0.4-0.13 1.15-0.2 1.65-0.06 0.51-0.19 1.31-0.26 1.78-0.08 0.48-0.25 1.39-0.38 2.03s-0.33 1.58-0.45 2.08c-0.12 0.51-0.32 1.29-0.43 1.75-0.12 0.45-0.3 1.11-0.4 1.45-0.1 0.35-0.28 0.98-0.41 1.41-0.13 0.42-0.35 1.12-0.49 1.54-0.14 0.43-0.38 1.13-0.53 1.56-0.16 0.44-0.39 1.08-0.52 1.44-0.14 0.36-0.42 1.09-0.64 1.62-0.21 0.54-0.57 1.41-0.8 1.93-0.22 0.52-0.57 1.31-0.78 1.75-0.2 0.45-0.68 1.43-1.06 2.19s-0.83 1.65-1 1.96c-0.17 0.32-0.51 0.92-0.75 1.35-0.23 0.42-0.67 1.18-0.97 1.67-0.29 0.49-0.75 1.23-1 1.64-0.26 0.4-0.65 1-0.87 1.32-0.22 0.33-0.63 0.94-0.93 1.37-0.3 0.42-0.89 1.24-1.32 1.82-0.43 0.57-1.02 1.34-1.31 1.7-0.3 0.37-0.74 0.91-0.99 1.21-0.24 0.29-0.67 0.79-0.95 1.11s-0.77 0.87-1.09 1.22c-0.33 0.36-1.15 1.2-1.82 1.87s-1.52 1.5-1.89 1.83c-0.37 0.34-0.99 0.9-1.38 1.24-0.4 0.35-1.01 0.88-1.37 1.17-0.35 0.3-0.97 0.81-1.38 1.13-0.4 0.32-1.08 0.84-1.5 1.16-0.43 0.33-1.16 0.86-1.63 1.2-0.46 0.33-1.38 0.96-2.05 1.4-0.66 0.44-1.5 0.98-1.86 1.21-0.37 0.22-0.93 0.56-1.24 0.75-0.32 0.19-0.88 0.51-1.24 0.72-0.37 0.21-1.03 0.58-1.48 0.82-0.44 0.24-1.3 0.68-1.9 0.99-0.6 0.3-1.48 0.73-1.96 0.95-0.47 0.22-1.17 0.54-1.56 0.71s-1.04 0.45-1.46 0.62-1.11 0.45-1.54 0.62c-0.44 0.17-1.17 0.45-1.64 0.61-0.46 0.17-1.28 0.45-1.81 0.63-0.54 0.18-1.25 0.41-1.6 0.51l-0.62 0.2-10.03-10.03-10.03-10.03 0.2-0.62c0.1-0.34 0.35-1.12 0.55-1.72 0.21-0.6 0.48-1.39 0.61-1.76 0.14-0.37 0.38-1.01 0.54-1.44 0.17-0.42 0.43-1.09 0.59-1.47 0.16-0.39 0.43-1.04 0.62-1.46 0.18-0.41 0.48-1.09 0.67-1.51 0.19-0.41 0.62-1.29 0.95-1.95 0.33-0.67 0.77-1.52 0.97-1.89 0.2-0.38 0.55-1.02 0.78-1.42 0.22-0.41 0.7-1.22 1.05-1.8s0.84-1.38 1.09-1.78c0.26-0.39 0.72-1.1 1.04-1.58 0.32-0.47 0.79-1.15 1.05-1.51 0.25-0.35 0.69-0.95 0.97-1.33s0.75-0.99 1.04-1.36c0.29-0.38 0.74-0.94 1-1.26s0.76-0.91 1.12-1.33c0.35-0.41 0.87-1 1.15-1.31 0.27-0.31 0.7-0.78 0.95-1.04 0.25-0.27 0.8-0.84 1.22-1.27 0.43-0.43 1.11-1.1 1.51-1.48 0.41-0.38 0.94-0.87 1.17-1.08 0.24-0.21 0.71-0.63 1.04-0.92 0.34-0.29 0.9-0.76 1.24-1.04 0.35-0.29 0.89-0.72 1.21-0.97 0.31-0.25 0.86-0.67 1.22-0.94s0.98-0.73 1.4-1.02c0.41-0.3 1.05-0.74 1.42-0.99s0.98-0.65 1.36-0.9c0.39-0.25 1.04-0.65 1.44-0.9 0.41-0.25 1.05-0.63 1.42-0.84 0.38-0.22 0.99-0.57 1.37-0.78 0.37-0.2 1.08-0.58 1.56-0.83 0.48-0.26 1.24-0.64 1.67-0.85 0.44-0.21 1.12-0.53 1.51-0.72 0.4-0.18 1.05-0.47 1.46-0.65 0.4-0.18 1.12-0.48 1.59-0.68 0.48-0.19 1.22-0.48 1.64-0.64 0.43-0.17 1.17-0.44 1.65-0.61 0.49-0.18 1.28-0.45 1.76-0.61 0.49-0.16 1.24-0.39 1.68-0.53 0.43-0.13 1.1-0.32 1.49-0.43 0.38-0.11 1.2-0.33 1.81-0.48 0.61-0.16 1.41-0.35 1.78-0.43 0.37-0.09 0.97-0.22 1.35-0.29 0.38-0.08 0.99-0.2 1.37-0.27 0.37-0.06 1.04-0.18 1.48-0.25 0.45-0.07 1.11-0.17 1.48-0.22 0.36-0.04 1.04-0.12 1.51-0.17 0.46-0.05 1.08-0.11 1.38-0.13 0.3-0.03 0.75-0.06 1.01-0.07 0.25-0.02 1.26-0.03 2.22-0.02v-0.01zm-11.68 7.04c-0.45-0.01-0.98 0-1.16 0.02s-0.53 0.06-0.79 0.1c-0.25 0.05-0.63 0.12-0.83 0.17-0.21 0.05-0.62 0.17-0.91 0.27-0.3 0.1-0.73 0.27-0.98 0.38-0.24 0.11-0.62 0.29-0.83 0.41-0.22 0.12-0.57 0.34-0.79 0.48s-0.56 0.39-0.75 0.55c-0.2 0.16-0.51 0.43-0.7 0.61-0.19 0.17-0.48 0.47-0.64 0.65-0.17 0.19-0.44 0.52-0.6 0.74-0.17 0.22-0.4 0.56-0.53 0.76-0.12 0.19-0.34 0.58-0.48 0.86s-0.34 0.71-0.44 0.97-0.24 0.67-0.31 0.92c-0.07 0.24-0.17 0.64-0.22 0.88-0.05 0.23-0.11 0.63-0.14 0.87s-0.07 0.68-0.08 0.97c-0.01 0.3-0.01 0.76 0.02 1.07 0.02 0.29 0.07 0.71 0.1 0.91 0.03 0.21 0.09 0.57 0.14 0.79 0.05 0.23 0.18 0.68 0.28 0.99 0.11 0.32 0.28 0.77 0.38 1.01s0.29 0.62 0.42 0.86 0.36 0.61 0.5 0.83c0.15 0.22 0.41 0.58 0.58 0.79 0.17 0.22 0.53 0.61 0.8 0.88 0.27 0.26 0.66 0.63 0.88 0.8 0.21 0.17 0.57 0.43 0.79 0.57 0.22 0.15 0.56 0.36 0.77 0.48 0.2 0.11 0.52 0.27 0.71 0.36s0.55 0.24 0.81 0.34c0.27 0.09 0.7 0.23 0.96 0.3 0.27 0.07 0.67 0.16 0.88 0.2 0.22 0.04 0.54 0.09 0.72 0.11s0.59 0.05 0.9 0.06c0.34 0.01 0.8 0 1.12-0.02 0.31-0.02 0.75-0.07 0.99-0.11s0.61-0.12 0.82-0.17 0.56-0.15 0.77-0.22c0.22-0.06 0.57-0.19 0.78-0.28 0.21-0.08 0.57-0.25 0.81-0.37 0.23-0.12 0.6-0.32 0.82-0.45s0.61-0.41 0.88-0.61c0.33-0.24 0.69-0.56 1.12-0.99s0.74-0.78 0.99-1.12c0.2-0.26 0.47-0.66 0.6-0.88 0.14-0.21 0.35-0.59 0.47-0.84 0.13-0.25 0.3-0.62 0.38-0.83s0.2-0.52 0.25-0.7c0.06-0.18 0.16-0.51 0.21-0.73 0.06-0.23 0.14-0.61 0.18-0.85s0.09-0.65 0.12-0.92c0.02-0.3 0.03-0.76 0.02-1.22-0.02-0.45-0.05-0.93-0.1-1.24-0.04-0.27-0.14-0.77-0.22-1.09-0.08-0.33-0.22-0.79-0.3-1.03-0.09-0.23-0.24-0.61-0.34-0.83-0.09-0.22-0.27-0.57-0.38-0.77-0.11-0.21-0.28-0.49-0.37-0.62-0.09-0.14-0.26-0.39-0.38-0.56-0.12-0.16-0.32-0.42-0.44-0.57-0.13-0.15-0.43-0.48-0.67-0.72s-0.62-0.59-0.85-0.78c-0.23-0.18-0.57-0.44-0.76-0.57-0.18-0.12-0.54-0.34-0.79-0.48s-0.62-0.33-0.82-0.42-0.54-0.23-0.75-0.31-0.58-0.2-0.83-0.27c-0.25-0.06-0.61-0.15-0.81-0.19-0.19-0.04-0.53-0.1-0.75-0.13-0.23-0.03-0.77-0.06-1.23-0.07zm-0.52 7.87c0.07-0.01 0.26 0 0.43 0 0.17 0.01 0.41 0.04 0.53 0.07s0.35 0.1 0.51 0.16 0.4 0.19 0.55 0.29c0.14 0.09 0.34 0.24 0.43 0.32s0.25 0.26 0.36 0.4c0.11 0.15 0.27 0.4 0.35 0.55 0.08 0.16 0.18 0.42 0.22 0.58 0.07 0.24 0.09 0.37 0.09 0.84 0 0.43-0.02 0.62-0.07 0.81-0.04 0.14-0.13 0.39-0.2 0.55-0.08 0.16-0.19 0.37-0.26 0.46-0.06 0.1-0.21 0.27-0.32 0.39-0.11 0.11-0.29 0.28-0.42 0.37-0.12 0.08-0.35 0.22-0.52 0.3s-0.45 0.18-0.62 0.22c-0.26 0.06-0.43 0.08-0.81 0.08-0.4 0-0.54-0.02-0.83-0.09-0.19-0.05-0.46-0.16-0.61-0.23s-0.36-0.2-0.47-0.27c-0.1-0.07-0.28-0.23-0.4-0.34-0.11-0.11-0.28-0.32-0.37-0.46-0.09-0.13-0.21-0.36-0.27-0.49-0.05-0.13-0.13-0.34-0.16-0.45-0.03-0.12-0.07-0.36-0.09-0.53-0.02-0.22-0.02-0.42 0.01-0.65 0.02-0.18 0.08-0.46 0.13-0.62s0.13-0.37 0.18-0.47 0.15-0.27 0.23-0.39 0.21-0.28 0.29-0.37 0.24-0.23 0.36-0.33 0.33-0.23 0.46-0.3 0.35-0.17 0.48-0.22c0.14-0.05 0.35-0.1 0.47-0.12 0.12-0.03 0.27-0.05 0.34-0.06zm-21.47 9.95c-0.61 0-1.19 0-1.28 0.01-0.09 0-0.38 0.04-0.64 0.07-0.27 0.03-0.72 0.09-0.99 0.14-0.28 0.05-0.72 0.15-0.99 0.21-0.27 0.07-0.69 0.19-0.95 0.27-0.26 0.09-0.69 0.24-0.96 0.35-0.27 0.1-0.69 0.29-0.94 0.4-0.24 0.12-0.65 0.33-0.91 0.47-0.25 0.15-0.71 0.43-1.02 0.63-0.31 0.21-0.75 0.53-0.98 0.72-0.24 0.18-0.62 0.52-0.87 0.73-0.24 0.22-0.63 0.61-0.87 0.88-0.24 0.26-0.56 0.63-0.71 0.81-0.15 0.19-0.39 0.52-0.55 0.74s-0.39 0.58-0.53 0.79c-0.14 0.22-0.42 0.74-0.63 1.16-0.21 0.41-0.45 0.94-0.55 1.18-0.09 0.24-0.23 0.62-0.31 0.86s-0.21 0.68-0.29 0.97c-0.07 0.3-0.18 0.75-0.23 1.01s-0.11 0.67-0.14 0.91c-0.03 0.25-0.08 0.72-0.1 1.05-0.02 0.34-0.03 0.88-0.02 1.29 0.02 0.39 0.05 0.92 0.08 1.19s0.08 0.68 0.12 0.92 0.12 0.61 0.17 0.84 0.14 0.59 0.2 0.81c0.06 0.21 0.2 0.64 0.3 0.94 0.11 0.3 0.29 0.75 0.4 1.01 0.11 0.25 0.31 0.66 0.44 0.92s0.38 0.69 0.54 0.95 0.4 0.64 0.54 0.83 0.35 0.48 0.47 0.64c0.13 0.15 0.38 0.45 0.56 0.65 0.18 0.21 0.55 0.59 0.81 0.85 0.26 0.25 0.63 0.59 0.82 0.75s0.5 0.4 0.69 0.54c0.19 0.15 0.48 0.35 0.64 0.46 0.17 0.11 0.46 0.29 0.65 0.4 0.18 0.12 0.52 0.3 0.73 0.42 0.22 0.11 0.58 0.29 0.81 0.39 0.23 0.11 0.67 0.28 0.97 0.4 0.31 0.11 0.75 0.26 0.99 0.33s0.54 0.15 0.66 0.18c0.13 0.04 0.39 0.09 0.57 0.13 0.17 0.04 0.6 0.11 0.95 0.17 0.34 0.05 0.97 0.11 1.4 0.13 0.62 0.03 0.95 0.03 1.53 0 0.41-0.03 0.94-0.07 1.16-0.1 0.23-0.03 0.63-0.09 0.9-0.14s0.68-0.14 0.92-0.2c0.23-0.06 0.65-0.19 0.93-0.27 0.28-0.1 0.69-0.24 0.92-0.33 0.22-0.09 0.69-0.29 1.02-0.46 0.34-0.16 0.79-0.39 1.01-0.52 0.21-0.12 0.59-0.36 0.82-0.52 0.24-0.15 0.59-0.4 0.78-0.54 0.19-0.15 0.47-0.37 0.62-0.5 0.15-0.12 0.44-0.39 0.65-0.58s0.55-0.54 0.76-0.78c0.21-0.23 0.52-0.59 0.69-0.81 0.17-0.21 0.44-0.57 0.59-0.78 0.15-0.22 0.41-0.63 0.59-0.92 0.17-0.28 0.43-0.78 0.59-1.09 0.15-0.32 0.37-0.8 0.48-1.08 0.1-0.28 0.27-0.74 0.36-1.02 0.09-0.29 0.22-0.76 0.29-1.05 0.06-0.28 0.15-0.66 0.18-0.82 0.03-0.17 0.09-0.56 0.13-0.87 0.05-0.37 0.08-0.86 0.09-1.5 0.02-0.61 0.01-1.15-0.02-1.5-0.02-0.29-0.07-0.76-0.11-1.04-0.04-0.27-0.13-0.76-0.2-1.08-0.07-0.31-0.19-0.81-0.28-1.09-0.09-0.29-0.22-0.7-0.3-0.92s-0.22-0.58-0.32-0.79c-0.09-0.22-0.26-0.57-0.37-0.79-0.1-0.22-0.29-0.56-0.41-0.77-0.12-0.2-0.29-0.49-0.38-0.63s-0.3-0.45-0.47-0.68c-0.17-0.24-0.47-0.63-0.66-0.87-0.2-0.23-0.55-0.62-0.78-0.85-0.22-0.24-0.61-0.61-0.86-0.83-0.25-0.21-0.68-0.56-0.96-0.77s-0.74-0.53-1.02-0.71c-0.29-0.17-0.78-0.45-1.09-0.61-0.32-0.17-0.81-0.4-1.1-0.52-0.28-0.12-0.77-0.31-1.09-0.41-0.32-0.11-0.85-0.26-1.18-0.34-0.32-0.08-0.78-0.18-1.02-0.22s-0.63-0.1-0.88-0.13c-0.29-0.04-0.83-0.06-1.56-0.07zm-31.38 6.39c0.04 0 0.06 0 0.06 0.01s-0.11 0.22-0.25 0.46c-0.14 0.25-0.47 0.83-0.73 1.31-0.26 0.47-0.69 1.27-0.96 1.78-0.26 0.5-0.7 1.36-0.97 1.92-0.27 0.55-0.68 1.42-0.91 1.92s-0.64 1.42-0.9 2.04c-0.27 0.61-0.66 1.55-0.86 2.07-0.21 0.53-0.54 1.37-0.72 1.87-0.19 0.5-0.35 0.95-0.36 1.01-0.03 0.08-0.05 0.09-0.12 0.08-0.05-0.01-3.89-0.88-8.53-1.93-4.64-1.06-8.44-1.93-8.44-1.94s0.65-0.44 1.43-0.96c0.79-0.52 2.33-1.53 3.42-2.26 1.1-0.73 2.38-1.57 2.84-1.88 0.47-0.3 1.07-0.7 1.35-0.87s0.75-0.45 1.04-0.62c0.3-0.16 0.78-0.42 1.06-0.57 0.29-0.15 0.77-0.39 1.08-0.53 0.31-0.15 0.73-0.34 0.93-0.42 0.21-0.09 0.64-0.27 0.96-0.39 0.31-0.13 0.89-0.34 1.27-0.47 0.39-0.13 1-0.32 1.37-0.43 0.37-0.1 0.96-0.26 1.33-0.35 0.36-0.09 0.9-0.21 1.2-0.27s0.79-0.15 1.1-0.2c0.3-0.05 0.87-0.13 1.25-0.18 0.39-0.05 0.96-0.11 1.26-0.13 0.31-0.02 0.6-0.05 0.65-0.05 0.05-0.01 0.12-0.01 0.15-0.02zm31.2 1.43c0.32 0 0.71 0.01 0.88 0.03s0.48 0.07 0.68 0.11c0.21 0.05 0.6 0.15 0.86 0.24 0.27 0.08 0.68 0.25 0.92 0.37s0.6 0.32 0.81 0.46 0.52 0.37 0.7 0.52 0.46 0.41 0.63 0.59c0.17 0.17 0.41 0.45 0.53 0.62 0.13 0.16 0.31 0.43 0.41 0.59s0.28 0.49 0.39 0.73c0.12 0.23 0.28 0.62 0.35 0.86 0.08 0.23 0.19 0.63 0.24 0.88s0.11 0.66 0.13 0.91c0.02 0.27 0.03 0.65 0.02 0.89-0.02 0.22-0.05 0.58-0.08 0.79-0.03 0.2-0.1 0.55-0.16 0.77-0.05 0.22-0.16 0.56-0.23 0.76-0.08 0.19-0.22 0.51-0.31 0.7-0.1 0.2-0.24 0.46-0.33 0.59-0.08 0.14-0.25 0.39-0.38 0.57-0.14 0.18-0.39 0.48-0.57 0.66-0.17 0.19-0.46 0.46-0.64 0.61s-0.49 0.38-0.7 0.52c-0.21 0.13-0.57 0.34-0.81 0.46-0.24 0.11-0.59 0.26-0.79 0.33s-0.53 0.17-0.74 0.22c-0.2 0.05-0.56 0.12-0.8 0.15-0.23 0.03-0.66 0.05-0.96 0.05-0.29 0-0.72-0.02-0.95-0.05s-0.59-0.1-0.79-0.14c-0.2-0.05-0.53-0.15-0.74-0.22-0.2-0.08-0.57-0.23-0.81-0.34-0.23-0.12-0.59-0.32-0.8-0.46s-0.53-0.37-0.7-0.52c-0.18-0.15-0.47-0.41-0.63-0.59-0.17-0.18-0.41-0.45-0.54-0.62-0.12-0.16-0.3-0.42-0.4-0.57-0.09-0.16-0.25-0.45-0.35-0.64-0.1-0.2-0.24-0.52-0.31-0.71-0.07-0.2-0.18-0.54-0.24-0.76-0.05-0.22-0.13-0.58-0.16-0.79-0.05-0.28-0.06-0.61-0.07-1.08 0-0.47 0.02-0.81 0.07-1.08 0.03-0.22 0.11-0.58 0.16-0.79 0.06-0.22 0.17-0.56 0.24-0.76 0.07-0.19 0.21-0.51 0.31-0.71s0.26-0.48 0.35-0.64c0.1-0.15 0.28-0.41 0.4-0.57 0.13-0.17 0.37-0.45 0.54-0.62 0.16-0.18 0.45-0.44 0.63-0.59 0.17-0.15 0.49-0.38 0.7-0.52 0.2-0.13 0.57-0.34 0.8-0.46 0.24-0.11 0.62-0.27 0.85-0.35s0.57-0.18 0.76-0.22 0.5-0.1 0.7-0.13c0.19-0.02 0.61-0.05 0.93-0.05zm-36.44 24.98c0.02 0 4.28 4.24 9.47 9.43 6.77 6.77 9.42 9.44 9.4 9.48-0.02 0.02-0.25 0.36-0.52 0.75-0.27 0.38-0.61 0.83-0.77 0.99-0.15 0.16-0.4 0.37-0.54 0.48-0.15 0.1-0.4 0.24-0.57 0.32-0.16 0.08-0.43 0.18-0.61 0.23-0.17 0.05-0.47 0.11-0.68 0.13-0.27 0.03-0.46 0.03-0.74 0-0.2-0.02-0.49-0.07-0.64-0.11-0.16-0.04-0.45-0.15-0.64-0.25-0.2-0.09-0.48-0.25-0.63-0.36-0.17-0.12-2.68-2.58-7.45-7.31-3.96-3.92-7.25-7.21-7.33-7.3-0.07-0.1-0.2-0.29-0.28-0.42-0.08-0.14-0.2-0.37-0.26-0.51-0.06-0.15-0.14-0.4-0.18-0.55-0.04-0.17-0.08-0.45-0.09-0.73s0-0.57 0.03-0.75c0.02-0.17 0.08-0.43 0.13-0.59s0.15-0.42 0.23-0.58 0.22-0.38 0.3-0.51c0.09-0.12 0.24-0.3 0.34-0.41s0.27-0.27 0.38-0.36c0.12-0.08 0.52-0.36 0.91-0.61s0.72-0.46 0.74-0.46zm45.27 13.73c0.01 0 0.02 0.11 0.01 0.24s-0.05 0.57-0.09 0.98c-0.04 0.4-0.12 1.07-0.18 1.47-0.06 0.41-0.18 1.1-0.27 1.53-0.08 0.43-0.23 1.08-0.32 1.44s-0.24 0.9-0.32 1.21c-0.09 0.3-0.25 0.8-0.35 1.11-0.1 0.3-0.29 0.84-0.43 1.2-0.13 0.35-0.33 0.85-0.44 1.11s-0.34 0.77-0.51 1.13c-0.17 0.37-0.47 0.97-0.67 1.34-0.2 0.38-0.51 0.94-0.7 1.26s-0.43 0.72-0.54 0.88c-0.11 0.17-0.21 0.29-0.22 0.28-0.02-0.01-1.27 1.88-2.78 4.2s-2.75 4.22-2.76 4.22c-0.01 0.01-0.89-3.81-1.95-8.48s-1.93-8.51-1.93-8.53c0-0.03 0.04-0.06 0.1-0.07 0.05-0.01 0.48-0.16 0.94-0.33s1.23-0.46 1.71-0.64c0.47-0.18 1.27-0.5 1.77-0.71 0.51-0.21 1.24-0.52 1.64-0.69 0.39-0.17 1.12-0.5 1.62-0.73 0.49-0.23 1.46-0.69 2.15-1.04 0.69-0.34 1.7-0.85 2.23-1.14 0.54-0.28 1.26-0.68 1.62-0.88 0.35-0.2 0.66-0.36 0.67-0.36zm-48.22 2.94l2.59 2.6 2.58 2.59-0.02 0.2c-0.01 0.11-0.13 1.6-0.26 3.31-0.12 1.71-0.24 3.14-0.25 3.18s-0.17 0.31-0.37 0.61c-0.19 0.3-0.5 0.73-0.67 0.97-0.18 0.24-0.51 0.65-0.74 0.92-0.22 0.26-0.68 0.76-1.02 1.1-0.34 0.33-0.81 0.78-1.06 0.99-0.25 0.2-0.59 0.48-0.75 0.61-0.17 0.13-0.5 0.36-0.73 0.52-0.22 0.16-0.71 0.48-1.07 0.7-0.37 0.22-1.01 0.57-1.44 0.78-0.42 0.21-0.96 0.46-1.18 0.56-0.23 0.1-0.69 0.28-1.02 0.4-0.34 0.13-0.87 0.31-1.19 0.41s-0.89 0.26-1.26 0.36c-0.38 0.1-0.97 0.23-1.31 0.3-0.35 0.07-0.92 0.17-1.26 0.22-0.35 0.05-0.93 0.11-1.29 0.15-0.42 0.03-1.02 0.06-1.6 0.06-0.52 0-1.11-0.02-1.31-0.04-0.21-0.03-0.55-0.08-0.76-0.12s-0.46-0.1-0.56-0.13-0.24-0.09-0.31-0.14c-0.07-0.04-0.19-0.15-0.27-0.25-0.08-0.09-0.2-0.29-0.26-0.43-0.06-0.15-0.15-0.42-0.19-0.6s-0.08-0.53-0.09-0.78c-0.02-0.24-0.02-0.71 0-1.04 0.01-0.33 0.05-0.79 0.08-1.02s0.1-0.65 0.15-0.92 0.16-0.81 0.26-1.21c0.1-0.39 0.25-0.96 0.35-1.26 0.09-0.29 0.23-0.74 0.32-0.99 0.08-0.24 0.24-0.66 0.34-0.93 0.11-0.27 0.29-0.72 0.42-1 0.12-0.29 0.32-0.74 0.45-1.01s0.37-0.74 0.53-1.04c0.16-0.31 0.45-0.8 0.62-1.1 0.18-0.29 0.47-0.75 0.65-1.02s0.53-0.76 0.78-1.1c0.26-0.34 0.63-0.8 0.83-1.04s0.63-0.69 0.95-1.01c0.31-0.32 0.79-0.76 1.06-0.98 0.27-0.23 0.69-0.57 0.95-0.76s0.64-0.46 0.85-0.6c0.2-0.14 0.51-0.34 0.68-0.44 0.27-0.16 0.35-0.18 0.56-0.2 0.14-0.01 1.34-0.09 2.67-0.16 1.34-0.08 2.63-0.16 2.88-0.18 0.24-0.01 0.5-0.03 0.57-0.03l0.12-0.01zm-685.91 50.24c-10.54 0-19.86 5.22-25.37 13.14-0.27 0.4-0.54 0.8-0.79 1.21-2.82 4.5-4.44 9.78-4.44 15.43 0 16.31 13.57 29.6 30.29 29.77h0.31c14.78 0 27.15-10.25 29.99-23.82v-0.01l-8.34-5.94-8.34-5.95h-10.57v11.9h11.35c-2.41 5.09-7.81 8.65-14.09 8.65-0.1 0-0.2-0.01-0.31-0.01-7.32-0.14-13.4-5.12-14.81-11.69-0.1-0.47-0.18-0.94-0.23-1.43-0.05-0.48-0.08-0.97-0.08-1.47 0-0.51 0.03-1 0.08-1.49 0.79-7.36 7.37-13.12 15.35-13.12 3.59 0 6.91 1.17 9.53 3.12 0.37 0.28 0.73 0.57 1.08 0.88l10.72-10.72c-5.52-5.22-13.04-8.45-21.33-8.45zm45.51 0.91v15.17h28.11c3.47 0 6.27 2.81 6.27 6.27 0 3.25-2.47 5.92-5.63 6.24-0.21 0.02-0.42 0.03-0.64 0.03h-9.14l-6.07 15.17 12.21 14.77h21.24l-13.91-15.21c9.77-2 17.11-10.64 17.11-21 0-11.84-9.6-21.44-21.44-21.44h-28.11zm73.83 0v16.72 2.98 37.95h16.68v-37.95-2.97-0.01h0.04l-0.04-0.03v-16.67h-16.66l-0.02-0.02zm59.45 0l-16.69 15.17v42.48h16.69v-0.01h10.6c0.5 0 1-0.01 1.49-0.04 6.4-0.32 12.26-2.7 16.9-6.49 0.36-0.29 0.71-0.59 1.05-0.9 1.03-0.92 1.99-1.92 2.88-2.98 0.29-0.36 0.58-0.72 0.86-1.08 3.61-4.79 5.75-10.74 5.75-17.22 0-15.95-12.98-28.93-28.93-28.93h-10.6zm77.31 0l-16.63 15.23v5.26l16.63 15.15h18.77v6.83h-33.17v15.14h33.17l16.7-15.14v-6.83l-16.7-15.15h-18.77v-5.26h33.17v-15.23h-33.17zm56.04 0v15.14h16.55v42.47h16.71v-42.47h16.54v-15.14h-49.8zm82.74 0l-21.48 57.61h17.45l13.34-35.72 13.41 35.72h17.45l-21.73-57.61h-18.44zm51.87 0v15.14h28.06c3.46 0 6.26 2.8 6.26 6.26 0 3.45-2.8 6.25-6.26 6.25h-9.13l-6.01 15.23 12.18 14.73h21.23l-13.91-15.22c9.72-1.98 17.12-10.62 17.12-20.99 0-11.77-9.63-21.4-21.48-21.4h-28.06zm69.87 0v15.14h16.54v42.47h16.71v-42.47h16.54v-15.14h-49.79zm87.76 0l-16.71 15.14v27.49l16.71 14.98h30.2v-15.14h-30.2v-6.83h27.4v-15.15h-27.4v-5.35h30.2v-15.14h-30.2zm52.31 0v15.14h28.06c3.46 0 6.26 2.8 6.26 6.26 0 3.45-2.8 6.25-6.26 6.25h-9.13l-6.01 15.23 12.18 14.73h21.23l-13.91-15.22c9.72-1.98 17.12-10.62 17.12-20.99 0-11.77-9.62-21.4-21.48-21.4h-28.06zm87.24 0l-16.63 15.23v5.26l16.63 15.15h18.76v6.83h-33.17v15.14h33.17l16.71-15.14v-6.83l-16.71-15.15h-18.76v-5.26h33.17v-15.23h-33.17zm-565.14 15.17h10.6c0.48 0 0.95 0.03 1.41 0.07 1.85 0.19 3.59 0.75 5.14 1.59 4.29 2.34 7.21 6.88 7.21 12.1 0 1.89-0.39 3.69-1.08 5.31-2.1 4.88-6.99 8.23-12.68 8.23h-10.6v-27.3zm182.16 87.95c-2.16 0-4.14 0.77-5.49 2.28-1.34 1.5-1.94 3.54-1.95 5.85v0.01 1.52h-3.83v4.51h3.83v20.88h1.69 2.79v-20.88h5.81v-4.51h-5.81v-1.44c0-1.46 0.33-2.33 0.81-2.88 0.52-0.59 1.09-0.85 2.17-0.85 0.78 0 1.43 0.09 1.95 0.23l1.85 0.54 0.68-4.39-1.39-0.44c-0.94-0.3-1.97-0.42-3.11-0.42v-0.01zm-43.69 0.43v10.62c-0.19-0.13-0.34-0.32-0.54-0.44-1.54-0.91-3.32-1.35-5.23-1.35-3.01 0-5.67 1.29-7.43 3.64h-0.01v0.01c-1.76 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.54 9.31s4.41 3.73 7.41 3.73c1.88 0 3.65-0.4 5.21-1.21h0.01l0.01-0.01c0.21-0.11 0.38-0.29 0.58-0.42v1.23h4.48v-34.62h-4.48zm187.61 0v10.62c-0.19-0.13-0.34-0.32-0.54-0.44-1.54-0.91-3.32-1.35-5.23-1.35-3.01 0-5.67 1.29-7.43 3.64l-0.01 0.01c-1.76 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.55 9.31 1.75 2.4 4.4 3.73 7.4 3.73 1.89 0 3.65-0.4 5.21-1.21h0.01l0.01-0.01c0.21-0.11 0.38-0.29 0.58-0.42v1.23h4.49v-34.62h-4.49zm37.09 1.22c-0.72 0-1.51 0.35-2 0.87-0.5 0.5-0.81 1.27-0.81 1.96 0 0.71 0.31 1.49 0.82 1.99 0.5 0.5 1.28 0.82 1.99 0.82 0.69 0 1.46-0.32 1.96-0.81 0.52-0.49 0.87-1.28 0.87-2 0-0.71-0.35-1.48-0.86-1.97-0.49-0.51-1.26-0.86-1.97-0.86zm-425.67 7.61c-3.14 0-5.92 1.26-7.84 3.61-1.91 2.35-2.8 5.45-2.8 9.06v0.73c0 3.68 0.89 6.82 2.8 9.18 1.93 2.36 4.72 3.62 7.88 3.62 2.59 0 4.94-0.78 6.78-2.33l0.01-0.01c1.86-1.58 2.93-3.83 3.06-6.35l0.09-1.78h-4.47l-0.1 1.58c-0.1 1.51-0.57 2.43-1.51 3.19l-0.01 0.01c-0.96 0.79-2.15 1.2-3.85 1.2-2.05 0-3.36-0.61-4.47-1.98-1.1-1.39-1.73-3.39-1.73-6.21v-0.71c0-2.89 0.64-4.93 1.72-6.31 1.1-1.4 2.4-2.02 4.44-2.02 1.72 0 2.88 0.45 3.84 1.35l0.01 0.01 0.01 0.01c0.97 0.89 1.47 1.96 1.55 3.59l0.08 1.61h4.47l-0.07-1.76c-0.11-2.68-1.12-5.05-2.97-6.75-1.84-1.69-4.25-2.54-6.92-2.54zm48.55 0c-2.07 0-3.97 0.54-5.48 1.67v-1.27h-4.49v25.39h4.49v-15.9c0.35-1.87 1.02-3.17 1.95-4.07h0.01v-0.01c0.95-0.92 2.01-1.34 3.5-1.35l2.92 0.25 0.2-1.61 0.29-2.3-1.24-0.47c-0.68-0.26-1.38-0.33-2.15-0.33zm39.73 0c-2.15 0-4.16 0.56-5.91 1.66l-0.01 0.01c-1.73 1.1-3.09 2.68-4.03 4.61v0.01c-0.92 1.91-1.36 4.06-1.36 6.38v0.98 0.01c0.01 2.29 0.47 4.43 1.41 6.34v0.01c0.94 1.9 2.3 3.45 4.03 4.54l0.01 0.01c1.75 1.09 3.76 1.64 5.9 1.64s4.15-0.56 5.88-1.67h0.01c1.74-1.11 3.11-2.68 4.03-4.6s1.37-4.08 1.37-6.41v-0.98c-0.02-2.31-0.49-4.46-1.44-6.37-0.94-1.92-2.31-3.48-4.04-4.56-1.74-1.07-3.73-1.61-5.85-1.61zm246.83 0c-2.02 0-3.95 0.62-5.61 1.79-0.19 0.14-0.32 0.34-0.5 0.48v-1.87h-4.48v25.39h4.48v-15.52c0.43-1.8 1.18-3.18 2.29-4.25 1.12-1.09 2.27-1.56 3.76-1.56 1.75 0 2.65 0.42 3.22 1.1 0.58 0.69 1.04 2.02 1.05 4.15v16.08h4.48v-16.05-0.01c-0.01-2.93-0.64-5.38-2.16-7.13-1.51-1.78-3.85-2.6-6.53-2.6zm133.82 0c-2.02 0-3.96 0.62-5.61 1.79-0.2 0.14-0.33 0.34-0.51 0.48v-1.87h-4.48v25.39h4.48v-15.52c0.44-1.8 1.19-3.18 2.3-4.25 1.12-1.09 2.26-1.56 3.76-1.56 1.75 0 2.65 0.42 3.21 1.1h0.01c0.58 0.69 1.03 2.02 1.05 4.15v16.08h4.48v-16.05-0.01c-0.02-2.93-0.64-5.38-2.16-7.13-1.51-1.78-3.85-2.6-6.53-2.6zm47.67 0c-3 0-5.67 1.29-7.43 3.64v0.01c-1.77 2.35-2.55 5.48-2.55 9.22v0.29c0 3.76 0.79 6.91 2.54 9.31s4.41 3.73 7.41 3.73c1.86 0 3.62-0.39 5.16-1.19h0.01c0.19-0.1 0.33-0.26 0.51-0.37-0.13 1.81-0.59 3.15-1.4 4.03h-0.01c-0.92 1.01-2.11 1.53-4.03 1.53-1.13 0-2.01-0.24-2.74-0.66h-0.01c-0.8-0.45-1.57-1.11-2.31-2.06l-1.14-1.45-3.2 3.03 0.87 1.2c1.01 1.38 2.26 2.49 3.72 3.25h0.01c1.47 0.77 3.12 1.14 4.84 1.14 2.92 0 5.51-1.01 7.33-3v-0.01c1.83-1.99 2.68-4.74 2.68-7.93v-23.31h-4.5v1.39c-0.19-0.13-0.33-0.3-0.52-0.41v-0.01c-1.55-0.92-3.33-1.37-5.23-1.37h-0.01zm-390.85 0.4l7.37 25.39h3.6l5.19-16.07 5.28 16.07h3.59l7.39-25.39h-4.81l-4.57 15.99-5.03-15.99h-3.6l-5.04 15.95-4.58-15.95h-4.79zm149.36 0v15.88 0.01c0.03 2.93 0.7 5.4 2.23 7.21l0.01 0.01v0.01c1.57 1.81 3.97 2.68 6.69 2.68 2.12 0 4-0.39 5.57-1.28h0.01l0.01-0.01c0.11-0.06 0.2-0.17 0.31-0.24v1.12h1.69 2.81v-25.39h-4.5v16.95c-0.3 1.53-0.89 2.52-1.83 3.22-0.97 0.73-2.27 1.14-4.11 1.14-1.63 0-2.54-0.41-3.22-1.19-0.69-0.81-1.16-2.15-1.18-4.23v-15.89h-4.49zm148.32 0v25.39h4.48v-1.69-23.7h-4.48zm-329.83 2.27l0.01 0.02c0-0.01-0.01-0.01-0.01-0.01v-0.01zm-87.45 0.68l0.01 0.01h-0.01v-0.01zm468.53 0.03v0.01-0.01zm-386.4 1.1c1.34 0 2.43 0.33 3.44 1.01l0.01 0.01h0.01c1.03 0.68 1.84 1.61 2.45 2.9 0.62 1.3 0.94 2.7 0.94 4.27v0.63c0 2.67-0.68 4.64-1.99 6.19v0.01c-1.29 1.54-2.74 2.21-4.82 2.21-1.38 0-2.5-0.33-3.52-1s-1.82-1.59-2.43-2.86l-0.01-0.01c-0.6-1.29-0.91-2.71-0.91-4.32v-0.65c0-2.59 0.67-4.55 1.99-6.14 1.3-1.57 2.76-2.25 4.84-2.25zm106.9 0c3.09 0 4.69 1.16 5.79 4.21v9.54c-0.5 1.15-1.16 1.96-2.07 2.54-0.99 0.61-2.2 0.94-3.76 0.94-1.82 0-2.89-0.56-3.85-1.96-0.98-1.45-1.56-3.56-1.56-6.45 0-3.25 0.61-5.52 1.56-6.87 0.99-1.39 2.08-1.95 3.89-1.95zm187.61 0c3.09 0 4.7 1.16 5.79 4.21v9.54c-0.5 1.14-1.16 1.96-2.07 2.54-0.99 0.61-2.2 0.94-3.76 0.94-1.82 0-2.89-0.56-3.85-1.96-0.98-1.45-1.56-3.56-1.56-6.45 0-3.25 0.62-5.52 1.57-6.87 0.98-1.39 2.08-1.95 3.88-1.95zm133.8 0c1.6 0 2.76 0.38 3.67 1.08 0.88 0.67 1.58 1.73 2.1 3.27v9.28c-0.44 1.14-1.07 1.97-2.01 2.6-0.99 0.65-2.21 1-3.8 1-1.81 0-2.89-0.56-3.86-1.95v-0.01c-0.99-1.42-1.57-3.53-1.57-6.45 0-3.25 0.61-5.52 1.56-6.87 0.99-1.39 2.09-1.95 3.91-1.95z" />
                </g>
            </svg>
            <!-- Authentication Links -->
            @guest
            <div>
            <!--SE SUPONE QUW VA UNA VALIDACION EN LA RUTA DE ADMIN, PERO ME DABA ERROR ASI QUE LA QUITE-->
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/login">
                   <strong>Login</strong> 
                </a>
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/register">
                   <strong> Register </strong>
                </a>
            </div>
            @else
            <div>
            <!--SE SUPONE QUW VA UNA VALIDACION EN LA RUTA DE ADMIN, PERO ME DABA ERROR ASI QUE LA QUITE-->
                @if(Auth::user()->roles[0]->name === 'Administrator')
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/admin">
                   <strong>Admin </strong> 
                </a>
                @endif
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/">
                   <strong> Home </strong>
                </a>
                
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/home/mygrids">
                   <strong> My boards </strong>
                </a>
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="/home">
                   <strong> My Account </strong>
                </a>
             
                <a class="dropdown-item text-center" style="color:#30019B; font-size:18px;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <strong> {{ __('Logout') }} </strong>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @endguest
        </ul>

        
        <div class="position-absolute" style="bottom:1rem; width:80%;">
        <ul class="row m-0 justify-content-center navbar-nav flex-row pt-5 mb-2 " style="border-top: solid 1px #ccc;">
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




                                <div class="container">
                                            <div class="alineado-padre background-img-cohete">
                                                    <div class="cohete">
                                                    <img src="/img/cohete-grip.png" alt="" >
                                                    </div>
                                                    <div class="alinenado-hijo" style="margin-top: 2.7rem;">
                                                            <svg  viewBox="0 0 363 127" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M65.7157 120.517C66.607 120.517 67.3407 120.28 67.9167 119.807C68.4987 119.333 68.8171 118.677 68.8716 117.839H69.3628C69.3143 118.793 68.9474 119.561 68.2623 120.144C67.5772 120.72 66.7283 121.009 65.7157 121.009C64.4849 121.009 63.5057 120.563 62.7781 119.67C62.0566 118.777 61.6958 117.566 61.6958 116.036V115.708C61.6958 114.214 62.0566 113.021 62.7781 112.129C63.5057 111.236 64.4788 110.79 65.6975 110.79C66.7404 110.79 67.6014 111.102 68.2805 111.728C68.9596 112.353 69.3203 113.185 69.3628 114.223H68.8716C68.8292 113.337 68.5169 112.626 67.9348 112.092C67.3588 111.552 66.613 111.281 65.6975 111.281C64.6001 111.281 63.7391 111.679 63.1146 112.475C62.4961 113.264 62.1869 114.363 62.1869 115.772V116.091C62.1869 117.469 62.4991 118.553 63.1236 119.342C63.7542 120.125 64.6182 120.517 65.7157 120.517L65.7157 120.517Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M88.0504 111.328L87.4138 111.274C86.577 111.274 85.8767 111.547 85.3128 112.093C84.749 112.634 84.3791 113.393 84.2033 114.37V120.828H83.7122V110.973H84.2033V113.023C84.4701 112.336 84.8702 111.793 85.4038 111.392C85.9374 110.992 86.6074 110.791 87.4138 110.791C87.6987 110.791 87.9291 110.825 88.1049 110.891L88.0504 111.328Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M100.88 115.708C100.88 114.767 101.058 113.923 101.416 113.176C101.78 112.423 102.289 111.837 102.944 111.418C103.605 110.999 104.351 110.79 105.182 110.79C106.006 110.79 106.746 110.993 107.401 111.4C108.055 111.807 108.565 112.384 108.929 113.13C109.298 113.877 109.486 114.718 109.492 115.653V116.091C109.492 117.038 109.314 117.885 108.956 118.632C108.598 119.379 108.089 119.962 107.428 120.38C106.773 120.799 106.03 121.009 105.2 121.009C104.369 121.009 103.623 120.802 102.962 120.39C102.308 119.977 101.798 119.4 101.434 118.659C101.071 117.912 100.886 117.074 100.88 116.145L100.88 115.708ZM101.371 116.091C101.371 116.91 101.531 117.663 101.853 118.349C102.18 119.029 102.632 119.561 103.208 119.943C103.79 120.326 104.454 120.517 105.2 120.517C106.321 120.517 107.234 120.095 107.937 119.251C108.647 118.407 109.001 117.32 109.001 115.99V115.708C109.001 114.9 108.838 114.154 108.51 113.467C108.183 112.781 107.728 112.247 107.146 111.864C106.57 111.476 105.915 111.281 105.181 111.281C104.06 111.281 103.144 111.71 102.435 112.566C101.725 113.422 101.371 114.5 101.371 115.799L101.371 116.091Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M125.523 117.977L126.06 120.099L128.943 110.973H129.443L132.308 120.099L132.863 117.977L134.864 110.973H135.436L132.572 120.827H132.08L129.652 113.422L129.188 111.655L128.688 113.422L126.296 120.827H125.805L122.949 110.973H123.513L125.523 117.977Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M149.293 115.799C149.293 114.226 149.624 112.999 150.285 112.119C150.946 111.232 151.852 110.789 153.004 110.789C153.744 110.789 154.396 110.956 154.96 111.29C155.53 111.624 155.99 112.122 156.342 112.784V106.836H156.833V120.826H156.342V119.25C156.008 119.809 155.551 120.243 154.969 120.553C154.387 120.856 153.726 121.008 152.986 121.008C151.846 121.008 150.946 120.556 150.285 119.651C149.624 118.746 149.294 117.505 149.294 115.926L149.293 115.799ZM149.803 115.99C149.803 117.386 150.079 118.492 150.63 119.305C151.182 120.113 151.964 120.517 152.977 120.517C153.789 120.517 154.484 120.337 155.06 119.979C155.636 119.615 156.063 119.084 156.342 118.385V113.768C155.778 112.11 154.662 111.281 152.995 111.281C151.989 111.281 151.203 111.679 150.639 112.474C150.082 113.27 149.803 114.442 149.803 115.99L149.803 115.99Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M172.553 120.828V111.474H170.843V110.973H172.553V109.534C172.559 108.624 172.786 107.916 173.235 107.412C173.69 106.902 174.32 106.647 175.127 106.647C175.575 106.647 175.963 106.699 176.291 106.802L176.218 107.276C175.903 107.184 175.542 107.139 175.136 107.139C174.487 107.139 173.975 107.351 173.599 107.777C173.229 108.196 173.044 108.794 173.044 109.571V110.973H175.645V111.474H173.044V120.828L172.553 120.828Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M196.134 120.828V119.234C195.843 119.781 195.419 120.215 194.861 120.537C194.303 120.853 193.597 121.01 192.742 121.01C191.669 121.01 190.863 120.698 190.323 120.072C189.789 119.441 189.517 118.524 189.504 117.322V110.973H189.996V117.34C190.008 118.384 190.244 119.177 190.705 119.717C191.166 120.251 191.839 120.518 192.724 120.518C193.664 120.518 194.428 120.297 195.016 119.854C195.604 119.41 195.977 118.761 196.135 117.904V110.973H196.635V120.828L196.134 120.828Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M212.09 113.266C212.411 112.501 212.884 111.897 213.509 111.454C214.133 111.01 214.825 110.789 215.582 110.789C216.637 110.789 217.42 111.089 217.929 111.69C218.444 112.285 218.705 113.187 218.711 114.395V120.826H218.22V114.377C218.214 113.321 217.999 112.541 217.574 112.037C217.15 111.527 216.477 111.272 215.555 111.272C214.706 111.272 213.97 111.575 213.345 112.182C212.727 112.783 212.308 113.561 212.09 114.514V120.826H211.599V110.971H212.09L212.09 113.266Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M233.206 115.799C233.206 114.226 233.536 112.999 234.197 112.119C234.858 111.232 235.764 110.789 236.916 110.789C237.656 110.789 238.308 110.956 238.872 111.29C239.442 111.624 239.903 112.122 240.254 112.784V106.836H240.745V120.826H240.254V119.25C239.921 119.809 239.463 120.243 238.881 120.553C238.299 120.856 237.638 121.008 236.898 121.008C235.758 121.008 234.858 120.556 234.197 119.651C233.536 118.746 233.206 117.505 233.206 115.926L233.206 115.799ZM233.715 115.99C233.715 117.386 233.991 118.492 234.543 119.305C235.095 120.113 235.877 120.517 236.889 120.517C237.702 120.517 238.396 120.337 238.972 119.979C239.548 119.615 239.975 119.084 240.254 118.385V113.768C239.69 112.11 238.575 111.281 236.907 111.281C235.901 111.281 235.116 111.679 234.552 112.474C233.994 113.27 233.715 114.442 233.715 115.99L233.715 115.99Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M256.331 120.828H255.84V110.973H256.331V120.828ZM255.585 107.895C255.585 107.755 255.634 107.637 255.731 107.539C255.828 107.436 255.946 107.385 256.086 107.385C256.225 107.385 256.343 107.436 256.44 107.539C256.543 107.637 256.595 107.755 256.595 107.895C256.595 108.034 256.543 108.153 256.44 108.25C256.343 108.347 256.225 108.396 256.086 108.396C255.946 108.396 255.828 108.347 255.731 108.25C255.634 108.153 255.585 108.034 255.585 107.895Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M271.941 113.266C272.262 112.501 272.735 111.897 273.36 111.454C273.984 111.01 274.675 110.789 275.433 110.789C276.488 110.789 277.27 111.089 277.78 111.69C278.295 112.285 278.556 113.187 278.562 114.395V120.826H278.071V114.377C278.065 113.321 277.849 112.541 277.425 112.037C277.001 111.527 276.328 111.272 275.406 111.272C274.557 111.272 273.82 111.575 273.196 112.182C272.577 112.783 272.159 113.561 271.941 114.514V120.826H271.45V110.971H271.941L271.941 113.266Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M293.049 115.799C293.049 114.226 293.379 112.999 294.04 112.119C294.701 111.232 295.607 110.789 296.76 110.789C297.493 110.789 298.145 110.959 298.715 111.299C299.285 111.633 299.743 112.125 300.088 112.775V110.971H300.588V120.653C300.588 121.953 300.255 122.967 299.588 123.695C298.921 124.43 298.015 124.797 296.869 124.797C296.208 124.797 295.601 124.655 295.05 124.369C294.504 124.084 294.037 123.674 293.649 123.14L293.995 122.812C294.377 123.298 294.795 123.668 295.25 123.923C295.705 124.184 296.238 124.315 296.85 124.315C297.863 124.315 298.651 124.005 299.215 123.386C299.779 122.772 300.07 121.904 300.088 120.781V119.269C299.749 119.827 299.288 120.258 298.706 120.562C298.13 120.86 297.475 121.008 296.741 121.008C295.601 121.008 294.701 120.556 294.04 119.651C293.379 118.747 293.049 117.505 293.049 115.926L293.049 115.799ZM293.549 115.99C293.549 117.399 293.828 118.507 294.386 119.314C294.944 120.116 295.726 120.517 296.732 120.517C297.563 120.517 298.269 120.325 298.851 119.943C299.433 119.554 299.846 119.011 300.088 118.312V113.841C299.555 112.134 298.442 111.281 296.75 111.281C295.738 111.281 294.95 111.679 294.386 112.474C293.828 113.27 293.549 114.442 293.549 115.99L293.549 115.99Z" fill="#32BAB0" stroke="#32BAB0" stroke-width="3.38362" stroke-miterlimit="2"/>
                                                                    <path d="M23.3701 72.6274H20.5879C20.5879 73.5754 20.3741 74.4793 19.9874 75.2914C18.9118 77.5748 16.4926 79.1684 13.6865 79.1684C13.6401 79.1684 13.5953 79.1626 13.5491 79.1617V85.9606C13.5951 85.961 13.6404 85.9641 13.6865 85.9641C20.2961 85.9641 25.8297 81.3737 27.0989 75.2913V75.2877L23.3701 72.6274Z" fill="url(#paint0_linear)"/>
                                                                    <path d="M23.3701 72.6274L19.6379 69.9635H14.9121V75.2913H19.9879C18.9123 77.5746 16.4931 79.1682 13.687 79.1682C13.6406 79.1682 13.5958 79.1625 13.5496 79.1616C9.80667 79.0913 6.78582 76.1885 6.78582 72.6274C6.78582 69.0189 9.88018 66.0866 13.6869 66.0866C15.5224 66.0866 17.1952 66.7695 18.4303 67.8773L23.2281 63.0726C20.7579 60.7348 17.392 59.2907 13.6873 59.2907C6.14122 59.2907 0 65.2742 0 72.6272C0 79.9353 6.06688 85.8882 13.5496 85.9607C13.5956 85.9611 13.641 85.9642 13.687 85.9642C20.2967 85.9642 25.8303 81.3737 27.0994 75.2913V75.2878L23.3701 72.6274Z" fill="white"/>
                                                                    <path d="M27.0985 75.2872V75.2923H14.9097V69.9621H19.639L23.3713 72.6262L27.0985 75.2872Z" fill="url(#paint1_linear)"/>
                                                                    <path d="M27.0985 75.2872V75.2923H14.9097V69.9621H19.639L23.3713 72.6262L27.0985 75.2872Z" fill="url(#paint2_linear)"/>
                                                                    <path d="M6.78582 72.6274C6.78582 69.0188 9.88019 66.0865 13.6869 66.0865C15.5224 66.0865 17.1952 66.7695 18.4303 67.8772L23.2281 63.0725C20.7579 60.7348 17.3921 59.2907 13.6873 59.2907C6.14122 59.2907 0 65.2742 0 72.6272C0 79.9354 6.06689 85.8882 13.5496 85.9607V79.1618C9.80668 79.0915 6.78582 76.1887 6.78582 72.6276V72.6274Z" fill="url(#paint3_linear)"/>
                                                                    <path d="M56.2059 69.2993V69.2992C56.2059 63.9951 51.9123 59.6953 46.6159 59.6953L34.0432 59.6954V66.4911L46.6159 66.491C48.1646 66.491 49.4202 67.7483 49.4202 69.2993V69.2993C49.4202 70.8502 48.1649 72.1074 46.6163 72.1076V72.1073L42.5256 72.1073L39.8114 78.903L45.273 85.5199H54.7737L48.5479 78.71C52.9158 77.8129 56.2009 73.942 56.2009 69.3023L56.2059 69.2993Z" fill="white"/>
                                                                    <path d="M42.5244 72.1097L39.8101 78.9067L45.2715 85.5221H54.771L42.5244 72.1097Z" fill="url(#paint4_linear)"/>
                                                                    <path d="M46.6135 59.6969V59.6973V59.6969L34.0408 59.697V66.4927L46.6135 66.4926C48.1622 66.4927 49.4177 67.7499 49.4177 69.3009H56.2035C56.2035 63.9968 51.91 59.697 46.6136 59.697L46.6135 59.6969Z" fill="url(#paint5_linear)"/>
                                                                    <path d="M56.206 69.2993V69.2992H49.4202V69.2993C49.4202 70.8501 48.1649 72.1073 46.6162 72.1076V72.1072L42.5256 72.1073L48.5528 78.7072C52.9207 77.8101 56.2058 73.9391 56.2058 69.2994L56.206 69.2993Z" fill="url(#paint6_linear)"/>
                                                                    <path d="M74.528 67.1896V59.7065H67.0608V67.1886V68.5219V85.522H74.528V68.5214V67.1896Z" fill="white"/>
                                                                    <path d="M74.5256 67.1882H67.0605V85.5209H74.5256V67.1882Z" fill="url(#paint7_linear)"/>
                                                                    <path d="M74.5281 59.7065H67.0696L74.5281 67.1733V59.7065Z" fill="url(#paint8_linear)"/>
                                                                    <path d="M74.5433 67.1886L67.0608 59.6978V67.1886H74.5433Z" fill="url(#paint9_linear)"/>
                                                                    <path d="M98.3941 59.6969V59.6977L98.394 59.6965L93.6521 59.6966L93.6518 59.7012V59.6967L86.1868 66.4924V85.5211H93.6518V85.5136L98.3941 85.5135V85.5138C105.528 85.5138 111.333 79.7981 111.333 72.6538C111.333 65.5092 105.528 59.6966 98.3941 59.6966L98.3941 59.6969ZM98.3941 78.7181L98.3941 78.7178L93.6518 78.7179V66.492L98.3941 66.4919V66.4923C101.787 66.4923 104.546 69.2563 104.546 72.6535C104.546 76.0509 101.786 78.7178 98.3941 78.7178L98.3941 78.7181Z" fill="white"/>
                                                                    <path d="M98.394 59.6969V59.6977L98.3939 59.6965L93.652 59.6966L93.652 66.4923L98.3939 66.4922V66.4926C101.786 66.4926 104.546 69.2565 104.546 72.6538C104.546 76.0511 101.786 78.718 98.3939 78.718L98.3939 78.7178L93.6516 78.7179L93.6516 85.5136L98.3939 85.5135V85.5138C105.528 85.5138 111.332 79.7981 111.332 72.6539C111.332 65.5092 105.528 59.6966 98.3939 59.6966L98.394 59.6969Z" fill="url(#paint10_linear)"/>
                                                                    <path d="M93.6522 59.6973L86.187 66.4933V85.522H93.6522V59.6973Z" fill="url(#paint11_linear)"/>
                                                                    <path d="M93.6522 59.6973L86.187 66.4933V85.522H93.6522V59.6973Z" fill="url(#paint12_linear)"/>
                                                                    <path d="M121.791 85.5027H136.626L144.099 78.7196V75.6598L136.626 68.8767H128.233V66.5173H143.068V59.6972H128.233L120.797 66.5173V68.8767L128.233 75.6598H136.626V78.7196H121.791V85.5027Z" fill="white"/>
                                                                    <path d="M175.569 66.4792V59.6961H153.298V66.4792H160.697V85.502H168.17V66.4792H175.569Z" fill="white"/>
                                                                    <path d="M200.464 85.5028H208.269L198.55 59.6969H190.305L180.697 85.5028H188.501L194.464 69.5033L200.464 85.5028Z" fill="white"/>
                                                                    <path d="M235.66 69.2835C235.66 64.0117 231.353 59.6985 226.052 59.6985H213.499V66.4816H226.052C227.598 66.4816 228.85 67.735 228.85 69.2834C228.85 70.8317 227.598 72.0851 226.052 72.0851H221.966L219.279 78.9052L224.727 85.504H234.224L228.003 78.6839C232.347 77.7991 235.66 73.9284 235.66 69.2832L235.66 69.2835Z" fill="white"/>
                                                                    <path d="M267.025 66.4792V59.6961H244.754V66.4792H252.153V85.502H259.626V66.4792H267.025Z" fill="white"/>
                                                                    <path d="M284.003 66.4792H297.513V59.6961H284.003L276.53 66.4792V78.7921L284.003 85.5016H297.513V78.7185H284.003V75.6586H296.262V68.8755H284.003V66.4792Z" fill="white"/>
                                                                    <path d="M329.562 69.2835C329.562 64.0117 325.255 59.6985 319.954 59.6985H307.401V66.4816H319.954C321.5 66.4816 322.751 67.735 322.751 69.2834C322.751 70.8317 321.5 72.0851 319.954 72.0851H315.867L313.18 78.9052L318.628 85.504H328.126L321.905 78.6839C326.249 77.7991 329.562 73.9284 329.562 69.2832L329.562 69.2835Z" fill="white"/>
                                                                    <path d="M339.976 85.5027H354.811L362.284 78.7196V75.6598L354.811 68.8767H346.418V66.5173H361.253V59.6972H346.418L338.982 66.5173V68.8767L346.418 75.6598H354.811V78.7196H339.976V85.5027Z" fill="white"/>
                                                                    <path d="M353.084 0.00316527C352.846 -0.000379487 352.575 -0.0010088 352.482 0.00159069C352.389 0.00434772 352.143 0.0144707 351.935 0.0242779C351.728 0.0340851 351.431 0.052436 351.276 0.0653192C351.122 0.078041 350.887 0.0995859 350.754 0.112965C350.621 0.126475 350.34 0.159319 350.129 0.185877C349.917 0.212423 349.603 0.256216 349.429 0.283255C349.256 0.310156 348.974 0.357136 348.801 0.387562C348.629 0.417968 348.321 0.475764 348.118 0.516005C347.915 0.556403 347.586 0.625772 347.387 0.6702C347.188 0.714623 346.797 0.80814 346.519 0.877834C346.241 0.947686 345.814 1.05987 345.571 1.12731C345.328 1.19475 344.995 1.28955 344.831 1.33816C344.668 1.38661 344.33 1.49123 344.08 1.57042C343.83 1.64977 343.428 1.78401 343.188 1.86868C342.947 1.95351 342.595 2.08098 342.405 2.15228C342.215 2.22359 341.882 2.35252 341.665 2.43879C341.449 2.52506 341.069 2.68264 340.821 2.78904C340.574 2.89527 340.202 3.05961 339.994 3.15426C339.786 3.2489 339.319 3.47377 338.957 3.65403C338.595 3.83431 338.135 4.06995 337.936 4.17763C337.738 4.28531 337.452 4.44224 337.303 4.52626C337.153 4.61028 336.882 4.76625 336.7 4.87264C336.518 4.97919 336.257 5.13548 336.12 5.21982C335.983 5.30432 335.752 5.44918 335.606 5.54156C335.46 5.63411 335.149 5.83805 334.915 5.99481C334.68 6.15158 334.351 6.37645 334.183 6.49427C334.016 6.61225 333.752 6.80171 333.597 6.91535C333.442 7.02899 333.168 7.2355 332.986 7.3744C332.805 7.5133 332.534 7.72511 332.383 7.84518C332.233 7.96525 331.955 8.19349 331.765 8.35251C331.575 8.51137 331.282 8.76213 331.114 8.90975C330.946 9.05734 330.711 9.26706 330.591 9.37572C330.472 9.48436 330.192 9.74673 329.969 9.95904C329.745 10.1712 329.383 10.5342 329.163 10.7656C328.943 10.997 328.681 11.2771 328.581 11.3882C328.48 11.4992 328.3 11.702 328.18 11.8388C328.06 11.9756 327.858 12.2101 327.732 12.36C327.605 12.5098 327.36 12.8103 327.186 13.0279C327.013 13.2455 326.77 13.5568 326.647 13.7197L326.424 14.0157L325.988 14.0055C325.749 13.9999 325.361 13.9906 325.127 13.985C324.881 13.9792 324.511 13.9826 324.251 13.9935C324.004 14.0037 323.708 14.0194 323.592 14.0284C323.477 14.0375 323.242 14.0592 323.07 14.0767C322.898 14.0941 322.627 14.1268 322.467 14.149C322.308 14.1714 322.015 14.2185 321.816 14.2538C321.617 14.2889 321.306 14.3505 321.125 14.3904C320.944 14.4305 320.672 14.4952 320.522 14.5342C320.372 14.5731 320.159 14.6311 320.048 14.6629C319.938 14.6949 319.71 14.7648 319.542 14.8186C319.374 14.8722 319.117 14.9591 318.971 15.0119C318.825 15.0647 318.587 15.1551 318.441 15.2131C318.295 15.271 318.038 15.3785 317.87 15.4521C317.702 15.5255 317.438 15.6465 317.284 15.7211C317.129 15.7954 316.869 15.9276 316.705 16.0148C316.542 16.102 316.314 16.2274 316.199 16.2934C316.084 16.3596 315.889 16.4754 315.765 16.5509C315.641 16.6264 315.29 16.8526 314.985 17.0533C314.68 17.2541 314.098 17.6379 313.691 17.9062C313.285 18.1745 312.37 18.7779 311.658 19.2473C310.947 19.7166 310.321 20.1334 310.268 20.1734C310.215 20.2135 310.118 20.2938 310.053 20.3517C309.987 20.4098 309.877 20.5261 309.806 20.6102C309.736 20.6943 309.64 20.8211 309.594 20.8919C309.547 20.9627 309.474 21.0894 309.432 21.1736C309.39 21.2576 309.331 21.3898 309.301 21.4673C309.271 21.5448 309.226 21.6935 309.201 21.7978C309.175 21.9019 309.146 22.0692 309.135 22.1694C309.122 22.2829 309.118 22.4438 309.124 22.5956C309.129 22.7297 309.144 22.8974 309.157 22.9682C309.17 23.039 309.196 23.1585 309.215 23.2338C309.234 23.309 309.274 23.4324 309.303 23.5079C309.332 23.5834 309.383 23.6993 309.416 23.7654C309.449 23.8316 309.502 23.9291 309.533 23.9822C309.565 24.0354 309.642 24.1476 309.704 24.2314C309.767 24.3154 309.883 24.4495 309.963 24.5297C310.043 24.6097 310.181 24.73 310.27 24.797C310.359 24.864 310.496 24.9551 310.575 24.9995C310.654 25.0439 310.772 25.1041 310.839 25.1332C310.905 25.1624 311.02 25.2068 311.095 25.2322C311.17 25.2575 311.988 25.4518 312.911 25.6638C313.835 25.8757 315.557 26.2705 316.737 26.5411C317.917 26.8117 318.9 27.0384 318.92 27.0452L318.958 27.0575L318.856 27.1375C318.8 27.1814 318.659 27.3107 318.542 27.4245C318.424 27.5384 318.269 27.7039 318.196 27.7921C318.123 27.8803 318 28.0399 317.924 28.1468C317.848 28.2537 317.727 28.4433 317.656 28.5681C317.585 28.6928 317.486 28.8843 317.437 28.9939C317.388 29.1034 317.314 29.2845 317.273 29.3963C317.233 29.508 317.168 29.724 317.13 29.8761C317.092 30.0284 317.046 30.2529 317.028 30.3751C317.01 30.4974 316.987 30.7206 316.977 30.8711C316.968 31.0216 316.964 31.2352 316.97 31.3459C316.976 31.4565 316.991 31.641 317.003 31.7557C317.016 31.8705 317.048 32.0701 317.074 32.1992C317.1 32.3283 317.148 32.5205 317.179 32.6264C317.212 32.7321 317.263 32.8874 317.295 32.9716C317.326 33.0556 317.384 33.1969 317.423 33.2855C317.463 33.374 317.499 33.4554 317.503 33.4666C317.51 33.4821 317.447 33.4868 317.217 33.4872L316.922 33.4874L316.582 33.5734C316.293 33.6463 316.219 33.6714 316.089 33.7408C316.005 33.7857 315.822 33.8911 315.682 33.975C315.542 34.0587 315.312 34.2047 315.171 34.2993C315.03 34.3939 314.803 34.5549 314.667 34.6571C314.53 34.7591 314.331 34.9156 314.224 35.0044C314.117 35.0934 313.939 35.2476 313.828 35.3471C313.718 35.4466 313.511 35.6463 313.369 35.791C313.227 35.9355 313.057 36.1153 312.99 36.1906C312.923 36.2658 312.799 36.4126 312.714 36.5169C312.629 36.621 312.495 36.7912 312.417 36.8951C312.339 36.9989 312.203 37.189 312.114 37.3173C312.025 37.4456 311.886 37.6571 311.805 37.7873C311.724 37.9174 311.592 38.1383 311.512 38.2782C311.432 38.4181 311.274 38.7208 311.16 38.951C311.047 39.1812 310.896 39.5071 310.825 39.6753C310.754 39.8435 310.655 40.0898 310.605 40.2226C310.555 40.3553 310.468 40.6016 310.412 40.7698C310.356 40.938 310.27 41.2179 310.221 41.3919C310.172 41.5657 310.103 41.8264 310.068 41.9713C310.034 42.116 309.984 42.3431 309.957 42.4759C309.93 42.6087 309.89 42.826 309.867 42.9588C309.845 43.0916 309.813 43.3124 309.795 43.4497C309.777 43.5868 309.751 43.8138 309.738 43.9538C309.725 44.094 309.705 44.3998 309.695 44.6335C309.681 44.9583 309.681 45.1547 309.695 45.4674C309.706 45.6926 309.729 46.0057 309.747 46.1632C309.765 46.3208 309.797 46.5479 309.819 46.6678C309.841 46.7879 309.881 46.9765 309.908 47.0873C309.935 47.1978 309.989 47.3841 310.028 47.5009C310.067 47.6177 310.131 47.7863 310.17 47.8756C310.209 47.9648 310.294 48.1336 310.358 48.2506C310.422 48.3677 310.511 48.5177 310.555 48.5841C310.598 48.6504 310.66 48.7356 310.69 48.7733C310.721 48.8109 310.76 48.8417 310.777 48.8417C310.794 48.8417 310.885 48.9067 310.98 48.9864C311.112 49.0974 311.202 49.157 311.369 49.2424C311.488 49.3036 311.665 49.3878 311.763 49.4295C311.86 49.471 312.027 49.5362 312.133 49.5743C312.24 49.6123 312.431 49.6728 312.559 49.7089C312.687 49.7449 312.9 49.796 313.032 49.8222C313.165 49.8484 313.364 49.8811 313.474 49.8948C313.585 49.9085 313.795 49.9267 313.942 49.9352C314.113 49.9452 314.392 49.9453 314.721 49.9355C315.004 49.9269 315.37 49.9092 315.536 49.8957C315.702 49.8824 315.98 49.8534 316.154 49.8313C316.327 49.8091 316.557 49.7763 316.663 49.7581C316.77 49.7399 316.984 49.6995 317.139 49.6684C317.294 49.6374 317.536 49.583 317.677 49.5476C317.819 49.5123 318.036 49.4545 318.159 49.419C318.283 49.3836 318.544 49.3013 318.738 49.2363C318.933 49.1711 319.244 49.0568 319.429 48.9821C319.615 48.9074 319.861 48.8043 319.976 48.7526C320.091 48.7011 320.336 48.5815 320.522 48.4872C320.708 48.3927 320.979 48.2464 321.125 48.1622C321.271 48.0779 321.473 47.9565 321.575 47.8923C321.676 47.8281 321.871 47.6996 322.007 47.6068C322.144 47.5141 322.368 47.3531 322.505 47.2491C322.643 47.1452 322.836 46.9948 322.933 46.9152C323.03 46.8353 323.204 46.6875 323.319 46.5866C323.433 46.4859 323.632 46.2982 323.761 46.1698C323.889 46.0415 324.086 45.8313 324.197 45.703C324.309 45.5746 324.467 45.3864 324.549 45.2845C324.63 45.1826 324.759 45.0162 324.835 44.9143C324.911 44.8124 325.056 44.6064 325.156 44.4562C325.257 44.3062 325.414 44.0562 325.506 43.9009C325.599 43.7458 325.717 43.5317 325.77 43.4255C325.823 43.3192 325.885 43.1671 325.909 43.0874L325.952 42.9426L325.959 42.504C325.962 42.2627 325.967 42.0654 325.97 42.0654C325.972 42.0654 326.056 42.1045 326.157 42.1523C326.258 42.2001 326.434 42.2732 326.549 42.3147C326.664 42.3562 326.844 42.4146 326.951 42.4446C327.057 42.4745 327.234 42.517 327.345 42.5389C327.455 42.561 327.643 42.5899 327.762 42.6036C327.88 42.6173 328.148 42.6329 328.356 42.6382C328.654 42.6461 328.781 42.6426 328.95 42.6223C329.069 42.608 329.257 42.5781 329.368 42.5557C329.48 42.5333 329.65 42.4927 329.747 42.4655C329.845 42.4383 330.012 42.3846 330.118 42.346C330.225 42.3073 330.395 42.2386 330.496 42.193C330.597 42.1475 330.759 42.0665 330.856 42.0133C330.954 41.9598 331.124 41.8562 331.234 41.7828C331.345 41.7092 331.514 41.5859 331.61 41.5085C331.706 41.4311 331.872 41.2828 331.98 41.1789C332.087 41.0749 332.232 40.921 332.303 40.8368C332.374 40.7525 332.436 40.6886 332.442 40.6945C332.448 40.7005 332.847 42.4349 333.331 44.5491C333.879 46.9464 334.231 48.4546 334.266 48.5566C334.297 48.6469 334.359 48.7948 334.403 48.8853C334.447 48.9758 334.53 49.1206 334.588 49.2072C334.646 49.2938 334.745 49.4256 334.808 49.5001C334.871 49.5747 334.991 49.6964 335.075 49.7706C335.159 49.8448 335.297 49.9518 335.381 50.0083C335.465 50.0649 335.613 50.1509 335.71 50.1993C335.807 50.2478 335.96 50.3128 336.049 50.3437C336.138 50.3746 336.281 50.415 336.366 50.4335C336.487 50.4598 336.577 50.4672 336.775 50.4669C336.914 50.4669 337.115 50.4596 337.221 50.4509C337.327 50.4421 337.49 50.4199 337.583 50.4012C337.675 50.3825 337.826 50.3425 337.917 50.312C338.008 50.2814 338.143 50.229 338.216 50.1952C338.289 50.1614 338.399 50.1046 338.46 50.0687C338.521 50.0329 338.63 49.9612 338.703 49.9092C338.775 49.8573 338.894 49.7606 338.967 49.6946C339.04 49.6285 339.156 49.5055 339.226 49.4212C339.31 49.3201 339.93 48.3743 341.053 46.6365C341.988 45.1891 342.826 43.8844 342.915 43.7375C343.004 43.5904 343.148 43.3405 343.236 43.1822C343.325 43.0238 343.48 42.7275 343.582 42.5236C343.684 42.3198 343.819 42.0375 343.883 41.8961C343.947 41.755 344.048 41.5198 344.109 41.3735C344.169 41.2274 344.268 40.9735 344.33 40.8099C344.391 40.646 344.492 40.3563 344.555 40.1661C344.618 39.9756 344.715 39.657 344.772 39.4579C344.829 39.2586 344.912 38.9399 344.957 38.7497C345.002 38.5592 345.067 38.2587 345.102 38.0817C345.138 37.9047 345.192 37.5967 345.223 37.3976C345.254 37.1984 345.298 36.8797 345.32 36.6894C345.342 36.499 345.371 36.1985 345.385 36.0215C345.398 35.8444 345.417 35.4808 345.427 35.2135C345.44 34.8567 345.44 34.5849 345.427 34.1914C345.418 33.8967 345.41 33.5383 345.41 33.395V33.1346L345.743 32.8799C345.926 32.7399 346.206 32.5208 346.366 32.3932C346.525 32.2654 346.778 32.0586 346.928 31.9335C347.079 31.8083 347.346 31.5792 347.523 31.4242C347.7 31.2692 347.939 31.0568 348.054 30.952C348.168 30.8472 348.464 30.5688 348.71 30.3333C348.956 30.0978 349.325 29.7311 349.53 29.5187C349.735 29.3061 349.992 29.0344 350.103 28.9148C350.213 28.7952 350.416 28.5708 350.554 28.416C350.692 28.2613 350.927 27.9898 351.077 27.8127C351.227 27.6357 351.491 27.3133 351.664 27.0965C351.837 26.8795 352.072 26.5787 352.187 26.4277C352.301 26.2767 352.5 26.0087 352.629 25.8322C352.757 25.6556 352.945 25.3915 353.047 25.2455C353.148 25.0993 353.347 24.8061 353.489 24.5936C353.63 24.3811 353.817 24.095 353.904 23.9578C353.991 23.8205 354.162 23.5434 354.284 23.3416C354.407 23.1399 354.604 22.8067 354.722 22.6012C354.84 22.3958 354.993 22.1262 355.061 22.0023C355.13 21.8783 355.281 21.5958 355.399 21.3745C355.516 21.1532 355.691 20.8128 355.788 20.6181C355.886 20.4233 356.048 20.0864 356.15 19.8696C356.252 19.6526 356.388 19.3594 356.452 19.2177C356.515 19.0761 356.643 18.7836 356.736 18.5679C356.828 18.3522 356.978 17.9888 357.07 17.7604C357.162 17.532 357.305 17.1616 357.389 16.9374C357.473 16.7132 357.597 16.3704 357.665 16.1756C357.733 15.9808 357.827 15.7048 357.874 15.5622C357.922 15.4194 358 15.1769 358.048 15.023C358.097 14.869 358.183 14.5838 358.24 14.389C358.298 14.1942 358.378 13.9153 358.418 13.7693C358.458 13.6234 358.535 13.3336 358.588 13.1255C358.641 12.9174 358.729 12.5553 358.782 12.3208C358.836 12.0862 358.923 11.6804 358.975 11.4194C359.027 11.1582 359.099 10.7743 359.134 10.5663C359.17 10.3582 359.224 10.0143 359.255 9.80181C359.285 9.58935 359.332 9.21996 359.359 8.98092C359.386 8.7419 359.419 8.41596 359.432 8.25661C359.445 8.09726 359.465 7.83281 359.476 7.66912C359.489 7.48515 359.497 7.03622 359.497 6.49415C359.497 5.90922 359.49 5.53116 359.476 5.35943C359.464 5.21779 359.44 4.97152 359.423 4.8122C359.406 4.65286 359.37 4.38841 359.343 4.22472C359.316 4.06087 359.272 3.82913 359.246 3.70967C359.22 3.59008 359.173 3.40547 359.144 3.29922C359.114 3.19299 359.056 3.01014 359.015 2.89299C358.974 2.77566 358.905 2.59974 358.862 2.50186C358.818 2.404 358.735 2.23548 358.676 2.12764C358.617 2.01964 358.529 1.87204 358.479 1.79962C358.429 1.72719 358.345 1.61694 358.292 1.55448L358.195 1.44085L358.134 1.44053C358.082 1.44022 358.027 1.40768 357.757 1.21761C357.582 1.09528 357.385 0.96201 357.318 0.921604C357.251 0.881044 357.122 0.810548 357.031 0.764837C356.94 0.719125 356.785 0.648468 356.687 0.60807C356.588 0.56751 356.424 0.506185 356.323 0.471742C356.221 0.437318 356.033 0.380638 355.905 0.345871C355.777 0.311093 355.549 0.257348 355.399 0.226768C355.248 0.196007 354.999 0.152723 354.844 0.130352C354.689 0.107981 354.447 0.0786871 354.306 0.0653313C354.164 0.0518218 353.929 0.0336234 353.783 0.024927C353.638 0.0162226 353.323 0.006258 353.084 0.00287079L353.084 0.00316527ZM353.229 3.49266C353.822 3.49621 354.076 3.50377 354.258 3.52358C354.39 3.53808 354.589 3.56447 354.7 3.58217C354.81 3.60006 354.985 3.63593 355.089 3.66217C355.192 3.68824 355.322 3.72703 355.378 3.74811C355.435 3.76918 355.518 3.80558 355.564 3.82892C355.626 3.86062 355.656 3.88831 355.681 3.93804C355.7 3.97459 355.74 4.06954 355.771 4.14889C355.802 4.22824 355.851 4.38904 355.881 4.50621C355.911 4.62354 355.95 4.8056 355.968 4.91086C355.986 5.01629 356.012 5.2001 356.025 5.31969C356.039 5.43912 356.057 5.65643 356.066 5.80257C356.075 5.94855 356.082 6.2637 356.082 6.50273C356.082 6.74175 356.075 7.07494 356.066 7.24312C356.057 7.41131 356.043 7.64312 356.034 7.75817C356.025 7.87325 356.002 8.1158 355.984 8.29737C355.966 8.47876 355.927 8.81195 355.896 9.03775C355.865 9.26341 355.811 9.622 355.776 9.83449C355.74 10.047 355.664 10.4556 355.607 10.7424C355.55 11.0294 355.459 11.4495 355.406 11.676C355.353 11.9026 355.266 12.2545 355.212 12.458C355.159 12.6617 355.079 12.955 355.035 13.1099C354.991 13.2648 354.908 13.5474 354.85 13.7377C354.793 13.9279 354.695 14.2395 354.632 14.4298C354.57 14.62 354.463 14.9352 354.394 15.1299C354.325 15.3247 354.221 15.6144 354.161 15.7737C354.102 15.9331 353.974 16.2603 353.878 16.5009C353.782 16.7416 353.621 17.1291 353.521 17.362C353.421 17.5951 353.264 17.9486 353.172 18.1478C353.081 18.3469 352.867 18.7888 352.697 19.1296C352.526 19.4705 352.324 19.8652 352.248 20.0068C352.172 20.1485 352.022 20.4202 351.915 20.6104C351.808 20.8007 351.613 21.1376 351.48 21.3589C351.348 21.5802 351.146 21.9097 351.031 22.0912C350.915 22.2726 350.742 22.5406 350.644 22.6868C350.547 22.8328 350.359 23.108 350.227 23.2984C350.094 23.4886 349.829 23.8545 349.637 24.1112C349.446 24.3679 349.181 24.7119 349.05 24.8757C348.919 25.0394 348.721 25.2822 348.61 25.4149C348.499 25.5477 348.307 25.7722 348.183 25.9139C348.059 26.0555 347.839 26.3018 347.694 26.4611C347.548 26.6204 347.183 26.9974 346.882 27.2989C346.581 27.6002 346.2 27.9696 346.036 28.1198C345.873 28.2698 345.594 28.5194 345.418 28.6746C345.241 28.8297 344.966 29.0655 344.807 29.1988C344.648 29.3321 344.371 29.5584 344.191 29.7016C344.011 29.8451 343.708 30.0805 343.516 30.2251C343.325 30.3695 342.998 30.6096 342.79 30.7585C342.582 30.9074 342.17 31.19 341.874 31.3866C341.578 31.5831 341.202 31.8269 341.038 31.9285C340.875 32.0302 340.625 32.1821 340.484 32.2663C340.342 32.3505 340.093 32.4958 339.929 32.5893C339.766 32.6829 339.469 32.8474 339.27 32.9547C339.072 33.0622 338.688 33.2613 338.419 33.3972C338.149 33.5332 337.755 33.7252 337.544 33.824C337.333 33.9227 337.018 34.0656 336.845 34.1414C336.672 34.2172 336.378 34.3426 336.192 34.4201C336.007 34.4975 335.696 34.6225 335.501 34.6982C335.307 34.7738 334.978 34.8973 334.77 34.9723C334.563 35.0475 334.197 35.1738 333.959 35.2533C333.72 35.3328 333.399 35.4363 333.246 35.4833L332.968 35.5689L328.483 31.0789L323.997 26.5861L324.082 26.3074C324.13 26.154 324.242 25.8076 324.332 25.5377C324.423 25.2676 324.545 24.9127 324.605 24.749C324.665 24.5851 324.773 24.2954 324.846 24.1052C324.92 23.9148 325.037 23.6178 325.108 23.4453C325.179 23.2726 325.303 22.9793 325.384 22.7936C325.465 22.6079 325.601 22.3036 325.687 22.1176C325.772 21.9315 325.963 21.5367 326.111 21.2402C326.259 20.9436 326.453 20.5634 326.543 20.3952C326.633 20.227 326.79 19.9408 326.892 19.7594C326.994 19.5778 327.205 19.2157 327.362 18.9546C327.518 18.6934 327.739 18.335 327.852 18.1579C327.965 17.9808 328.174 17.6621 328.317 17.4497C328.461 17.2372 328.671 16.933 328.784 16.7737C328.898 16.6143 329.093 16.3458 329.218 16.1768C329.344 16.008 329.554 15.7328 329.685 15.5652C329.815 15.3978 330.017 15.1448 330.133 15.0031C330.248 14.8615 330.473 14.5935 330.632 14.4076C330.791 14.2217 331.022 13.9573 331.145 13.8201C331.269 13.6828 331.46 13.4729 331.571 13.3533C331.682 13.2338 331.928 12.9779 332.119 12.7845C332.309 12.5912 332.613 12.2935 332.794 12.1229C332.976 11.9524 333.21 11.7345 333.317 11.6389C333.423 11.5431 333.632 11.3588 333.783 11.2291C333.933 11.0993 334.183 10.8887 334.337 10.7607C334.492 10.6329 334.734 10.4373 334.876 10.3263C335.017 10.2152 335.263 10.0263 335.422 9.90651C335.581 9.78676 335.863 9.5804 336.049 9.44797C336.234 9.3155 336.52 9.11607 336.684 9.00503C336.847 8.89397 337.122 8.71256 337.294 8.60199C337.467 8.49142 337.756 8.31034 337.937 8.19963C338.119 8.08889 338.404 7.91859 338.572 7.8212C338.74 7.72366 339.015 7.56786 339.183 7.47498C339.351 7.38194 339.666 7.21294 339.882 7.09948C340.099 6.98584 340.435 6.81572 340.629 6.72124C340.824 6.62659 341.128 6.48238 341.304 6.40045C341.481 6.31853 341.774 6.18655 341.955 6.1072C342.137 6.02769 342.458 5.89152 342.671 5.80446C342.883 5.71738 343.212 5.58668 343.402 5.5141C343.592 5.44151 343.925 5.31886 344.141 5.24144C344.358 5.16402 344.712 5.04217 344.929 4.97071C345.145 4.89925 345.482 4.79269 345.676 4.73395C345.871 4.67536 346.171 4.58732 346.343 4.53855C346.515 4.48978 346.881 4.39304 347.155 4.32367C347.429 4.2543 347.787 4.16738 347.95 4.13052C348.114 4.09381 348.386 4.03556 348.555 4.00112C348.724 3.96685 348.999 3.91356 349.166 3.88281C349.333 3.85221 349.632 3.80121 349.831 3.76966C350.03 3.73827 350.326 3.6945 350.49 3.67261C350.653 3.65086 350.957 3.61515 351.165 3.59342C351.373 3.57168 351.651 3.54545 351.783 3.53515C351.916 3.52467 352.119 3.51037 352.233 3.50313C352.348 3.49588 352.797 3.49202 353.23 3.49474L353.229 3.49266ZM324.134 17.4901C324.15 17.489 324.162 17.4905 324.162 17.4943C324.162 17.4979 324.111 17.5902 324.048 17.6995C323.985 17.8088 323.838 18.072 323.721 18.2844C323.604 18.4969 323.412 18.8554 323.294 19.0812C323.176 19.3069 322.98 19.6944 322.859 19.9423C322.738 20.1902 322.555 20.5776 322.451 20.8034C322.347 21.0291 322.166 21.4398 322.048 21.716C321.929 21.9922 321.756 22.4105 321.663 22.6457C321.57 22.8809 321.425 23.2567 321.342 23.4809C321.259 23.7051 321.186 23.9086 321.18 23.9329C321.171 23.9697 321.162 23.9762 321.127 23.9707C321.104 23.9666 319.387 23.577 317.312 23.1045C315.237 22.6318 313.54 22.2413 313.54 22.2363C313.54 22.2315 313.828 22.0379 314.179 21.8063C314.53 21.5747 315.218 21.119 315.709 20.7937C316.199 20.4686 316.771 20.0902 316.978 19.953C317.186 19.8159 317.457 19.6406 317.581 19.5635C317.705 19.4864 317.915 19.3617 318.047 19.2864C318.18 19.2112 318.393 19.0947 318.521 19.0277C318.65 18.9608 318.866 18.8539 319.003 18.7903C319.141 18.7267 319.329 18.6421 319.421 18.6022C319.514 18.5622 319.706 18.4842 319.847 18.4285C319.989 18.373 320.246 18.2791 320.418 18.2202C320.59 18.1613 320.865 18.0742 321.029 18.0266C321.193 17.9791 321.461 17.9075 321.624 17.8677C321.787 17.8278 322.029 17.7736 322.162 17.7472C322.294 17.7208 322.515 17.6805 322.652 17.6578C322.789 17.6351 323.043 17.5989 323.215 17.5774C323.387 17.5559 323.64 17.53 323.777 17.5199C323.914 17.5097 324.044 17.4993 324.066 17.4969C324.088 17.4941 324.119 17.4911 324.134 17.4898L324.134 17.4901ZM321.792 29.3194C321.801 29.3186 323.706 31.2184 326.025 33.5412C329.054 36.5748 330.238 37.7705 330.229 37.7862C330.222 37.7983 330.118 37.9494 329.998 38.1222C329.878 38.2947 329.723 38.4951 329.654 38.5674C329.585 38.6397 329.475 38.7357 329.41 38.781C329.345 38.826 329.231 38.8917 329.158 38.9266C329.084 38.9616 328.962 39.0081 328.885 39.03C328.809 39.052 328.672 39.0781 328.581 39.0881C328.46 39.1014 328.372 39.1016 328.251 39.0884C328.16 39.0786 328.029 39.0559 327.96 39.038C327.891 39.0201 327.763 38.9705 327.674 38.928C327.586 38.8854 327.461 38.813 327.396 38.7671C327.318 38.7117 326.195 37.6084 324.061 35.4907C322.292 33.7345 320.817 32.2629 320.785 32.2203C320.752 32.1777 320.696 32.0932 320.659 32.0326C320.622 31.972 320.571 31.8685 320.544 31.8023C320.518 31.7363 320.482 31.6266 320.464 31.5585C320.444 31.4825 320.428 31.356 320.422 31.2317C320.417 31.1067 320.421 30.9774 320.433 30.8942C320.444 30.82 320.471 30.7012 320.493 30.6301C320.515 30.5591 320.562 30.4431 320.598 30.3722C320.633 30.3014 320.693 30.199 320.732 30.1448C320.771 30.0904 320.838 30.0064 320.883 29.9581C320.927 29.9096 321.004 29.8382 321.054 29.7992C321.104 29.7603 321.287 29.6367 321.46 29.5246C321.634 29.4126 321.783 29.3202 321.792 29.3194L321.792 29.3194ZM342.038 35.4668C342.044 35.4666 342.046 35.5156 342.041 35.5753C342.036 35.635 342.018 35.8323 342 36.0139C341.983 36.1954 341.947 36.4922 341.92 36.6738C341.894 36.8553 341.84 37.1631 341.802 37.3579C341.763 37.5526 341.699 37.8436 341.658 38.0044C341.618 38.1652 341.553 38.4082 341.513 38.5442C341.474 38.6804 341.404 38.9036 341.359 39.0405C341.313 39.1774 341.227 39.4197 341.167 39.579C341.106 39.7384 341.017 39.9629 340.969 40.0782C340.92 40.1934 340.818 40.4213 340.742 40.585C340.666 40.7485 340.531 41.0186 340.442 41.1854C340.353 41.352 340.211 41.6056 340.126 41.7489C340.041 41.8923 339.933 42.0697 339.886 42.1431C339.839 42.2166 339.794 42.273 339.787 42.2683C339.779 42.2638 339.221 43.1106 338.545 44.15C337.87 45.1895 337.313 46.0404 337.308 46.0408C337.303 46.041 336.911 44.3303 336.436 42.2389C335.962 40.1474 335.573 38.4281 335.573 38.4179C335.573 38.4078 335.593 38.3946 335.618 38.3884C335.642 38.3825 335.832 38.3157 336.04 38.2402C336.247 38.1647 336.591 38.0359 336.803 37.954C337.015 37.8719 337.373 37.7287 337.599 37.6356C337.824 37.5424 338.153 37.4031 338.33 37.3256C338.507 37.2484 338.832 37.1019 339.053 37.0002C339.274 36.8985 339.708 36.6897 340.017 36.5361C340.327 36.3826 340.775 36.1522 341.014 36.0245C341.253 35.8965 341.578 35.7188 341.737 35.6293C341.896 35.54 342.032 35.4667 342.038 35.4667L342.038 35.4668ZM320.416 36.7889L320.471 36.7865L321.627 37.9474L322.783 39.1086L322.773 39.1989C322.768 39.2486 322.717 39.9158 322.659 40.6816C322.601 41.4473 322.551 42.0884 322.547 42.1061C322.543 42.1238 322.469 42.2469 322.382 42.3797C322.294 42.5125 322.158 42.708 322.079 42.8143C321.999 42.9205 321.852 43.1051 321.751 43.2247C321.65 43.3442 321.444 43.5654 321.294 43.7163C321.143 43.8672 320.93 44.0668 320.819 44.1598C320.709 44.2529 320.557 44.3763 320.482 44.4343C320.407 44.4922 320.262 44.5983 320.159 44.6701C320.058 44.742 319.841 44.8816 319.677 44.9802C319.514 45.0789 319.225 45.2369 319.035 45.3314C318.845 45.4259 318.607 45.5386 318.505 45.5819C318.403 45.6252 318.198 45.7065 318.049 45.7626C317.901 45.8188 317.662 45.9012 317.519 45.946C317.376 45.9907 317.122 46.0628 316.954 46.1061C316.786 46.1494 316.522 46.2099 316.367 46.2407C316.213 46.2714 315.96 46.3149 315.805 46.3374C315.65 46.3598 315.39 46.3902 315.226 46.405C315.04 46.4219 314.772 46.432 314.511 46.432C314.281 46.432 314.017 46.4237 313.924 46.4134C313.832 46.4029 313.68 46.38 313.587 46.3622C313.494 46.3444 313.382 46.3182 313.338 46.3039C313.293 46.2896 313.231 46.2616 313.2 46.2416C313.168 46.2217 313.113 46.1716 313.076 46.1304C313.04 46.089 312.988 46.001 312.96 45.9345C312.932 45.8679 312.895 45.7472 312.878 45.6659C312.86 45.5847 312.84 45.4283 312.834 45.3184C312.828 45.2084 312.828 44.9984 312.834 44.8516C312.84 44.7048 312.857 44.4994 312.871 44.395C312.885 44.2907 312.914 44.106 312.937 43.9845C312.959 43.8632 313.013 43.619 313.056 43.4419C313.099 43.2649 313.168 43.0114 313.209 42.8786C313.25 42.7458 313.315 42.5462 313.353 42.435C313.391 42.3238 313.46 42.1355 313.507 42.0165C313.554 41.8976 313.637 41.6951 313.692 41.5668C313.748 41.4384 313.839 41.2356 313.896 41.1162C313.953 40.9966 314.059 40.7865 314.133 40.6494C314.206 40.5121 314.332 40.2913 314.411 40.1585C314.491 40.0257 314.621 39.8192 314.7 39.6998C314.78 39.5802 314.937 39.3594 315.05 39.2089C315.163 39.0584 315.33 38.8483 315.421 38.7421C315.512 38.6359 315.703 38.4327 315.844 38.2908C315.986 38.1486 316.2 37.95 316.319 37.8491C316.438 37.7483 316.63 37.5957 316.745 37.5101C316.86 37.4245 317.03 37.3036 317.123 37.2415C317.216 37.1794 317.354 37.0916 317.431 37.0463C317.551 36.9751 317.585 36.9629 317.68 36.955C317.74 36.9501 318.278 36.917 318.875 36.8816C319.471 36.8462 320.05 36.8113 320.16 36.8042C320.271 36.7969 320.386 36.79 320.416 36.7889L320.416 36.7889ZM348.004 6.64423C347.801 6.64069 347.568 6.64424 347.487 6.65211C347.405 6.66015 347.246 6.68157 347.133 6.69991C347.02 6.71843 346.852 6.7519 346.759 6.77444C346.666 6.79712 346.483 6.85121 346.352 6.89467C346.221 6.93813 346.025 7.0141 345.916 7.06335C345.807 7.11261 345.639 7.19646 345.543 7.24974C345.447 7.30286 345.289 7.39943 345.192 7.46397C345.094 7.52868 344.942 7.63941 344.854 7.71023C344.766 7.78089 344.625 7.90306 344.542 7.98161C344.459 8.06031 344.33 8.19294 344.255 8.27648C344.181 8.36002 344.06 8.50858 343.987 8.60644C343.913 8.7043 343.808 8.85689 343.752 8.9454C343.696 9.03393 343.599 9.20776 343.536 9.33169C343.472 9.45563 343.384 9.6512 343.34 9.76628C343.295 9.88136 343.233 10.066 343.201 10.1767C343.168 10.2873 343.124 10.4648 343.103 10.5711C343.081 10.6773 343.052 10.8534 343.039 10.9622C343.025 11.0712 343.01 11.2667 343.004 11.3968C342.998 11.531 343.002 11.7378 343.012 11.8748C343.022 12.0076 343.042 12.1922 343.055 12.2852C343.069 12.3781 343.098 12.5376 343.121 12.6394C343.143 12.7411 343.2 12.9403 343.246 13.082C343.293 13.2236 343.369 13.4264 343.414 13.5326C343.46 13.6389 343.545 13.8127 343.604 13.9189C343.662 14.0252 343.763 14.1927 343.829 14.2914C343.894 14.3899 344.01 14.5492 344.087 14.6455C344.163 14.7416 344.324 14.9181 344.443 15.0379C344.563 15.1575 344.74 15.3183 344.836 15.3951C344.932 15.4718 345.091 15.5882 345.189 15.6535C345.288 15.7191 345.443 15.814 345.533 15.8649C345.624 15.9156 345.767 15.9891 345.851 16.0283C345.936 16.0674 346.1 16.1351 346.217 16.1787C346.333 16.2225 346.527 16.2839 346.646 16.3151C346.765 16.3463 346.943 16.3862 347.04 16.4039C347.137 16.4217 347.282 16.4437 347.361 16.4532C347.441 16.4625 347.622 16.4748 347.763 16.4804C347.914 16.4863 348.121 16.4828 348.265 16.4717C348.4 16.4612 348.599 16.4382 348.707 16.4205C348.816 16.4028 348.98 16.37 349.073 16.3473C349.166 16.3246 349.321 16.2806 349.419 16.2496C349.516 16.2185 349.672 16.1617 349.766 16.1235C349.86 16.0852 350.023 16.0106 350.128 15.9578C350.233 15.9048 350.398 15.8132 350.495 15.7542C350.592 15.6951 350.769 15.5736 350.889 15.4841C351.037 15.373 351.196 15.2317 351.389 15.0387C351.582 14.8449 351.722 14.6875 351.833 14.5386C351.921 14.419 352.043 14.2416 352.103 14.1443C352.163 14.0469 352.258 13.8766 352.313 13.7658C352.368 13.6553 352.443 13.4887 352.48 13.3956C352.517 13.3028 352.569 13.1616 352.595 13.082C352.621 13.0023 352.663 12.8537 352.689 12.752C352.714 12.6503 352.75 12.4797 352.767 12.3729C352.785 12.2662 352.809 12.0815 352.819 11.9625C352.831 11.8281 352.835 11.6208 352.829 11.4161C352.823 11.2124 352.807 10.9998 352.786 10.8607C352.767 10.7368 352.723 10.5158 352.687 10.3698C352.651 10.2237 352.591 10.0174 352.552 9.9111C352.514 9.80487 352.446 9.637 352.402 9.53784C352.358 9.43885 352.281 9.28321 352.23 9.19178C352.18 9.10052 352.106 8.97514 352.066 8.91317C352.027 8.8512 351.95 8.7395 351.897 8.66513C351.843 8.59061 351.753 8.47472 351.697 8.4076C351.64 8.34032 351.506 8.19612 351.398 8.08697C351.291 7.97784 351.119 7.82123 351.018 7.73897C350.916 7.65673 350.764 7.54212 350.68 7.4845C350.596 7.42672 350.436 7.32838 350.325 7.26609C350.213 7.20363 350.048 7.11929 349.957 7.07841C349.867 7.03769 349.717 6.97572 349.624 6.94063C349.531 6.90569 349.363 6.85178 349.252 6.82088C349.14 6.78996 348.978 6.75022 348.89 6.73236C348.803 6.71447 348.651 6.68874 348.553 6.67522C348.453 6.66136 348.21 6.64769 348.004 6.64414L348.004 6.64423ZM347.964 10.1717C348.039 10.1757 348.146 10.1892 348.201 10.2018C348.256 10.2142 348.359 10.2467 348.429 10.2739C348.5 10.3011 348.61 10.358 348.675 10.4005C348.739 10.443 348.825 10.5076 348.866 10.5441C348.907 10.5807 348.981 10.663 349.03 10.7274C349.079 10.792 349.148 10.9025 349.183 10.9734C349.219 11.0442 349.264 11.1601 349.285 11.2309C349.316 11.3404 349.322 11.397 349.322 11.6092C349.322 11.8017 349.315 11.8844 349.292 11.9713C349.276 12.0333 349.235 12.1432 349.201 12.2155C349.168 12.2879 349.117 12.3821 349.087 12.4247C349.058 12.4675 348.994 12.5449 348.945 12.5969C348.896 12.6488 348.812 12.7233 348.757 12.7622C348.703 12.8012 348.597 12.8619 348.522 12.897C348.447 12.9321 348.322 12.9768 348.243 12.9963C348.131 13.0241 348.055 13.0315 347.884 13.031C347.703 13.0307 347.641 13.0238 347.513 12.9895C347.428 12.967 347.305 12.9213 347.24 12.8883C347.174 12.8551 347.08 12.8009 347.031 12.7677C346.983 12.7345 346.901 12.666 346.851 12.6155C346.8 12.5649 346.726 12.473 346.684 12.411C346.643 12.3492 346.589 12.2496 346.564 12.1899C346.539 12.13 346.507 12.0383 346.494 11.9859C346.48 11.9336 346.462 11.8271 346.453 11.7492C346.442 11.6504 346.442 11.563 346.455 11.4595C346.465 11.378 346.491 11.2534 346.513 11.1826C346.535 11.1118 346.572 11.0176 346.594 10.9734C346.616 10.9291 346.664 10.8496 346.7 10.7965C346.736 10.7435 346.794 10.6689 346.829 10.6305C346.864 10.5924 346.937 10.5261 346.991 10.4834C347.044 10.4406 347.136 10.3795 347.194 10.3474C347.252 10.3154 347.35 10.2716 347.411 10.2504C347.472 10.2291 347.565 10.2038 347.619 10.1942C347.672 10.1845 347.74 10.1739 347.771 10.1704C347.802 10.1668 347.889 10.1676 347.964 10.1715L347.964 10.1717ZM338.168 14.6278C337.894 14.6251 337.637 14.6255 337.597 14.629C337.558 14.6325 337.428 14.6465 337.308 14.6601C337.189 14.6736 336.99 14.7029 336.866 14.7253C336.742 14.7475 336.544 14.7905 336.424 14.8204C336.305 14.8505 336.113 14.9051 335.998 14.9418C335.883 14.9785 335.69 15.0477 335.569 15.0955C335.448 15.1434 335.26 15.2247 335.151 15.2764C335.042 15.3279 334.859 15.4227 334.745 15.4869C334.63 15.5513 334.424 15.6788 334.287 15.7702C334.15 15.8614 333.952 16.0052 333.847 16.0892C333.742 16.1734 333.568 16.3216 333.461 16.4187C333.353 16.5159 333.177 16.6921 333.069 16.8103C332.962 16.9286 332.819 17.0934 332.753 17.1766C332.686 17.26 332.575 17.4084 332.506 17.5066C332.436 17.6049 332.33 17.7649 332.268 17.8623C332.208 17.9597 332.081 18.1914 331.988 18.3773C331.894 18.5633 331.784 18.8022 331.742 18.9085C331.701 19.0147 331.638 19.1886 331.602 19.2948C331.566 19.401 331.509 19.5966 331.474 19.7294C331.439 19.8622 331.393 20.065 331.371 20.18C331.349 20.2951 331.32 20.4798 331.307 20.5905C331.293 20.7011 331.273 20.9113 331.263 21.0573C331.252 21.2124 331.249 21.4534 331.255 21.6367C331.26 21.8093 331.276 22.0494 331.288 22.1703C331.301 22.2911 331.326 22.4763 331.344 22.5817C331.362 22.6871 331.395 22.8561 331.418 22.9575C331.44 23.0587 331.481 23.2213 331.508 23.3187C331.535 23.4161 331.597 23.6062 331.645 23.7412C331.692 23.8761 331.772 24.0789 331.821 24.1919C331.87 24.3047 331.959 24.4914 332.019 24.6068C332.079 24.7221 332.187 24.9131 332.26 25.0311C332.332 25.1491 332.441 25.3166 332.503 25.4035C332.564 25.4903 332.659 25.6181 332.714 25.6875C332.769 25.7569 332.88 25.8895 332.961 25.9825C333.043 26.0754 333.206 26.2457 333.324 26.3608C333.442 26.4758 333.608 26.6275 333.692 26.6978C333.776 26.768 333.914 26.8774 333.999 26.941C334.084 27.0044 334.215 27.0963 334.289 27.1451C334.362 27.1939 334.492 27.2755 334.575 27.3264C334.659 27.3772 334.808 27.4611 334.905 27.5127C335.002 27.5642 335.165 27.6438 335.267 27.6893C335.369 27.7349 335.564 27.8144 335.701 27.866C335.838 27.9177 336.037 27.9848 336.143 28.0152C336.249 28.0455 336.383 28.0822 336.44 28.0967C336.498 28.1111 336.61 28.1372 336.69 28.1546C336.77 28.172 336.962 28.2047 337.116 28.2272C337.27 28.2497 337.554 28.2769 337.746 28.2874C338.019 28.3025 338.168 28.3024 338.429 28.2871C338.613 28.2763 338.846 28.2567 338.947 28.2437C339.049 28.2305 339.23 28.2012 339.349 28.1785C339.469 28.1558 339.653 28.1155 339.759 28.089C339.865 28.0623 340.053 28.0076 340.177 27.9673C340.301 27.9269 340.485 27.8616 340.587 27.822C340.688 27.7825 340.895 27.6905 341.045 27.6177C341.195 27.5448 341.398 27.4394 341.495 27.3834C341.592 27.3273 341.758 27.2234 341.865 27.1525C341.971 27.0816 342.127 26.9708 342.212 26.9063C342.297 26.8417 342.422 26.7426 342.488 26.6858C342.555 26.6291 342.686 26.5115 342.779 26.4245C342.873 26.3375 343.026 26.1813 343.12 26.0774C343.213 25.9734 343.353 25.8095 343.429 25.7133C343.506 25.6169 343.624 25.4588 343.691 25.3619C343.759 25.265 343.877 25.0807 343.954 24.9524C344.03 24.824 344.149 24.6031 344.219 24.4615C344.288 24.3198 344.384 24.1025 344.433 23.9786C344.482 23.8547 344.555 23.6482 344.595 23.5199C344.636 23.3914 344.694 23.1814 344.724 23.0531C344.754 22.9247 344.79 22.7581 344.804 22.6829C344.818 22.6076 344.844 22.4338 344.862 22.2966C344.885 22.1267 344.899 21.9113 344.905 21.6206C344.911 21.3495 344.908 21.106 344.896 20.9526C344.885 20.8199 344.862 20.6098 344.844 20.4859C344.827 20.3619 344.787 20.1447 344.757 20.003C344.726 19.8614 344.67 19.6404 344.631 19.5121C344.592 19.3836 344.531 19.1984 344.496 19.1002C344.461 19.002 344.397 18.8427 344.356 18.7461C344.314 18.6495 344.239 18.4908 344.191 18.3934C344.142 18.2961 344.059 18.1411 344.006 18.049C343.953 17.9569 343.877 17.8303 343.837 17.7673C343.797 17.7045 343.702 17.5661 343.626 17.4599C343.55 17.3537 343.416 17.18 343.328 17.0741C343.24 16.968 343.084 16.795 342.982 16.6896C342.88 16.5841 342.706 16.418 342.596 16.3206C342.485 16.2233 342.292 16.0665 342.166 15.9725C342.041 15.8785 341.835 15.7372 341.709 15.6585C341.583 15.5797 341.364 15.455 341.222 15.3815C341.08 15.3079 340.859 15.2036 340.732 15.15C340.605 15.0962 340.385 15.0133 340.242 14.9655C340.1 14.9179 339.864 14.8501 339.718 14.8147C339.573 14.7795 339.367 14.7355 339.261 14.717C339.155 14.6987 338.978 14.6723 338.867 14.6583C338.735 14.6415 338.496 14.6312 338.168 14.6277L338.168 14.6278ZM338.088 18.1295C338.23 18.1287 338.407 18.1353 338.482 18.1445C338.557 18.1535 338.694 18.1758 338.787 18.1942C338.88 18.2127 339.052 18.2594 339.171 18.2983C339.289 18.3371 339.473 18.412 339.581 18.4644C339.688 18.5169 339.851 18.6098 339.944 18.6708C340.037 18.7318 340.178 18.8362 340.257 18.903C340.337 18.9697 340.464 19.0888 340.539 19.1676C340.614 19.2464 340.722 19.3709 340.777 19.4442C340.833 19.5174 340.915 19.637 340.96 19.7097C341.006 19.7825 341.084 19.929 341.136 20.0352C341.187 20.1414 341.257 20.3153 341.293 20.4215C341.328 20.5277 341.375 20.7051 341.397 20.8158C341.419 20.9264 341.446 21.1112 341.456 21.2263C341.467 21.3463 341.47 21.5144 341.464 21.6206C341.458 21.7223 341.443 21.8817 341.429 21.9747C341.416 22.0676 341.384 22.2237 341.359 22.3216C341.334 22.4196 341.286 22.5717 341.253 22.6596C341.22 22.7476 341.158 22.8902 341.115 22.9763C341.072 23.0626 341.007 23.182 340.97 23.2419C340.934 23.3019 340.856 23.4161 340.796 23.4959C340.737 23.5756 340.625 23.709 340.546 23.7922C340.467 23.8756 340.337 23.9982 340.257 24.0649C340.178 24.1314 340.037 24.2356 339.944 24.2963C339.851 24.357 339.688 24.4494 339.582 24.5016C339.476 24.5535 339.316 24.6213 339.227 24.652C339.138 24.6828 338.99 24.7264 338.898 24.7491C338.806 24.7716 338.645 24.8012 338.541 24.8149C338.437 24.8286 338.243 24.8397 338.112 24.8397C337.98 24.8397 337.788 24.8286 337.684 24.8151C337.581 24.8014 337.423 24.7729 337.334 24.7517C337.244 24.7304 337.096 24.6866 337.003 24.6541C336.91 24.6218 336.747 24.553 336.641 24.5015C336.535 24.45 336.372 24.3578 336.279 24.2968C336.187 24.2358 336.046 24.1313 335.966 24.0646C335.887 23.9979 335.76 23.8788 335.684 23.7999C335.609 23.7212 335.502 23.5967 335.446 23.5234C335.391 23.4502 335.31 23.3337 335.267 23.2646C335.225 23.1956 335.154 23.0671 335.11 22.9794C335.066 22.8915 335.003 22.7476 334.97 22.6596C334.937 22.5717 334.89 22.4196 334.865 22.3216C334.839 22.2237 334.806 22.064 334.791 21.9666C334.771 21.8433 334.763 21.6967 334.762 21.4838C334.762 21.2729 334.771 21.1226 334.79 20.9996C334.805 20.9014 334.839 20.7416 334.864 20.6443C334.89 20.5469 334.938 20.3953 334.97 20.3075C335.003 20.2196 335.066 20.0761 335.11 19.9882C335.154 19.9005 335.225 19.772 335.267 19.703C335.31 19.6339 335.391 19.5174 335.446 19.4442C335.502 19.3709 335.609 19.2463 335.684 19.1676C335.76 19.0888 335.886 18.9697 335.966 18.903C336.046 18.8362 336.187 18.7319 336.279 18.6712C336.372 18.6106 336.535 18.5183 336.641 18.4663C336.747 18.4144 336.917 18.3432 337.019 18.3083C337.121 18.2734 337.273 18.2289 337.358 18.2096C337.443 18.1903 337.584 18.1647 337.671 18.1528C337.759 18.1409 337.946 18.1304 338.088 18.1295L338.088 18.1295Z" fill="#32BAB0"/>
                                                                    <defs>
                                                                    <linearGradient id="paint0_linear" x1="21.9295" y1="72.3123" x2="18.6077" y2="82.6866" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.4"/>
                                                                    <stop offset="0.27595" stop-color="#0F0D0D" stop-opacity="0.28962"/>
                                                                    <stop offset="0.67484" stop-color="#1E1A1B" stop-opacity="0.13006"/>
                                                                    <stop offset="1" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear" x1="14.9097" y1="72.6246" x2="27.0985" y2="72.6246" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0.30327" stop-color="white" stop-opacity="0"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0.5"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint2_linear" x1="14.9097" y1="72.6246" x2="27.0985" y2="72.6246" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.4"/>
                                                                    <stop offset="0.2169" stop-color="#0F0E0E" stop-opacity="0.25"/>
                                                                    <stop offset="0.51036" stop-color="#1E1B1B" stop-opacity="0.1"/>
                                                                    <stop offset="0.75683" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint3_linear" x1="11.6139" y1="85.9592" x2="11.6139" y2="59.2916" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0.17505" stop-color="white" stop-opacity="0"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0.5"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint4_linear" x1="41.5295" y1="75.1127" x2="49.693" y2="85.1418" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white" stop-opacity="0.5"/>
                                                                    <stop offset="0.01383" stop-color="white" stop-opacity="0.49309"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint5_linear" x1="45.1233" y1="69.3012" x2="45.1233" y2="59.6973" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white" stop-opacity="0"/>
                                                                    <stop offset="0.98617" stop-color="white" stop-opacity="0.49309"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0.5"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint6_linear" x1="38.2458" y1="74.0067" x2="51.1974" y2="74.0067" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0.25563" stop-opacity="0.4"/>
                                                                    <stop offset="0.46104" stop-color="#0F0D0D" stop-opacity="0.28962"/>
                                                                    <stop offset="0.75796" stop-color="#1E1A1B" stop-opacity="0.13006"/>
                                                                    <stop offset="1" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint7_linear" x1="70.7931" y1="66.97" x2="70.7931" y2="84.9025" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.4"/>
                                                                    <stop offset="0.27595" stop-color="#0F0D0D" stop-opacity="0.28962"/>
                                                                    <stop offset="0.67484" stop-color="#1E1A1B" stop-opacity="0.13006"/>
                                                                    <stop offset="1" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint8_linear" x1="68.8002" y1="65.3151" x2="72.9539" y2="61.4257" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.4"/>
                                                                    <stop offset="0.27595" stop-color="#0F0D0D" stop-opacity="0.28962"/>
                                                                    <stop offset="0.67484" stop-color="#1E1A1B" stop-opacity="0.13006"/>
                                                                    <stop offset="1" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint9_linear" x1="70.9081" y1="63.3382" x2="66.9502" y2="67.2878" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white" stop-opacity="0.5"/>
                                                                    <stop offset="0.01383" stop-color="white" stop-opacity="0.49309"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint10_linear" x1="93.6521" y1="72.6058" x2="111.332" y2="72.6058" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.4"/>
                                                                    <stop offset="0.27595" stop-color="#0F0D0D" stop-opacity="0.28962"/>
                                                                    <stop offset="0.67484" stop-color="#1E1A1B" stop-opacity="0.13006"/>
                                                                    <stop offset="1" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint11_linear" x1="89.9193" y1="85.522" x2="89.9193" y2="59.6973" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-opacity="0.3"/>
                                                                    <stop offset="0.21414" stop-color="#0F0D0D" stop-opacity="0.21727"/>
                                                                    <stop offset="0.52404" stop-color="#1E1A1B" stop-opacity="0.09755"/>
                                                                    <stop offset="0.77654" stop-color="#231F20" stop-opacity="0"/>
                                                                    </linearGradient>
                                                                    <linearGradient id="paint12_linear" x1="89.9193" y1="85.522" x2="89.9193" y2="59.6973" gradientUnits="userSpaceOnUse">
                                                                    <stop offset="0.18736" stop-color="white" stop-opacity="0"/>
                                                                    <stop offset="0.98876" stop-color="white" stop-opacity="0.49309"/>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0.5"/>
                                                                    </linearGradient>
                                                                    </defs>
                                                            </svg>

                                                            <h1>Upload A Photo Forever In One of our Grids</h1>
                                                         
                                                                
                                                                <search-component></search-component>
                                                           
                                                          
                                                    </div>
                                            </div>
                                </div>
                            </div>  
                </div>
            

            <main>
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
