<!doctype html>
<html lang="en">

<head>
    <title>Brand Beans</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brandOffer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brandOfferDetail.css') }}">

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

        <div class="container-fluid">
            <div class="row pt-4">
                <div class="col-md-3">
                    <span class="fw-bold">Promos and Filters</span>
                    <div id="slider">
                        <a href="#" class="control_next"> <i class="bi bi-caret-right-fill"></i> </a>
                        <a href="#" class="control_prev"> <i class="bi bi-caret-left-fill"></i> </a>
                        <ul>
                            @foreach ($offerSlider as $slider)
                                <li>
                                    <div class="cards text-start">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $slider->title }}</h4>
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
                                                <div class="h6">{{ $slider->validity }}</div>
                                                <div class="h6">Know more</d>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="">
                        <div class="cards text-start">
                            <div class="card-body">
                                <h5 class="card-title">Location</h5>
                                <p class="card-text pt-2">
                                    <input type="text" class="form-control" placeholder="Search for location">
                                </p>
                                <p>
                                    @foreach ($userCity as $city)
                                        {{ $city->card->city }}
                                    @endforeach
                                </p>
                                <details>
                                    <summary>Ahmedabad</summary>
                                    <p>
                                        <label for="">
                                            <input type="checkbox" name="" id="">
                                            Satellite
                                        </label>
                                    </p>
                                </details>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-9">
                    <div class="container pt-2">

                        <span class="fw-bold h4">Top {{ $category->categoryName }} Offers </span>

                        @if ($offers->count() != 0)
                            <div class="row pt-2 my-3 px-4">
                                @foreach ($offers as $brandWithCategory)
                                    <div class="col-md-4">
                                        <a href="{{ route('brand.detail') }}/{{ $brandWithCategory->brand->id }}/{{ request('categoryId') }}">
                                            <div class="card ">
                                                <div class="d-inline-block position-relative">

                                                    <img class="card-img-top" src="{{ asset('cardlogo') }}/{{ $brandWithCategory->brand->card->logo ?? '-' }}" style="object-fit:fit ; height: 200px" alt="Title" />

                                                    <div class="position-absolute top-0 end-0 p-2">
                                                        <i class="bi bi-heart"></i>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $brandWithCategory->brand->card->name ?? '-' }}</h4>
                                                    <p class="card-text">
                                                        @if ($brandWithCategory->brand->card->city ?? '-')
                                                            {{ $brandWithCategory->brand->card->city ?? '-' }}
                                                        @else
                                                            -
                                                        @endif
                                                    </p>
                                                    
                                                    <p class="card-text"></p>
                                                    {{-- <hr>
                                                    <div class="">
                                                        <span class="text-muted">{{ $brandWithCategory->brand->card->about}}</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    {{-- @foreach ($brandWithCategory->offer as $offer)
                                        <div class="col-md-3">
                                            <img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" title="special" class="offerPhoto" alt="">
                                        </div>
                                    @endforeach --}}
                                @endforeach
                            </div>
                        @else
                            <div class="row pt-5 my-3 text-center  px-4">
                                <span class="text-muted">No offers available</span>
                            </div>
                        @endif

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

            $('a.control_prev').click(function() {
                moveLeft();
            });

            $('a.control_next').click(function() {
                moveRight();
            });

        });
    </script>
</body>

</html>
