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

        <div class="container-fluid pt-2">
            <div class="row px-5 text-center">

                @foreach ($offerCategory as $category)
                    <div class="col categorySection">

                        <a href="{{ route('brand.offer') }}/{{ $category->id }}">
                            <img src="{{ asset('brandCategoryIcon') }}/{{ $category->icon }}" class="categoryIcon" alt="">
                            <p class="categoryName"> {{ $category->categoryName }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <hr>

        <div class="container pt-3">
            <span class="fw-bold h4">Browse By Category </span>
            <div class="row pt-2 px-4">
                @foreach ($posters as $poster)
                    <div class="col-md-3">
                        <a href="{{ route('brand.offer') }}/{{ $poster->id }}">
                            <img src="{{ asset('brandCategoryPoster') }}/{{ $poster->poster }}" title="{{ $poster->categoryName }}" class="offerPhoto" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- poster section --}}



        <div class="brandlogosection">

            @php
                // Define an array of border classes
                $borderClasses = ['border-primary', 'border-info'];
            @endphp

            <div class="container py-4">
                <section class="customer-logos slider row">
                    @foreach ($brandLogos as $index => $logo)
                        @php
                            $borderClass = $borderClasses[$index % count($borderClasses)];
                        @endphp
                        @if ($logo->card->logo)
                            <div class="slide border {{ $borderClass }} border-3 col-lg-12 col-sm-12"><img src="{{ asset('cardlogo') }}/{{ $logo->card->logo }}" alt="" /></div>
                            {{-- @else
                            <div class="slide border {{ $borderClass }} border-3"><img src="{{ asset('images/default.jpg') }}" alt="" /></div> --}}
                        @endif
                    @endforeach
                </section>
            </div>
        </div>


        <div class="container pt-4">
            <span class="fw-bold h4">Everything {{ $cat->categoryName }} !!</span>
            <div class="row pt-2 px-4">
                @foreach ($posters as $brand)
                    @foreach ($brand->brand as $card)
                        @foreach ($card->brand->card->cardPortfolio as $portfolio)
                            <div class="col-md-3">
                                {{-- <a href="{{ route('brand.detail') }}/{{ $brand->id }}"> --}}
                                <img src="{{ asset('cardimage') }}/{{ $portfolio->image }}" title="{{ $portfolio->title }}" class="offerPhoto" alt="">
                                {{-- <img src="{{ asset('images/default.jpg') }}" title="spcial" class="offerPhoto" alt=""> --}}
                                {{-- </a> --}}
                            </div>
                        @endforeach
                    @endforeach
                @endforeach


            </div>
        </div>


        <div class="container pt-4">

            <div id="menu">
                <div id="nav">
                    <div id="prev">
                        <i class="bi bi-chevron-left text-white p-2 bg-info" style=" border: 2px; border-top-right-radius: 50px;
                        border-bottom-right-radius: 50px;"></i>
                    </div>
                    <div id="next">
                        <i class="bi bi-chevron-right text-white p-2 bg-info" style=" border: 2px; border-top-left-radius: 50px;
                        border-bottom-left-radius: 50px;"></i>
                    </div>
                </div>
                <ul id="cards">

                    @foreach ($sliderPosters as $sliderPoster)
                        <li id="box1" class="list">
                            <img src="{{ asset('brandCategoryPoster/' . $sliderPoster->poster) }}" class="h-100" style="object-fit: cover; width: 90%; border-radius: 10px" alt="">
                        </li>
                    @endforeach
                    {{-- <li id="box2" class="list">
                        <img src="{{ asset('images/slider1.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box2" class="list">
                        <img src="{{ asset('images/slider2.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box3" class="list">
                        <img src="{{ asset('images/slider3.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box4" class="list">
                        <img src="{{ asset('images/slider4.webp') }}" class="h-100" alt="">
                    </li> --}}
                </ul>
            </div>
        </div>

        <div class="container pt-3">
            <span class="fw-bold h4">New On BrandBeans! </span>

            <div class="row p-3 ps-5">
                {{-- {{ $newBrands }} --}}
                @foreach ($newBrands as $brand)
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="d-inline-block position-relative">
                                <img class="card-img-top" src="{{ asset('cardlogo') }}/{{ $brand->card->logo }}" style="object-fit: fit; height: 200px" alt="Title" />
                                <div class="position-absolute top-0 end-0 p-2">
                                    <i class="bi bi-heart"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $brand->name }}</h4>
                                <p class="card-text">
                                    @if ($brand->card->city)
                                        {{ $brand->card->city }}
                                    @else
                                        -
                                    @endif
                                </p>
                                <hr>
                                <div class="">
                                    <small class="text-muted fs-6">75 Bought</small>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

        <div class="container pt-4">
            <span class="fw-bold h4">Next Thing On Your Mind 💅🍔💆‍♀️✂️</span>

            <div class="row text-center pt-2">
                @foreach ($offers as $offer)
                    <div class="col-md-2">
                        <img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" class="" style="object-fit: contain; width: 150px; height: 150px" alt="">
                        <p class="fw-bold">{{ $offer->title }}</p>
                        <p>₹{{ $offer->offerPrice }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container-fluid pt-4  d-flex justify-content-center ps-5">
            <div class="slide-container swiper ps-5 ms-5">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        @foreach ($newBrands as $brand)
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('cardlogo') }}/{{ $brand->card->logo }}" alt="" style="object-fit: fit; height: 200px" class="card-img">

                                </div>
                                <div class="card-content">
                                    <h2 class="name">{{ $brand->name }}</h2>
                                    <p>
                                        @if ($brand->card->city)
                                            {{ $brand->card->city }}
                                        @else
                                            -
                                        @endif
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <p>₹Price</p>
                                        <p>dis</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn "></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <div class="container pt-4">

            <div id="menu">
                <div id="nav">
                    <div id="prev" class="prev">
                        <i class="bi bi-chevron-left text-white p-2 bg-info" style=" border: 2px; border-top-right-radius: 50px;
                        border-bottom-right-radius: 50px;"></i>
                    </div>
                    <div id="next" class="next">
                        <i class="bi bi-chevron-right text-white p-2 bg-info" style=" border: 2px; border-top-left-radius: 50px;
                        border-bottom-left-radius: 50px;"></i>
                    </div>
                </div>
                <ul id="cards" class="cardss">
                    <li id="box1" class="list">
                        <img src="{{ asset('images/slider1.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box2" class="list">
                        <img src="{{ asset('images/slider2.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box3" class="list">
                        <img src="{{ asset('images/slider3.webp') }}" class="h-100" alt="">
                    </li>
                    <li id="box4" class="list">
                        <img src="{{ asset('images/slider4.webp') }}" class="h-100" alt="">
                    </li>
                </ul>
            </div>
        </div>


        <div class="container">

            <div class="row">
                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="3" id="MultiCarousel" data-interval="3000">
                    <div class="MultiCarousel-inner">
                        @foreach ($randomBrandPortfolio as $images)
                            @if ($images->card && $images->card->cardPortfolio)
                                @foreach ($images->card->cardPortfolio as $portfolio)
                                    <div class="item">
                                        <img src="{{ asset('cardimage') }}/{{ $portfolio->image }}" style="height: 250px; width: 280px" alt="">
                                        {{-- <img src="{{ asset('images/default.jpg') }}" alt=""> --}}
                                    </div>
                                @endforeach
                            @endif
                        @endforeach

                    </div>
                    <button class="btn btn-primary leftLst">
                        < </button>
                            <button class="btn btn-primary rightLst">></button>
                </div>
            </div>

        </div>


        {{-- <div class="container pt-3">
            <span class="fw-bold h4">Popular Salon Services✂️ </span>

            <div class="row text-center pt-2">
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid" alt="">
                    <p class="fw-bold">title</p>
                    <p>₹price</p>
                </div>
            </div>
        </div> --}}
        <div class="container pt-3">
            <span class="fw-bold h4">Promo Codes For More Savings </span>

            <div class="container-fluid pt-4  d-flex justify-content-center">
                <div class="couponslide-content swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card  swiper-slide" style="width: 500rem;">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon.webp') }}" alt="" class="card-img">
                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon1.webp') }}" alt="" class="card-img">

                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon2.webp') }}" alt="" class="card-img" style="object-fit: fill">

                                </div>

                            </div>

                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon3.webp') }}" alt="" class="card-img">

                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon4.webp') }}" alt="" class="card-img">

                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon5.webp') }}" alt="" class="card-img">

                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span>some text</span>
                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon6.webp') }}" alt="" class="card-img">

                                </div>

                            </div>
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <img src="{{ asset('images/coupon7.webp') }}" alt="" class="card-img">

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn "></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center pt-4">
            <button type="button" class="btn btn-secondary rounded-pill">View More Offers</button>
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
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>

    {{-- slider --}}
    <script>
        $('#prev').on('click', function() {
            $('#cards').animate({
                scrollLeft: '-=900%'
            }, 500, 'swing');
        });

        $('#next').on('click', function() {
            $('#cards').animate({
                scrollLeft: '+=900%'
            }, 500, 'swing');
        });
    </script>

    {{-- slider2 --}}
    <script>
        $('.prev').on('click', function() {
            $('.cardss').animate({
                scrollLeft: '-=900%'
            }, 500, 'swing');
        });

        $('.next').on('click', function() {
            $('.cardss').animate({
                scrollLeft: '+=900%'
            }, 500, 'swing');
        });
    </script>
    {{-- card slider  --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

    {{-- bottom  image slider  --}}

    <script>
        $(document).ready(function() {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function() {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function() {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function() {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({
                        'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers
                    });
                    $(this).find(itemClass).each(function() {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                } else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>

    {{-- bottom coupon card slider --}}

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".couponslide-content", {
            slidesPerView: 3,
            spaceBetween: 25,
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>
