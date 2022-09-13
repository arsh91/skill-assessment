<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .login-form {
        width: 451px;
        margin: 171px auto;
        font-size: 15px;
    }

    .login-form form {
        margin-bottom: 15px;
        /* background: #f7f7f7; */
        background: white;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 12px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

    /* .inputs {
        border-radius: 7px;
        border-color: #dee2e6;
    } */

    .inputs {
        outline: 0;
        border-width: 0 0 2px;
        border-color: #dee2e6;
        font-size: 14px;
    }

    .inputs:focus {
        border-color: #dee2e6 !important;
    }

    .formAuth {
        height: 400px;
    }

    .logigBody {
        /* background-image: linear-gradient(140deg, #dc3545c2 0%, #dc35c7c7 50%, #419fd67a 75%); */
        /* background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%); */
        background-image: linear-gradient(140deg, #3ddc35de 0%, #35dc7099 50%, #41c8d67a 75%);
    }

    .ms-n5 {
        margin-left: -40px;
    }

    .btnBordercss {
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 18px !important;
        margin-right: -10px;
        border-right: white !important;
    }

    .searchinput {
        border-top-right-radius: 20px !important;
        border-bottom-right-radius: 18px !important;
        font-size: 14px;
    }

    .btncolor {
        background-image: linear-gradient(140deg, #3ddc35de 0%, #35dc7099 50%, #41c8d67a 75%);

    }
    </style>
</head>

<body class="logigBody">
    <div class="login-form">
        <form action="{{ route('usersLoginPost') }}" method="post" class="formAuth">
            {!! csrf_field() !!}
            <h2 class="text-center"><b>Login</b></h2>
            @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ \Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ \Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            <div class="form-group" style="margin-top:50px;">
                <div class="input-group">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border btnBordercss" type="button">
                            <i class="fa fa-user"></i>
                        </button>
                    </span>
                    <input type="email" class="form-control border searchinput" name="email"
                        placeholder="Type your email" required="required">
                    @if ($errors->has('email'))
                    <span class="help-block font-red-mint">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border btnBordercss" type="button">
                            <i class="fa fa-lock"></i>
                        </button>
                    </span>
                    <input type="password" class="form-control border searchinput" name="password"
                        placeholder="Type your password" required="required">
                    @if ($errors->has('password'))
                    <span class="help-block font-red-mint">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btncolor" style="border-radius: 20px;">Log
                    in</button>
            </div>
        </form>
    </div>
</body>

</html>