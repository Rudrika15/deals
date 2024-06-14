<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- fonts --}}

    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="https://unpkg.com/sweetalert@2/dist/sweetalert.css">


    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">
    <title>BrandBeans</title>

    <style>
        .aligned-paragraph {
            text-align: justify;
            /* text-align-last: left; */
            padding: 0 109px 0 109px;
        }
    </style>
</head>

<body class="">
    <!-- Header -->

    @include('extra.homePageMenu')


    {{-- end header --}}
    <div class="container-fluid aligned-paragraph backgroundColor text-center pt-5 mb-0">

        <h1 class="fw-bold">
            <span class="blueFont">Find the right Influencer</span>
            <span class="lightBlueFont">For your Business</span>
        </h1>

        <p class="fs-4">
            Discovering the perfect influencer for your business involves identifying individuals
            whose values align with your brand, possess a genuine connection with your target audience,
            and demonstrate an engaging online presence. Look for influencers whose content resonates
            with your brand message, ensuring a seamless integration that captivates and converts your
            desired customer base.
        </p>


        <div class="container-fluid">
            <img src="{{ asset('influencerPage/topmain.png') }}" class="topImage" alt="Top Image">
            {{-- <div class="col-md-12 col-sm-12 col-md-12">
            </div> --}}
        </div>
        <div class="pb-5">
            <button class="btn btn-info text-white">Try For Free Now</button>
        </div>

        <div class="pt-4">
            <h1 class="fw-bold"><span class="blueFont">Our Featured</span> <span class="lightBlueFont">Creator</span>
            </h1>
            <h1><i class="bi bi-dot fa-sm text-info color"></i></h1>

            <p class="fs-4">Explore our featured creators who bring unparalleled creativity and authenticity to our
                platform</p>
        </div>


        <div class="wrapper d-flex justify-content-center">
            <div class="icon mt-3"><i id="left" class="bi bi-caret-left-fill "></i></div>
            <ul class="tabs-box" name="tabValue">
                <a href="{{ route('main.influencer') }}" class="tab">All</a>
                @foreach ($category as $influencerCategory)
                    <li class="tab" value="{{ $influencerCategory->name }}">{{ $influencerCategory->name }}</li>
                @endforeach
            </ul>
            <div class="icon mt-3 ms-4"><i id="right" class="bi bi-caret-right-fill "></i></div>
        </div>


        <div class="row">
            <?php $count = 0; ?>
        
            @foreach ($influencers as $influencer)
                <?php $count++; ?>
        
                @if (isset($influencer->profilePhoto))
                    <div class="col-md-3 influencers-container pt-3" style="height: 350px">
                        <a href="{{ route('main.influencer.profile') }}/{{ $influencer->id }}">
                            <?php
                            // Get the full path to the image
                            $imagePath = public_path('profile/' . $influencer->profilePhoto);
        
                            // Optimize the image
                            $optimizedImagePath = \Spatie\LaravelImageOptimizer\Facades\ImageOptimizer::optimize($imagePath);
        
                            // Output the optimized image path (for debugging)
                            echo "Optimized Image Path: $optimizedImagePath";
                            ?>
                            <img class="image pb-2" src="{{ asset('profile') }}/{{ basename($optimizedImagePath) }}" alt="image">
                        </a><br>
                        <span class="blueFont fw-bold">{{ $influencer->name }}</span>
                    </div>
                @endif
        
                @if ($count == 40)
                    @break
                @endif
            @endforeach
        </div>
        

    @if (Auth::user())
        @if (Auth::user()->hasRole('Brand'))
            <a href="{{ route('brand.influencerList') }}?category=" class="btn blueButton text-white mt-3" id="viewMoreBtn">View more Influencers</a>
        @else
            <a href="{{ route('brand.register') }}" class="btn blueButton text-white mt-3">View more
                Influencers</a>
        @endif
    @else
        <a href="{{ route('login') }}" class="btn blueButton text-white mt-3">View more Influencers</a>
    @endif
    <div class="py-5">
        <h1 class="fw-bold pt-2"><span class="blueFont">How Influencer</span> <span class="lightBlueFont">Connect
                Works</span><span class="blueFont">?</span></h1>
        <p class="fs-4 ">Brands identify potential influencers whose audience aligns with their target demographic
            and reach out to establish partnerships. Through negotiations and agreements, influencers then create
            content that promotes the brand, leveraging their authentic connection with their audience to drive
            engagement and awareness.</p>

        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex justify-content-center">
                    <img src="{{ asset('influencerPage/bottom2.png') }}" class="" alt="">
                </div>
                <div class="col-md-5 pt-5">
                    <div class="card box mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <div class="w-100 ">
                                        <div class="circleOrange ">
                                            <i class="bi bi-hand-index fs-1"></i>
                                        </div>
                                        {{-- <span class="bg-orange p-2">
                                            </span> --}}
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text-start">
                                        <span class="fontBrown fs-4 fw-bold">Make your Voice</span>
                                        <div class="">
                                            Empower influencers to be the authentic voice of your brand, amplifying
                                            your message with genuine influence.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card box mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <div class="w-100 ">
                                        <div class="circleBlue ">
                                            <i class="bi bi-person-check fs-1"></i>
                                        </div>
                                        {{-- <span class="bg-orange p-2">
                                            </span> --}}
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text-start">
                                        <span class="fontBrown fs-4 fw-bold">Book Them Instantly</span>
                                        <div class="">
                                            Secure their influence instantly—book them now for seamless brand
                                            collaboration.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card box mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <div class="w-100 ">
                                        <div class="circlePink ">
                                            <i class="bi bi-hand-index fs-1"></i>
                                        </div>
                                        {{-- <span class="bg-orange p-2">
                                            </span> --}}
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text-start">
                                        <span class="fontBrown fs-4 fw-bold">Engage Directly</span>
                                        <div class="">
                                            Connect directly and foster engagement for a more personalized and
                                            impactful interaction.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card box mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">

                                    <div class="w-100 ">
                                        <div class="circlePurple ">
                                            <i class="far fa-handshake fs-1"></i>
                                        </div>
                                        {{-- <span class="bg-orange p-2">
                                            </span> --}}
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text-start">
                                        <span class="fontBrown fs-4 fw-bold">Grow Your Business</span>
                                        <div class="">
                                            Expand your business and increase its success with strategic growth
                                            initiatives.
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


    <!-- Footer  -->
    @include('extra.homePageFooter')



