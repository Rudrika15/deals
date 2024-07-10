<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brand Beans</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brandOffer.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        .login-box {
            box-shadow: 0 15px 25px rgba(0, 0, 0, .4);
            border-radius: 10px;
            height: 350px;
            width: 350px;
            margin-bottom: 4%;
        }
    </style>

</head>

<body>
    @include('extra.homePageMenu')
    <div class="d-flex justify-content-center pt-5" id="wrapper">
        <!-- Sidebar-->
        <div class="border p-5 login-box">
            {{-- <div class="text-info text-center pb-2 fw-bold">Brand beans</div> --}}
            <h2 class="text-info text-center mb-5">Check OTP</h2>
            <form action="{{ route('auth.loginotp') }}" method="post">
                @csrf

                <div class="mx-2">

                    <div class="mb-2">
                        <label class="form-label">Check Otp</label>
                        <input type="text" class="form-control" value="{{ old('otp') }}" id="otp"
                            name="otp" required autocomplete="otp" autofocus placeholder="Enter OTP here"><i
                            class="fa fa-phone frm-ico"></i>
                        @error('otp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mb-3 mx-2 mt-3">
                            {{ __('Login') }}
                        </button>


                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="mx-2" href="{{ route('login') }}">
                            {{ __('Login With Email') }}
                        </a>

                    </div>
                </div>

            </form>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
        @include('extra.homePageFooter')
    </footer>
</body>

</html>
