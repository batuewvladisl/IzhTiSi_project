<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>IzhTiSi</title>


<style>

    * {
        max-width: 100%;
        margin: 0px;
    }
    
    @font-face {
        font-family: 'Nunito-Light'; 
        src: local('Nunito-Light'),
        url(../fonts/Nunito-Light.ttf); 
    }

::selection {
    background: #ffe6006b;
}

::-moz-selection {
    background: #ffe6006b;
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track {
  background: #cacaca6b;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background: #fed932;
  border-radius: 10px;
}
    
    body {
        background: url(img/glavnaya4.jpg);
        background-attachment: fixed;
        background-repeat: round;
    }
    
    button {
        padding: 0;
        border: none;
        font: inherit;
        color: inherit;
        background-color: transparent;
        cursor: pointer;
    }
    
    p, label {
        font-size: 30px;
        font-family: 'Nunito-Light';
    }
    
    input {
        outline: none;
        font-size: 20px;
        font-family: 'Nunito-Light';
    }

    a:active,
    a:hover,
    a {
        text-decoration: none;
        color: rgb(0, 0, 0);
    }
    
    .warning {
        font-family: 'Nunito-Light';
        color: red;
        font-size: 20px;
        margin-top: 1%;
    }
    
    .div_header {
        max-width: 100%;
        padding: 1.2%;
        background: #fed932;
    }
    
    .header {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    
    .b1, .b2, .b3, .b4 {
        width: 150px;
        padding: 0.5%;
        color: white;
        font-size: 25px;
        font-family: 'Nunito-Light';
        background: #e95358;
        transition-duration: 1s;
        border-radius: 6px;
    }
    
    .b1:hover {
        transition: 1s;
        background: #e95358ce;
        border-radius: 13px;
    }
    
    .b2:hover {
        transition: 1s;
        background: #e95358ce;
        border-radius: 13px;
    }
    
    .b3:hover {
        transition: 1s;
        background: #e95358ce;
        border-radius: 13px;
    }
    
    .b4:hover {
        transition: 1s;
        background: #e95358ce;
        border-radius: 13px;
    }
    
    .b5 {
        width: 150px;
        font-family: 'Nunito-Light';
        font-weight: bold;
        padding: 0.5%;
        font-size: 25px;
        background: #ffffffaf;
        box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
        border-radius: 6px;
        transition-duration: 1s;
    }
    
    .b5:hover{
        transition: 1s;
        background: #ffffff94;
        box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
    }
    
    .b6 {
        width: 75px;
        font-family: 'Nunito-Light';
        font-weight: bold;
        padding: 0.5%;
        font-size: 25px;
        background: #ffffffaf;
        box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
        border-radius: 6px;
        transition-duration: 1s;
    }

    .b7 {
        width: 170px;
        font-family: 'Nunito-Light';
        font-weight: bold;
        padding: 0.5%;
        font-size: 25px;
        background: #ffffffaf;
        box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
        border-radius: 6px;
        transition-duration: 1s;
    }
    
    .header_content {
        display: flex;
        align-items: center;
        height: 850px;
        justify-content: center;
    }
    
    .header_img {
        font-size: 40px;
        width: 700px;
        height: 550px;
        text-align: center;
        background: rgba(255, 255, 255, 0.664);
        box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
        position: relative;
    }

    .form-control {
        background: rgb(221, 221, 221);
        width: 300px;
        padding: 0.8%;
        border: solid #fed932 2px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px 1px rgb(155, 155, 155);
        margin: 2%;
    }
    
    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 2%;   
    }

@media only screen and (max-width: 800px) {
    .header_content {
        height: 800px;
    }
    
    .header_img {
        font-size: 40px;
        width: 500px;
        height: 480px;
    }

}
@media only screen and (max-width: 480px) {
    .header_content {
        height: 800px;
    }
    
    .header_img {
        font-size: 40px;
        width: 400px;
        height: 480px;
    }

    .logo_img {
        width: 130px;
        height: 18px;
    }

    .b5 {
        width: 100px;
        font-size: 20px;
    }
    
    .b7 {
        width: 130px;
        font-size: 20px;
    }
}
@media only screen and (max-width: 370px) {
    .header_content {
        height: 800px;
    }
    
    .header_img {
        font-size: 40px;
        width: 350px;
        height: 430px;
    }

    .logo_img {
        width: 110px;
        height: 15px;
    }

    .b5 {
        width: 70px;
        font-size: 18px;
    }
    
    .b7 {
        width: 130px;
        font-size: 18px;
    }
}
    
    </style>
        <body>
                <div class="div_header">
                    <header class="header">
                        <img class="logo_img" src="img/logo.png" alt="">
    
                                <button href="{{ route('login') }}" class="b5"><a  href="{{ route('login') }}">Войти</a></button>
                                @if (Route::has('register'))
                                <button class="b7"><a href="{{ route('register') }}">Регистрация</a></button>
                                @endif

                    </header>
                </div>
                        <div class="header_content">
                            <div class="header_img">
                                <form method="POST" action="{{ route('register') }}" class="form">
                                    @csrf
    
                                    <label for="name">{{ __('Логин') }}</label>
                                    <input id="name" placeholder="Введите логин" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                    <label for="email">{{ __('E-mail') }}</label>
                                    <input id="email" placeholder="Введите e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    <label for="password">{{ __('Пароль') }}</label>
                                    <input id="password" placeholder="Введите пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    <label for="password-confirm">{{ __('Подтвердить пароль') }}</label>
                                    <input id="password-confirm" placeholder="Подтвердите пароль" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    
                                    
                                    <button type="submit" class="b1">
                                        {{ __('Register') }}
                                    </button>

                                    @error('password')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @error('email')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                    @error('name')
                                    <span class="warning" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </form>
                            </div>
                        </div> 
        </body>             
    