</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('scripts/influencer.js') }}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://unpkg.com/sweetalert@2"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function showRemainingInfluencers() {
        var remainingInfluencers = document.querySelectorAll('.remaining-influencers');
        remainingInfluencers.forEach(function(influencer) {
            if (influencer.style.display === 'none') {
                influencer.style.display = 'block';
            }
        });

        var showMoreButton = document.getElementById('showMoreInfluencers');
        if (showMoreButton) {
            showMoreButton.style.display = 'none';
        }

        // Perform AJAX request to cut points
        $.ajax({
            url: '/cut-points', // Replace with your API endpoint URL
            method: 'POST',
            data: {
                points: 5
            }, // Adjust the points value as needed
            success: function(response) {
                // Display Sweet Alert warning
                swal({
                    title: "Warning!",
                    text: "Your points have been deducted for viewing more influencers.",
                    icon: "warning",
                    button: "OK",
                });
            },
            error: function(xhr, status, error) {
                // Handle error if needed
                console.error(error);
            }
        });
    }
</script>

<script>
    // Get all tab elements
    const tabs = document.querySelectorAll('.tab');

    // Get the view more button element
    const viewMoreBtn = document.getElementById('viewMoreBtn');

    // Check if tabValue exists in localStorage
    const tabValue = localStorage.getItem('tabValue');

    // Conditionally update the href attribute of the view more button
    if (tabValue) {
        $('.tab').on('click', function(e) {
            console.log('tabValue', tabValue);
            var category = $(this).text();
            var url = '{{ route('main.influencer') }}';
            console.log('category', category);

            $.ajax({
                url: url,
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    category: category
                }
            }).done(function(response) {
                console.log('response', response);
                window.location = `{{ route('main.influencer') }}?category=${encodeURIComponent(category)}`;
            });
        });
        viewMoreBtn.href = `{{ route('brand.influencerList') }}?category=${encodeURIComponent(tabValue)}`;
    } else {
        viewMoreBtn.href = `{{ route('brand.influencerList') }}`;
    }

    // Add click event listener to each tab
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Get the tab value
            const tabValue = tab.getAttribute('value');

            // Store the tab value in localStorage
            localStorage.setItem('tabValue', tabValue);

            // Update the href attribute of the view more button
            viewMoreBtn.href =
                `{{ route('brand.influencerList') }}?category=${encodeURIComponent(tabValue)}`;
        });
    });
</script>

</body>

</html>
