<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre</title>
    <style>
        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: none;
            outline: none;
            padding: 18px 16px;
            background-color: transparent;
            cursor: pointer;
            transition: all .5s ease-in-out;
        }

        .input::placeholder {
            color: transparent;
        }

        .input:focus::placeholder {
            color: rgb(131, 128, 128);
        }

        .input:focus,
        .input:not(:placeholder-shown) {
            background-color: #fff;
            border: 1px solid rgb(98, 0, 255);
            width: 290px;
            cursor: none;
            padding: 18px 16px 18px 40px;
        }

        .icon {
            position: absolute;
            left: 0;
            top: 0;
            height: 40px;
            width: 40px;
            background-color: #fff;
            border-radius: 10px;
            z-index: -1;
            fill: rgb(223, 90, 194);
            border: 1px solid rgb(223, 90, 194);
            margin-bottom: 0px;
        }

        .input:hover+.icon {
            transform: rotate(360deg);
            transition: .2s ease-in-out;
        }

        .input:focus+.icon,
        .input:not(:placeholder-shown)+.icon {
            z-index: 0;
            background-color: transparent;
            border: none;
        }
        .header_section{
            height: 90px;
        }
    </style>
</head>
<body>
    <!-- Votre contenu ici -->
    <header class="header_section" style="background-color: #D14D72; color:#FFF5E4">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <h2 style="color: #FFF5E4; font-size:30px; font-weight:bold; margin-top:5px">D🍩nuts</h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a style="color:#FFF5E4" class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#FFF5E4" class="nav-link" href="{{url('show_cart')}}">Cart <i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#FFF5E4" class="nav-link" href="{{url('show_order')}}">ORDER</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:#FFF5E4" class="nav-link" href="{{url('about')}}">about us</a>
                        </li>
                        <div class="input-container">
                            <form action="{{url('product_search')}}" method="GET">
                                @csrf
                                <input placeholder="Search something..." class="input" name="search" type="text">
                                <button type="submit" class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon" >
                                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                                        <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <rect fill="white"></rect>
                                            <path d="M7.25007 2.38782C8.54878 2.0992 10.1243 2 12 2C13.8757 2 15.4512 2.0992 16.7499 2.38782C18.06 2.67897 19.1488 3.176 19.9864 4.01358C20.824 4.85116 21.321 5.94002 21.6122 7.25007C21.9008 8.54878 22 10.1243 22 12C22 13.8757 21.9008 15.4512 21.6122 16.7499C21.321 18.06 20.824 19.1488 19.9864 19.9864C19.1488 20.824 18.06 21.321 16.7499 21.6122C15.4512 21.9008 13.8757 22 12 22C10.1243 22 8.54878 21.9008 7.25007 21.6122C5.94002 21.321 4.85116 20.824 4.01358 19.9864C3.176 19.1488 2.67897 18.06 2.38782 16.7499C2.0992 15.4512 2 13.8757 2 12C2 10.1243 2.0992 8.54878 2.38782 7.25007C2.67897 5.94002 3.176 4.85116 4.01358 4.01358C4.85116 3.176 5.94002 2.67897 7.25007 2.38782ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </ul>
                </div>
        
                @if (Route::has('login'))
                    @auth
                    <a style="color:#FFF5E4; font-size: 24px;" class="nav-link" href="{{url('/profile')}}"><i class="fa-solid fa-user"></i></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a class="btn btn-light" style="border-bottom-left-radius: 35%; border-bottom-right-radius: 35%;" href="{{ route('register') }}">
                            <i class="fa-solid fa-right-to-bracket"></i> 
                        </a>
                    @endauth
                @endif
            </nav>
        </div>
      
        
    </header>
</body>
</html>

