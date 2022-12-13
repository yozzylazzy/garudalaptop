<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href='{{asset("css/bootstrap.min.css")}}' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src='{{asset("js/bootstrap.bundle.min.js")}}'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- <script src="static/js/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="static/css/AdminLTE.min.css" />
</head>

<style>
    body {
        background: url("https://cdnb.artstation.com/p/assets/images/images/024/538/827/original/pixel-jeff-clipa-s.gif?1582740711");
        /* background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); */
        background-size: cover;
        /* animation: gradient 15s ease infinite; */
        height: 100vh;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>

<body>
    <header>

    </header>
    <main>
        <div class="container mt-5 p-5 align-items-center" id="maincontent">
            <div id="liveAlertPlaceholder" style="width: 30em; margin-left: auto; margin-right: auto;"></div>
            <div class="card p-3" style="width: 30em; margin-left: auto; margin-right: auto;
            font-family: 'Cormorant Garamond', serif;">
                <div class="container text-center mt-3">
                    <h1><strong>LOGIN</strong></h1>
                </div>
                <hr style="color: rgb(114, 0, 160);
                height: 0.4em; margin-top: 2%; margin-bottom: 2%; opacity: 100%;">
                <div class="container text-center mt-2">
                    <p class="text-muted" style="">Selamat datang, silahkan login untuk mengakses
                        <BR> website <span style="color: blueviolet"><strong>GARUDA LAPTOP</strong></span>
                    </p>
                </div>
                <div class="container mt-1">
                    @if(Session::has('pesan'))
                    <div class="alert alert-danger">
                        {{Session::get('pesan')}}</div>
                    @endif
                    <form action="{{url('proses_login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}
                        <div class="">
                            <label for="email" class="form-label" style="vertical-align: middle;">Email :</label>
                            <input type="email" name="email" id="email" class="form-control">
                            @if($errors->has('email'))
                            <span class="error" style="color: red" value="{{old('email')}}">* {{ $errors->first('email')
                                }}</span>
                            @endif
                        </div>
                        <div class="mt-3">
                            <label for="password" class="form-label">Password :</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @if($errors->has('password'))
                            <span class="error" style="color: red">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="d-grid gap-3 mt-4 mb-3">
                            <button type="submit" value="login" class="btn btn-primary" style="background: linear-gradient(-80deg, #e73c7e, #23a6d5, #23d5ab);
                            background-size: 400% 400%;
                animation: gradient 5s ease infinite;">Login</button>
                        </div>
                    </form>
                </div>
                <div class="container text-center mt-3">
                    <p class="text-muted">✒ CREATED BY YOSEF ADRIAN</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>