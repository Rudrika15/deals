<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<style>
    body {
        /* background-image: url('path/to/your/image.png'); */
        /* If you want to use a background image, replace 'path/to/your/image.png' with the actual path to your image */
        /* Or, if you want to use a linear gradient background color */
        /* background: linear-gradient(#012e6f, #00b9f0); */
        /* Adjust the colors as needed */
        /* You can also specify the direction of the gradient if desired */
        /* background: linear-gradient(90deg, red, yellow); */
    }
</style>

<body class="bg-light">


    {{-- <style>
        body {
            /* background-image: url({{ asset('images/bg.png') }}); */
            /* background-color: linear-gradient(90deg, #012e6f 0%, #00b9f0 100%); */
            background-color: linear-gradient(red, yellow);
        }
    </style> --}}


    <div class="container bg-white containerImage border shadow rounded d-flex justify-content-center h-100 mt-5 mb-4" style="width: 30%">
        <div class="row ">

            <div class="col-md-12">
                <div class="d-flex justify-content-center pt-3">
                    <!-- Sidebar-->
                    <div class=" p-5 ">
                        <div class="text-info text-center pb-4 fw-bold"><img src="{{ asset('images/logo.png') }}" class="w-75" alt=""></div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control" id="exampleInputPassword1">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                        <i class="bi bi-eye-slash" id="eyeIcon"></i> <!-- Eye slash icon represents hidden password by default -->
                                    </button>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Submit</button>

                                @if (Route::has('password.request'))
                                    <div class="pt-3"><a href="{{ route('password.request') }}" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
                                @endif
                            </div>
                        </form>
                        <hr>
                        <div class="pt-2  d-flex justify-content-between">
                            <a href="{{ route('otp.login') }}" class="a-link"><i class="fa fa-user-plus"></i>Login with OTP</a>
                            <a href="{{ route('register') }}" class="a-link"><i class="fa fa-user-plus"></i>Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script type='text/javascript'>
        $(document).ready(function() {
            $('#togglePassword').click(function() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');

                // Toggle password visibility and change eye icon accordingly
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $('#eyeIcon').removeClass('bi-eye-slash').addClass('bi-eye');
                } else {
                    passwordField.attr('type', 'password');
                    $('#eyeIcon').removeClass('bi-eye').addClass('bi-eye-slash');
                }
            });
        });
    </script>
</body>

</html>
