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

<body>
    <div class="d-flex justify-content-center pt-5" id="wrapper">
        <!-- Sidebar-->
        <div class="border p-5">
            <div class="text-info text-center pb-2 fw-bold">Brand beans</div>
            <form action="{{ route('otp.generate') }}" method="post">
                @csrf

                <div class="">
                    <div class="">
                        {{-- <img src="{{ asset('asset/img/logo.png') }}" alt="" style="height: 25%; width:25%;"> --}}

                    </div>


                    <div class="my-3">
                        <label for="mobileno" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" value="{{ old('mobileno') }}" id="mobileno" name="mobileno" required autocomplete="mobileno" autofocus placeholder="Enter Your Registered Mobile Number"><i class="fa fa-phone frm-ico"></i>
                        @error('mobileno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mx-2">
                        <button type="submit" class="btn btn-primary btn-sm mx-2">
                            {{ __('Generate OTP') }}
                        </button>
                        <a class="mx-2" href="{{ route('login') }}">
                            {{ __('Login with password') }}
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
