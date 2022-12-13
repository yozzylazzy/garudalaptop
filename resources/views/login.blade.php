<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
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
            <div class="card p-3" style="width: 30em; margin-left: auto; margin-right: auto;">
                <div class="container text-center mt-3">
                    <h1><strong>LOG IN</strong></h1>
                </div>
                <hr>
                <div class="container mt-3">
                    @if(Session::has('pesan'))
                    <div class="alert alert-danger">
                        {{Session::get('pesan')}}</div>
                    @endif
                    <form action="{{url('proses_login')}}" method="POST" id="logForm">
                        {{ csrf_field() }}
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @if($errors->has('email'))
                        <span class="error" style="color: red" value="{{old('email')}}">*{{ $errors->first('email') }}</span>
                        @endif
                        <br>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" >
                        @if($errors->has('password'))
                        <span class="error" style="color: red">*{{ $errors->first('password') }}</span>
                        @endif
                        <div class="d-grid gap-3 mt-4 mb-3">
                            <button type="submit" value="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>