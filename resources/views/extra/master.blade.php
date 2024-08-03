<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- toastr -->

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        span.select2.select2-container.select2-container--classic {
            width: 100% !important;
        }
    </style>
</head>

<body>
    <div class="d-flex " id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white " id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light sticky-top">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
            </div>
            <div id="layoutContainer">
                
            </div>
        </div>
       
        <!-- Page content wrapper-->
        @include('extra.header')
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



    <!-- Core theme JS-->

    <script src="{{ asset('js/scripts.js') }}"></script>

    <script>
        var base_url = window.location.origin;
        console.log("url:", base_url);
        // Read the role from local storage
        var selectedRole = localStorage.getItem('selectedRole');
        var count = localStorage.getItem('count');
        var layoutContainer = document.getElementById('layoutContainer');
        var currentUrl = window.location.href;
        console.log("url:", currentUrl);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (selectedRole === 'Admin') {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/admin/dashboard") {
                    if (count == 1) {
                        window.location.href = '/admin/dashboard';
                    }
                }
            } else if (selectedRole === 'Designer') {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/designer/dashboard") {
                    if (count == 1) {
                        window.location.href = '/designer/dashboard';
                    }
                }
            } else if (selectedRole === 'Writer') {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/writer/dashboard") {
                    if (count == 1) {
                        window.location.href = '/writer/dashboard';
                    }
                }
            } else if (selectedRole === 'Brand') {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/brand/dashboard") {
                    if (count == 1) {
                        window.location.href = '/brand/dashboard';
                    }
                }
            }
            // else if (selectedRole === 'Influencer') {
            //     layoutContainer.innerHTML = this.responseText;
            //     if (currentUrl !== base_url + "/influencer/dashboard") {
            //         if (count == 1) {
            //             window.location.href = '/influencer/dashboard';
            //         }
            //     }
            // } 
            else if (selectedRole === 'Reseller') {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/reseller/dashboard") {
                    if (count == 1) {
                        window.location.href = '/reseller/dashboard';
                    }
                }

            } else {
                layoutContainer.innerHTML = this.responseText;
                if (currentUrl !== base_url + "/user/dashboard") {
                    if (count == 1) {
                        window.location.href = '/user/dashboard';
                    }
                }
            }
        };
        xhr.open('GET', '/fetch-layout?selectedRole=' + selectedRole, true);
        xhr.send();
    </script>

    {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
    {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/adapters/jquery.js"></script> --}}


    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('.about').ckeditor();
        });
    </script> --}}

</body>

</html>
