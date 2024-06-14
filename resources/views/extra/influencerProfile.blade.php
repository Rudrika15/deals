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

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- External CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/influencer.css') }}">

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.ico') }}">
    <title>BrandBeans</title>
</head>

<body class="border border-dark border-3">
    <!-- Header -->
    @include('extra.homePageMenu')

    <div class="container-fluid backgroundColor pt-5 mb-0">

        <style>
            .car {
                /* margin: 5px; */
                /* padding: 5px; */
                /* border: 1px solid rgba(00, 00, 00, 0.2); */
            }

            .sticky-name {
                position: sticky;
                top: 0;
                background-color: #f1f1f1;
                z-index: 1;
            }

            /* For Webkit browsers (Chrome, Safari, etc.) */
            ::-webkit-scrollbar {
                width: 12px;
            }

            ::-webkit-scrollbar-track {
                background-color: #eef0f2;
            }

            ::-webkit-scrollbar-thumb {
                background-color: #eef0f2
            }

            /* For Firefox */
            ::-moz-scrollbar {
                width: 12px;
            }

            ::-moz-scrollbar-track {
                background-color: #eef0f2;
            }

            ::-moz-scrollbar-thumb {
                background-color: #eef0f2;
            }

            /* For IE and Edge */
            /* Note: IE and Edge do not support customizing the scroll design */

            /* For Opera */
            ::-o-scrollbar {
                width: 12px;
            }

            ::-o-scrollbar-track {
                background-color: #eef0f2;
            }

            ::-o-scrollbar-thumb {
                background-color: #eef0f2;
            }

            .nav-link {
                display: block;
                padding: 0.5rem 1rem;
                color: #1d4880 !important;
                text-decoration: none;
                transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            }

            .nav-tabs .nav-link {
                margin-bottom: -1px;
                margin: 5px !important;
                background: 0 0;
                border-bottom: 1px solid #15C6EB !important;
                border-right: 1px solid rgba(00, 00, 00, 0.2) !important;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-right: #000102 !important;
            }

            .nav-tabs {
                border: 2px solid #15C6EB;
                /* border-bottom: 3px solid #000000 !important; */
            }

            .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: #0f87ff;
                background-color: #dddee0;
                border-color: #1d4880 #eef0f2 #eef0f2;
            }

            .nav {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                border-bottom: 3px solid #000000 !important;
                margin-bottom: 0;
                list-style: none;
            }

            .sticky-div {
                position: sticky;
                top: 0;
                background-color: #f1f1f1;
                padding: 50px;
                z-index: 1;
            }

            /* .custom-thumbnail {
                max-width: none;
                /* Override max-width from img-thumbnail class */
            /* } */

            */
        </style>



        <div class="container-fluid">

            <div class="card-content ">

                <div class="container-fluid">

                    <div class="row text-white" data-aos="zoom-in" style="background-color: #1d4880">
                        {{-- <div class=" text-white"> --}}
                        <div class="col-md-3 pt-4">
                            @if ($profile->profile->profilePhoto)
                                <div class="image-container">
                                    <img class="img-thumbnail" style="border-radius: 150px; height: 300px; width: 300px;" src="{{ asset('profile') }}/{{ $profile->profile->profilePhoto }}" alt="image">
                                </div>
                            @else
                                <div class="image-container">
                                    <img class="img-thumbnail" style="border-radius: 150px; height: 300px; width: 300px;" src="{{ url('asset/img/defaultPerson.jpg') }}" alt="image">
                                </div>
                            @endif

                        </div>
                        <div class="col-md-9 pt-5">
                            <h4 style=" text-transform: uppercase">

                                <b>{{ $profile->profile->name }}</b>

                                @if ($profile->is_brandBeansVerified == 'yes')
                                    <i class="menu-icon bi bi-patch-check-fill text-info" title="BrandBeans Verified" style="margin-left: 5px;"></i>
                                @endif
                            </h4>
                            <h5><a href="#">{{ $influencer->card->about }}</a></h5>

                            <p class="pt-2"> <b class="text-info" id="category"></b></p>

                            <div class="pt-5 ps-3 d-flex justify-content-between">
                                <div class="">

                                    @if ($profile->youtubeChannelUrl)
                                        <a class="" href=""> <i class="bi bi-instagram fa-2x" style="color: #C13584; liner-gradient: #C13584  #FF0000;"></i>

                                            {{ $profile->instagramFollowers }}</a>
                                    @endif
                                    @if ($profile->youtubeChannelUrl)
                                        <a class="" href=""> <i class="bi bi-youtube fa-2x" style="color: #FF0000;"></i>

                                            {{ $profile->youtubeSubscriber }}</a>
                                    @endif

                                </div>
                                {{-- <div class="">
                                    <a href="#" class="btn btn-info">Follow</a>
                                    <a href="#" class="btn btn-info">Contact Me</a>
                                </div> --}}
                            </div>


                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12 pt-3">

                        <h3 class="text-info text-center">
                            <span class="border-bottom border-info border-4">
                                portfolios
                            </span>
                        </h3>
                        <style>
                            .cardImage {
                                aspect-ratio: 1/1;
                                height: 200px;
                                width: auto;

                                padding: 10px;
                                margin: 20px;
                                object-fit: fill;
                                /* background-color: #0f87ff */
                                /* Set the desired aspect ratio */
                            }
                        </style>
                        <div class="pt-3">
                            <div class="row">
                                @if (count($profile->profile->card->cardPortfolio) > 0)
                                    @foreach ($profile->profile->card->cardPortfolio->take(4) as $image)
                                        @if ($image->image)
                                            <div class="col-md-3">
                                                <img src="{{ asset('cardimage') }}/{{ $image->image }}" data-aos="zoom-in" alt="" class="img-thumbnail custom-thumbnail cardImage">

                                                <br>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="text-center pt-3" id="view-all">
                                        <a href="#" id="view-all-link"><span class="border-bottom border-info border-4">view all</span></a>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <span class="text-muted">No Post found</span>
                                    </div>
                                @endif

                            </div>



                            <div class="row hidden-images" style="display: none">
                                @foreach ($profile->profile->card->cardPortfolio->slice(4) as $image)
                                    <div class="col-md-3">
                                        <img src="{{ asset('cardimage') }}/{{ $image->image }}" alt="" data-aos="zoom-in" class="img-thumbnail custom-thumbnail cardImage">
                                    </div>
                                @endforeach

                            </div>


                        </div>


                        <h3 class="text-info text-center pt-3">
                            <span class="border-bottom border-info border-4">
                                Packages
                            </span>
                        </h3>
                        <div class="" data-aos="zoom-in">
                            <div class="sticky-div">
                                @if (count($profile->profile->influencerPackage) > 0)
                                    <div class="car " style="">

                                        <div class="card-body ">
                                            <div class="d-flex justify-content-center border-2 border-info">

                                                <div class="col-md-6 nav-tabs">
                                                    <ul class="nav " id="myTab" role="tablist">
                                                        @foreach ($profile->profile->influencerPackage as $data)
                                                            <li class="nav-item" role="presentation">
                                                                <button class=" nav-link{{ $loop->first ? ' active fw-bold' : ' fw-bold' }}" id="{{ Str::slug($data->title) }}-tab" data-bs-toggle="tab" data-bs-target="#{{ Str::slug($data->title) }}" type="button" role="tab" aria-controls="{{ Str::slug($data->title) }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $data->title }}</button>
                                                            </li>
                                                        @endforeach
                                                        <div class="tab-content mt-3" id="myTabContent">

                                                            @foreach ($profile->profile->influencerPackage as $data)
                                                                <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}" id="{{ Str::slug($data->title) }}" role="tabpanel" aria-labelledby="{{ Str::slug($data->title) }}-tab">
                                                                    <div class="">
                                                                        <div class="text-center">
                                                                            <span class="text-info  fs-4 fw-bold">₹{{ $data->price }}.00</span><br>
                                                                            <hr style="color: #15C6EB; height: 2px">
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <i class="text-center fw-bold text-info">Details</i><br>
                                                                            <span>{!! $data->description !!}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                @else
                                    <div class="">
                                        <span class="text-muted"> No Packages Found</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Footer  -->
    @include('extra.homePageFooter')



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/influencer.js') }}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        const category = {!! $profile->categoryId !!};
        console.log(category);
        document.getElementById('category').innerHTML = category.join(', ');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        console.log('AOS.init()');
        AOS.init();
    </script>

    <script>
        // Get the user status element
        const userStatusElement = document.getElementById('user-status');

        // Simulate user activity
        const isActive = true; // Set this value based on your logic
        const lastActiveTime = new Date(); // Set this value based on your logic

        // Update the dot color and active time
        if (isActive) {
            userStatusElement.querySelector('.menu-icon').classList.add('text-success');
        } else {
            userStatusElement.querySelector('.menu-icon').classList.remove('text-success');
        }

        userStatusElement.querySelector('.menu-icon').title = `Active ${formatTimeDifference(lastActiveTime)}`;

        // Function to format the time difference
        function formatTimeDifference(time) {
            const currentTime = new Date();
            const diffInMinutes = Math.floor((currentTime - time) / (1000 * 60));

            if (diffInMinutes < 1) {
                return 'Just now';
            } else if (diffInMinutes < 60) {
                return `Active ${diffInMinutes} min ago`;
            } else if (diffInMinutes < 1440) {
                return `Active ${Math.floor(diffInMinutes / 60)} hours ago`;
            } else {
                return `Active ${Math.floor(diffInMinutes / 1440)} days ago`;
            }
        }
    </script>

    <script>
        document.getElementById('view-all-link').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.hidden-images').style.display = 'flex';
            document.getElementById('view-all').style.display = 'none';
        });
    </script>
</body>

</html>
