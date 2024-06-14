<!DOCTYPE html>
<html lang="en" id="single-wrapper">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">

    <title>Brandbeans</title>
    <link rel="stylesheet" href="{{asset('asset/css/style.min.css')}}">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="{{asset('asset/css/waves.min.css')}}">

</head>

<style>
    body {
        font-size: 18px !important;
    }
</style>

<body>
    <div id="single-wrapper">
        <div class="w-50">

            <form method="POST" action="{{ route('password.email') }}" class="frm-single">
                @csrf
                <div class="inside">
                    <div class="frm-title">
                        <img src="{{asset('asset/img/logo.png')}}" alt="" style="height: 25%; width:25%;">
                    </div>
                    <!-- /.title -->
                    <div class="frm-title">Reset password</div>

                    <div class="frm-input" style="width: 90%;">

                        <input id="email" placeholder="Email" type="email" class="frm-inp @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email"><i class="fa fa-user frm-ico"></i>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="frm-submit">
                                Send Password Reset Link<i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- .inside -->
            </form>
            <!-- /.frm-single -->
        </div>
    </div>


    <!--/#single-wrapper -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
    <!-- 
	================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('asset/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('asset/scripts/modernizr.min.js')}}"></script>
    <script src="{{asset('asset/scripts/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/scripts/nprogress.js')}}"></script>
    <script src="{{asset('asset/scripts/waves.min.js')}}"></script>

    <script src="{{asset('asset/scripts/main.min.js')}}"></script>
</body>

</html>