<!doctype html>
<html lang="en">

<head>
    <title>Brand Beans</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/brandOffer.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/brandOfferDetail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brandDetail.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


</head>

<body>
    @include('extra.homePageMenu')
    <header class="sticky-top">
        <!-- place navbar here -->

        <div class="container-fluid bg-light pt-3 d-flex justify-content-center  border-bottom">
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control" placeholder="Search your brand.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn searchbutton" type="button" id="button-addon2">Search</button>
            </div>
        </div>
    </header>
    <main class="pb-5 mx-5">

        <div class="container-fluid pt-4">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card text-start">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 p-3">
                                    <div class="d-flex justify-content-between ">
                                        <div class="">
                                            <h6 class="text-muted">{{ $brandCategory->categoryName }}</h6>
                                            <h2 class="fw-bold">{{ $brand->name }}</h2>
                                            <small class="text-muted fw-bold">{{ $brand->card->address }}, {{ $brand->card->city }}</small>
                                        </div>
                                        <div class="text-end">
                                            <small class="row ms-5">
                                                <div class="col-md-12">
                                                    <p class="text-muted text-uppercase">ratings and review</p>
                                                </div>
                                                <br>
                                                <div class="col-md-12 text-end">
                                                    <div class="ms-auto border text-center rounded p-1 w-50 ">
                                                        <img src="{{ asset('images/fevicon.png') }}" style="width: 20px;" alt="">
                                                        <span class="text-black-50">|</span>
                                                        3/5
                                                    </div>
                                                </div>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 ps-5 align-items-center">
                                    <div class="row">
                                        <div class="col-md-5 align-self-center">
                                            <img src="{{ asset('cardlogo') }}/{{ $brand->card->logo }}" class="posterImage img-fluid" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            {{-- @foreach ($brand->card->cardPortfolio as $portfolio)
                                                <img src="{{ url('cardimage') }}/{{ $portfolio->image }}" class="img-fluid" alt="">
                                            @endforeach --}}

                                            @foreach ($brand->card->cardPortfolio as $key => $portfolio)
                                                @if ($key === 0)
                                                    <div class="image-container">
                                                        <img src="{{ url('cardimage/' . $portfolio->image) }}" class="img-fluid main-image" alt="">

                                                        <button class="view-slider-btn btn btn-sm" style="position: absolute; bottom: 55px; left: 87%; transform: translateX(-50%); background-color: rgba(201, 201, 201, 0.9); color: white;">View all images</button>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <div class="modal" id="imageSliderModal">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <div id="imageSlider" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @foreach ($brand->card->cardPortfolio as $key => $portfolio)
                                                                        @if ($key !== 0)
                                                                            <div class="carousel-item @if ($key === 1) active @endif align-items-center text-center">
                                                                                <img src="{{ url('cardimage/' . $portfolio->image) }}" class="img-fluid" style="width: 600px; height: 350px" alt="">
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                <a class="carousel-control-prev justify-content-start" href="#imageSlider" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon bg-secondary py-5" aria-hidden="true"></span>
                                                                </a>
                                                                <a class="carousel-control-next justify-content-end" href="#imageSlider" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon bg-secondary py-5" aria-hidden="true"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row mt-5">
                <div class="col-md-9">
                    <!-- Nav tabs -->

                    <figure class="tabBlock">
                        <ul class="tabBlock-tabs">
                            <li class="tabBlock-tab is-active">Recommended</li>
                            <li class="tabBlock-tab">Offers</li>
                            <li class="tabBlock-tab">About</li>
                            <li class="tabBlock-tab">Photos</li>
                        </ul>
                        <div class="tabBlock-content">
                            <div class="tabBlock-pane">
                                {{-- recommended --}}
                                @foreach ($recommendedOffers as $recoff)
                                    <div class="row">
                                        <div class="col-md-12 py-3">
                                            <div class="row">

                                                <div class="col-md-6 h-25">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('offerPhoto') }}/{{ $recoff->offerPhoto }}" class="img-fluid w-100 h-100" alt="">

                                                        </div>
                                                        <div class="col-md-8">

                                                            <span class="ps-2">{{ $recoff->title }}</span><br>
                                                            <small>{{ $recoff->description }}</small>
                                                            <p class="fw-bold">₹{{ $recoff->offerPrice }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-end align-self-center">
                                                    <div class="pay-container">

                                                        @if (Auth::user())
                                                            {{-- <a href="{{ route('qrCode') }}/{{ $recoff->id }}" class="btn btn-blue text-white"> Buy Offer +</a> --}}
                                                            <span class="amount" style="display: none;">{{ $recoff->offerPrice }}</span>
                                                            <span class="offerId" style="display: none;">{{ $recoff->id }}</span>
                                                            <br>
                                                            <button class="btn btn-blue text-white pay" id="buyOffer"> Buy Offer +</button>
                                                        @else
                                                            <a href="{{ route('login') }}" id="buyOffer" class="btn btn-blue text-white "> Buy Offer +</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                @endforeach
                            </div>
                            <div class="tabBlock-pane">
                                {{-- offer --}}
                                @foreach ($offers as $offer)
                                    <div class="row">
                                        <div class="col-md-12 py-3">
                                            <div class="row">

                                                <div class="col-md-6 h-25">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" class="img-fluid w-100 h-100" alt="">

                                                        </div>
                                                        <div class="col-md-8">

                                                            <span class="ps-2">{{ $offer->title }}</span><br>
                                                            <small>{{ $offer->description }}</small>
                                                            <p class="fw-bold">₹{{ $recoff->offerPrice }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-end align-self-center">
                                                    @if (Auth::user())
                                                        <span class="amount" style="display: none;">{{ $recoff->offerPrice }}</span>
                                                        <br>
                                                        <button class="btn btn-blue text-white pay" id="buyOffer"> Buy Offer +</button>
                                                    @else
                                                        <a href="{{ route('login') }}" id="buyOffer" class="btn btn-blue text-white "> Buy Offer +</a>
                                                    @endif
                                                    {{-- <a href="{{ route('qrCode') }}/{{ $recoff->id }}" class="btn btn-blue text-white"> Buy Offerdatqa +</a> --}}

                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                    </div>
                                @endforeach
                            </div>
                            <div class="tabBlock-pane">

                                {{-- about --}}
                                {!! $brand->card->about !!}

                            </div>
                            <div class="tabBlock-pane">
                                {{-- Photos --}}
                                <div class="row">
                                    @foreach ($brand->card->cardPortfolio as $photos)
                                        <div class="col-md-4 pt-4">
                                            <img src="{{ url('cardimage/' . $photos->image) }}" style="width: 300px; height: 200px" class="img-thumbnail" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </figure>

                </div>
                <div class="col-md-3 ">
                    <div class="div-sticky-class ">

                        <div id="slider">
                            <span href="#" class="control_next"> <i class="bi bi-caret-right-fill"></i> </span>
                            <span href="#" class="control_prev"> <i class="bi bi-caret-left-fill"></i> </span>
                            <ul>
                                <li>
                                    <div class="cards text-start">
                                        <div class="card-body">
                                            <h4 class="card-title">30% OFF</h4>
                                            <p class="card-text pt-1">
                                                Details about the offer
                                            </p>
                                            <div class="input-group">
                                                <input type="text" class="form-control " style="border: 1px solid #aaa;border-style: dashed; " name="" placeholder="Coupon code">
                                                <span class="input-group-append">
                                                    <button class="btn btn-blue btn-apply coupon">copy</button>
                                                </span>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between ">
                                                <div class="h6">validity</div>
                                                <div class="h6">Know more</d>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cards text-start">
                                        <div class="card-body">
                                            <h4 class="card-title">30% OFF</h4>
                                            <p class="card-text pt-1">
                                                Details about the offer
                                            </p>
                                            <div class="input-group">
                                                <input type="text" class="form-control " style="border: 1px solid #aaa;border-style: dashed; " name="" placeholder="Coupon code">
                                                <span class="input-group-append">
                                                    <button class="btn btn-blue btn-apply coupon">copy</button>
                                                </span>
                                            </div>
                                            <hr>
                                            <div class="d-flex justify-content-between ">
                                                <div class="h6">validity</div>
                                                <div class="h6">Know more</d>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="cards border border-2 text-start mt-3">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Body</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <footer>
        <!-- place footer here -->
        @include('extra.homePageFooter')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.view-slider-btn').on('click', function() {
                $('#imageSliderModal').modal('show');
            });
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        var TabBlock = {
            s: {
                animLen: 200
            },

            init: function() {
                TabBlock.bindUIActions();
                TabBlock.hideInactive();
            },

            bindUIActions: function() {
                $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
                    TabBlock.switchTab($(this));
                });
            },

            hideInactive: function() {
                var $tabBlocks = $('.tabBlock');

                $tabBlocks.each(function(i) {
                    var
                        $tabBlock = $($tabBlocks[i]),
                        $panes = $tabBlock.find('.tabBlock-pane'),
                        $activeTab = $tabBlock.find('.tabBlock-tab.is-active');

                    $panes.hide();
                    $($panes[$activeTab.index()]).show();
                });
            },

            switchTab: function($tab) {
                var $context = $tab.closest('.tabBlock');

                if (!$tab.hasClass('is-active')) {
                    $tab.siblings().removeClass('is-active');
                    $tab.addClass('is-active');

                    TabBlock.showPane($tab.index(), $context);
                }
            },

            showPane: function(i, $context) {
                var $panes = $context.find('.tabBlock-pane');

                // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
                $panes.slideUp(TabBlock.s.animLen);
                $($panes[i]).slideDown(TabBlock.s.animLen);
            }
        };

        $(function() {
            TabBlock.init();
        });
    </script>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        jQuery(document).ready(function($) {

            $('#checkbox').change(function() {
                setInterval(function() {
                    moveRight();
                }, 3000);
            });

            var slideCount = $('#slider ul li').length;
            var slideWidth = $('#slider ul li').width();
            var slideHeight = $('#slider ul li').height();
            var sliderUlWidth = slideCount * slideWidth;

            $('#slider').css({
                width: slideWidth,
                height: slideHeight
            });

            $('#slider ul').css({
                width: sliderUlWidth,
                marginLeft: -slideWidth
            });

            $('#slider ul li:last-child').prependTo('#slider ul');

            function moveLeft() {
                $('#slider ul').animate({
                    left: +slideWidth
                }, 200, function() {
                    $('#slider ul li:last-child').prependTo('#slider ul');
                    $('#slider ul').css('left', '');
                });
            };

            function moveRight() {
                $('#slider ul').animate({
                    left: -slideWidth
                }, 200, function() {
                    $('#slider ul li:first-child').appendTo('#slider ul');
                    $('#slider ul').css('left', '');
                });
            };

            $('span.control_prev').click(function() {
                moveLeft();
            });

            $('span.control_next').click(function() {
                moveRight();
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            // Attach click event handler to the "Join Now" button
            $('#buyOffer').click(function() {
                // Store the current URL in session
                var currentUrl = window.location.href;
                console.log('current url', currentUrl);
                storeCurrentUrl(currentUrl);

            });
        });

        function storeCurrentUrl(url) {
            // Make an AJAX request to store the current URL in session
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            console.log('csrfToken', csrfToken);
            $.ajax({
                url: '/store-current-url',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in headers
                },
                data: {
                    url: url
                },
                success: function(response) {
                    console.log('Current URL stored in session successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error storing current URL in session: ', error);
                }
            });
        }
    </script>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    @if (Auth::user())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all elements with the 'pay-button' class
                var payButtons = document.querySelectorAll('.pay');
                console.log('pay', payButtons);
                // Loop through each pay button and attach the click event handler
                payButtons.forEach(function(button) {
                    button.addEventListener('click', function(e) {
                        var amountElement = button.parentElement.querySelector('.amount');
                        var amount = parseFloat(amountElement.innerText); // Retrieve the amount value
                        console.log('amount', amount);
                        console.log('pay button', payButtons);

                        username = "{{ Auth::user()->name }}";
                        useremail = "{{ Auth::user()->email }}";
                        console.log('username', username);

                        var options = {
                            "key": "{{ env('RAZORPAY_KEY') }}",
                            "amount": amount * 100, // amount in the smallest currency unit
                            "currency": "INR",
                            "name": "Brandbeans",
                            "description": "Razorpay payment",
                            "image": "/images/logo-icon.png",
                            "handler": function(response) {
                                // Handle the response after payment
                                // console.log(response);
                                var paymentId = response.razorpay_payment_id;
                                storePaymentId(paymentId, amount);


                            },
                            "prefill": {
                                "name": username,
                                "email": useremail
                            },
                            "theme": {
                                "color": "#012e6f"
                            }
                        };

                        var rzp = new Razorpay(options);
                        rzp.open();
                    });
                });
            });

            function storePaymentId(paymentId = '', amount = '') {
                // Make an asynchronous POST request to your server
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('/razorpay-payment', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            paymentId: paymentId,
                            amount: amount
                        }),
                    })
                    .then(response => {
                        // Handle the response from the server
                        // Call generateQrCode after storing payment ID
                        generateQrCode();
                        console.log('Payment ID stored successfully');
                    })
                    .catch(error => {
                        console.error('Error storing payment ID: ', error);
                    });
            }

            function generateQrCode() {
                // Make a GET request to your server with offer ID as a query parameter
                var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                var offerElement = document.querySelector('.offerId');
                var offerId = offerElement.innerText;
                console.log('offerId', offerId);
                fetch('/getQr/' + offerId, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    })
                    .then(response => {
                        if (!response.error) {
                            throw new Error('Network response was not ok.');
                        }
                        console.log('Response received successfully', response);
                        // Handle the response from the server, e.g., save the QR code image
                        return response.blob();
                    })
                    .then(blob => {
                        // Convert blob data to URL
                        const qrUrl = URL.createObjectURL(blob);
                        // Do something with the QR code URL, such as displaying it on the page or downloading it
                    })
                    .catch(error => {
                        console.error('Error generating QR code: ', error);
                    });
            }
        </script>
    @else
        <script>
            var loginUser = "{{ session('loginUser') }}";
            console.log('loginUser', loginUser);
            if (loginUser == 'success') {
                setSessionVariable();
                document.addEventListener('DOMContentLoaded', function() {
                    // Get all elements with the 'pay-button' class
                    var payButtons = document.querySelectorAll('.pay');
                    console.log('pay', payButtons);
                    // Loop through each pay button and attach the click event handler
                    payButtons.forEach(function(button) {
                        button.addEventListener('click', function(e) {
                            var amountElement = document.querySelector('.amount');
                            var amount = amountElement.innerText; // Retrieve the amount value
                            console.log('amount', amount);
                            console.log('pay button', payButtons);
                            var options = {
                                "key": "{{ env('RAZORPAY_KEY') }}",
                                "amount": amount * 100, // amount in the smallest currency unit
                                "currency": "INR",
                                "name": "Brandbeans",
                                "description": "Razorpay payment",
                                "image": "/images/logo-icon.png",
                                "handler": function(response) {
                                    // Handle the response after payment
                                    // console.log(response);
                                    var paymentId = response.razorpay_payment_id;
                                    storePaymentId(paymentId, amount);
                                    setSessionVariable();
                                },
                                "prefill": {
                                    "name": "abcd",
                                    "email": "abcd@gmail.com"
                                },
                                "theme": {
                                    "color": "#012e6f"
                                }
                            };

                            var rzp = new Razorpay(options);
                            rzp.open();
                        });
                    });
                });

                function storePaymentId(paymentId = '', amount = '') {
                    // Make an asynchronous POST request to your server
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch('/razorpay-payment', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify({
                                paymentId: paymentId,
                                amount: amount
                            }),
                        })
                        .then(response => {
                            // Handle the response from the server
                            // console.log("responses", response);
                            // console.log("paymentId", paymentId);

                            console.log('Payment ID stored successfully');
                        })
                        .catch(error => {
                            console.error('Error storing payment ID: ', error);
                        });
                }



                function setSessionVariable() {
                    // Make an asynchronous POST request to set the session variable 'loginUser' to 'remove'
                    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                    fetch('/set-login-user-session', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken,
                            },
                            body: JSON.stringify({
                                loginUser: 'remove'
                            }),
                        })
                        .then(response => {
                            // Handle the response from the server

                            console.log('set session');
                        })
                        .catch(error => {
                            console.error('Error setting loginUser session variable: ', error);
                        });
                }
            } else {
                console.log("Not set");
            }
        </script>
    @endif


</body>

</html>
