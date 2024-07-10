<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brandOffer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head> --}}

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
            height: 600px;
            width: 350px;
            margin-top: 5%;
            margin-bottom: 5%;
        }
    </style>

</head>

<body>
    @include('extra.homePageMenu')
    <div class="d-flex justify-content-center pt-3 ">
        <!-- Sidebar-->
        <div class="border p-5 login-box " style="width: 30%">
            {{-- <div class="text-info text-center pb-2 fw-bold">Brand beans</div> --}}
            <h2 class="text-info text-center mb-4">Register</h2>
            <form action="{{ route('register') }}" method="post">
                @csrf

                <div class="mb-3">
                    <input class="form-control" type="name" placeholder="Name" value="{{ old('name') }}"
                        id="name" name="name">
                    @error('name')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}"
                        id="email" name="email">
                    @error('email')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Create Your Unique Username"
                        value="{{ old('username') }}" id="username" name="username">
                    @error('username')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <?php
                    session_start();
                    if (isset($_SESSION['mobileno'])) {
                        $mobileno = $_SESSION['mobileno'];
                    ?>

                <div class="mb-3"><input type="text" class="form-control" placeholder="Enter your Phone number"
                        readonly value="{{ $mobileno }}" id="mobileno" name="mobileno">
                    @error('mobileno')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <?php
                    } else {
                        $mobileno = "";
                    ?>
                <div class="mb-3"><input type="text" class="form-control" placeholder="Enter your Phone number"
                        value="{{ $mobileno }}" id="mobileno" name="mobileno">
                    @error('mobileno')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <?php
                    }
                    ?>

                <div class="mb-3"><input type="password" class="form-control" placeholder="Password" name="password">
                    @error('password')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3"><input type="password" class="form-control" placeholder="Confirm Password"
                        class="" id="password_confirmation" name="confirm-password"></div>

                <div class="row">
                    <div class="col-md-12">
                        <label><input type="radio" class="" id="" checked name="type"
                                value="Individual">Individual</label>
                        <label><input type="radio" class="" id="" name="type"
                                value="Business">Business</label>
                    </div>
                </div>

                <br>
                <div class="mb-3 Business box" style="display: none;">
                    <select name="category" id="category" class="form-control">
                        <option selected disabled>Select Category</option>
                        @foreach ($categories as $data)
                            <option value="{{ $data->id }}">{{ $data->categoryName }}</option>
                        @endforeach
                        <option value="other">Other</option>
                    </select>
                    @error('category')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="mb-3" id="other" style="display: none;">
                    <input type="text" class="form-control" placeholder="Add Other Category" name="categoryname"
                        class="">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Do you have Refer Code??" class=""
                        id="refer" name="refer">
                    @error('refer')
                        <span role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Register </button>
                </div>

            </form>
        </div>
    </div>
    <footer>
        <!-- place footer here -->
        @include('extra.homePageFooter')
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#category').on('change', function() {
                if (this.value == 'other') {
                    $("#other").show();
                } else {
                    $("#other").hide();
                }
            });
        });
    </script>

    <!-- user type hide and show code -->
    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".box").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>

</body>

</html>
