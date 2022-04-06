<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport">

        <title>IzhTiSi</title>

<style>
* {
    max-width: 100%;
    margin: 0px;
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

@font-face {
	font-family: 'Nunito-Light'; 
	src: local('Nunito-Light'),
    url(../fonts/Nunito-Light.ttf); 
}

@font-face {
        font-family: 'Nunito-Medium'; 
        src: local('Nunito-Medium'),
        url(../fonts/Nunito-Medium.ttf); 
    }

button {
    padding: 0;
    border: none;
    font: inherit;
    color: inherit;
    background-color: transparent;
    cursor: pointer;
}

p {
    font-size: 30px;
    font-family: 'Nunito-Light';
}

    label {
        font-size: 30px;
        padding: 1% 0 0 1%;
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

.bz {
    margin: 0.5% 0 1% 1%;
}

.b11, .b22, .b33, .b44 {
    color: white;
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
    width: 95px;
    font-family: 'Nunito-Light';
    font-weight: bold;
    text-align: center;
    padding: 0.5%;
    font-size: 25px;
    background: #ffffffaf;
    box-shadow: 0px 0px 10px 1px rgb(0, 0, 0);
    border-radius: 6px;
    transition-duration: 1s;
}

.o_nas {
    display: flex;
    align-items: center;
    flex-direction: column;
}

.o_nas_zag {
    font-size: 50px;
    padding: 1.5%;
}

.o_nas_block {
    width: 85%;
    height: 500px;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.o_nas_img {
    float: left;
    transition-duration: 1s;
    padding: 1% 1% 0 1%;
}

.o_nas_img:hover {
    transition: 1s;
    transform: scale(1.2);
}

.o_nas_text {
    padding: 1%;
    font-size: 32px;
}

.form-control {
    background: rgb(221, 221, 221);
    width: 550px;
    padding: 0.6%;
    border: solid #fed932 2px;
    border-radius: 10px;
    box-shadow: 0px 0px 5px 1px rgb(155, 155, 155);
    margin: 1%;
}
    
.form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.anketa_zag {
    display: flex;
    align-items: center;
    flex-direction: column;
    font-size: 50px;
    padding: 1.5%;

}

.anketa_bg {
    width: 85%;
    height: 360px;
    margin: 0 0 2% 0;
    background: rgba(255, 255, 255, 0.664);
    box-shadow: 0px 0px 12px 1px rgb(0, 0, 0);
}

.form_anketa {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.warning {
    display: flex;
    align-items: center;
    flex-direction: column;
    font-family: 'Nunito-Medium';
    font-weight: bold;
    color: red;
    font-size: 30px;
}

.footer {
    display: flex;
    justify-content: center;
    max-width: 100%;
    padding: 1%;
    background: #fed932;
    margin-top: 5%;
}

.footer_txt {
    font-size: 27px;
    text-align: center;
    transition-duration: 1s;
    width: 340px;
}

.footer_txt:hover {
    transition: 1s;
    transform: scale(0.9);
}

@media only screen and (max-width: 1440px) {
    .header_content {
        height: 650px;
    }

    .o_nas_text {
        font-size: 30px;
    }

    .o_nas_block {
        height: 440px;
    }

    .anketa_bg {
    height: 320px;
    }

}
@media only screen and (max-width: 1280px) {
    .header_content {
        height: 560px;
    }

    .o_nas_text {
        font-size: 28px;
    }
    
    .anketa_bg {
        height: 300px;
    }

    .footer_txt {
        font-size: 24px;
    }

}
@media only screen and (max-width: 1024px) {
    .b1, .b2, .b3, .b4 {
        width: 120px;
        padding: 0.4%;
        font-size: 20px;
    }

    .b5 {
        width: 120px;
        padding: 0.4%;
        font-size: 20px;
    }
    
    .b6 {
        width: 95px;
        padding: 0.3%;
        font-size: 20px;
    }

    .header_content {
        height: 450px;
    }

    .o_nas_text {
        font-size: 24px;
    }

    .o_nas_block {
        height: 385px;
    }

    .anketa_bg {
        height: 240px;
    }

    .footer_txt {
        font-size: 22px;
    }

}
@media only screen and (max-width: 800px) {
    .b1, .b2, .b3, .b4 {
        width: 100px;
        padding: 0.3%;
        font-size: 17px;
    }

    .b5 {
        width: 100px;
        padding: 0.3%;
        font-size: 17px;
    }

    .logo_img {
        width: 170px;
        height: 22px;
    }

    .o_nas_zag {
        font-size: 40px;
    }

    .o_nas_text {
        font-size: 20px;
    }

    .o_nas_block {
        height: 350px;
    }


}

</style>

    <body>
            <div class="div_header">
                <header class="header">
                    <img class="logo_img" src="img/logo.png" alt="">
        
                    <button class="b1"><a class="b11" href="{{ route('welcome') }}">Услуги</a></button>
                    <button class="b2"><a class="b22" href="{{ route('welcome') }}">Продукты</a></button>
                    <button class="b3"><a class="b33" href="{{ route('welcome') }}">Цены</a></button>
                    <button class="b4"><a class="b44" href="{{ route('welcome') }}">О нас</a></button>
                    @auth
                    @if(auth()->user()->roles )
                    <button class="b6"><a href="{{route('admin')}}">Админ</a></button>
                    @endif
                    @endauth

                    @if (Route::has('login'))
                        @auth
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="b6">
                            @csrf
                            <button type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><a href="{{ route('logout') }}">Выйти</a></button>
                        </form>
                        @else
                        @endauth
                    @endif
                </header>
            </div>
            @if(session()->has('success'))
            <div class="warning">
                {{ session()->get('success') }}
            </div>
            @endif
                    <div class="o_nas">
                        <p class="o_nas_zag">Оставьте свою заявку</p>
                        <div class="o_nas_block">
                                <form class="form" method="post" action="{{ route('users') }}" enctype="multipart/form-data">
                                    @csrf
                                    <label for="name">ФИО</label>
                                    <input id="name" placeholder="Введите ФИО" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="adress">Адрес</label>
                                    <input id="adress" placeholder="Введите адрес" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress" value="{{ old('adress') }}" required autocomplete="adress" autofocus>
                                    <label for="usluga">Услуга</label>
                                    <input id="usluga" placeholder="Введите услугу" type="text" class="form-control @error('usluga') is-invalid @enderror" name="usluga" value="{{ old('usluga') }}" required autocomplete="usluga" autofocus>
                                    <button class="b1 bz">Отправить</button>
                                </form>
                        </div>
                    </div>

                        <p class="anketa_zag">Ваши заявки</p>
                        @foreach($data as $el)
                        <div class="form_anketa">
                            <div class="anketa_bg">
                                <p class="o_nas_text"><b>{{ $el->name }}</b></p>
                                <p class="o_nas_text">{{ $el->adress }}</p>
                                <p class="o_nas_text">{{ $el->usluga }}</p>
                                <p class="o_nas_text"><small style="color: red;"><b>{{ $el->created_at }}</b></small></p>
                                <a href="{{ route('user-delete', $el->id) }}" type="submit" class="b1 bz">Удалить</a>
                            </div>
                        </div>
                        @endforeach
                    

                    <footer class="footer">
                        <p class="footer_txt">+7 (800) 77-51-256 <br>Skype: sale_1c-izhtc <br>sale@1c-izhtc.ru <br>2005-2022 © 1C-ИжТиСи</p>
                    </footer>
                    
    </body>
</html>
