<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrandBeans</title>

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<style>
    body {
        font-family: 'Raleway', sans-serif !important;
    }

    .ovrlp {
        margin-top: -5em;
        position: relative;
        z-index: 10;
    }

    .text-justify {
        text-align: justify;
    }

    .hdd {
        display: none !important;
    }

    .bg-blue {
        background: #3b3bc0;
    }

    .bg-green {
        background: #1d981d;
    }

    .bg-yellow {
        background: #b5b525;
    }

    .bg-grey {
        background: gray;
    }

    .bg-black {
        background: black;
    }

    @media only screen and (max-width:480px) {
        .main-img {
            width: 50%;
        }

        .ovrlp {
            margin-top: -3em;
        }

        h6 {
            font-size: 14 !important;
        }

        .hdd {
            display: block !important;
        }
    }
</style>

<body>
    <div>
        <div class="container mt-5 mb-5">

            <div class="row">
                <div class="col-md-6">
                    <div class="shadow p-3 mb-5">
                        <div class="banner">
                            @if (count($slider) > 0)
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($slider as $slider)
                                            <div class="carousel-item active">
                                                <img src="{{ asset('slider') }}/{{ $slider->file }}" class="d-block w-100" style="height: 300px;" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @else
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ asset('asset/img/slider5.png') }}" alt="Image">
                                        </div>
                                        <!-- <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('asset/img/slider2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('asset/img/slider3.jpg') }}" alt="Image">
                                    </div> -->

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div>
                            <div class="text-center ovrlp text-center">
                                @if ($user->profilePhoto)
                                    <img src="{{ url('profile') }}/{{ $user->profilePhoto }}" style="width: 180px; height:180px;" class="img-fluid rounded-circle main-img" alt="Logo">
                                @else
                                    <img src="{{ asset('asset/img/default.jpg') }}" style="width: 180px; height:180px;" alt="Your Profile" title="Your Profile" class="img-fluid rounded-circle main-img">
                                @endif
                                <h2 class="mt-3">{{ $cards->name }}</h2>
                                <img src="{{ url('cardlogo') }}/{{ $cards->logo }}" alt="logo" title="company logo" style="height: 50px;">
                                <h4>{{ $cards->heading }}</h4>
                            </div>

                            <div>
                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="border mt-3">
                                        <div class="d-flex p-2 align-items-center">
                                            <div class="col-3 text-center">
                                                <i class="fa-solid fa-briefcase fa-lg"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="fw-light">Business Name</h6>
                                                <h5 class="m-0">{{ $cards->companyname }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="text-decoration-none text-dark">
                                    <div class="border mt-3">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-3 text-center">
                                                <i class="fa-solid fa-location-dot fa-lg"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="fw-light">Address</h6>
                                                <h5 class="m-0 text-break">{{ $cards->address }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="tel:{{ $links->phone1 }}" class="text-decoration-none text-dark">
                                    <div class="border mt-3">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-3 text-center">
                                                <i class="fa-solid fa-phone-volume fa-lg"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="fw-light">Mobile</h6>
                                                <h5 class="m-0 text-break">{{ $links->phone1 }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="mailto:{{ $user->email }}" target="_blank" class="text-decoration-none text-dark">
                                    <div class="border mt-3">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-3 text-center">
                                                <i class="fa-solid fa-envelope fa-lg"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="fw-light">Email</h6>
                                                <h5 class="m-0 text-break">{{ $user->email }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="https://{{ $web->website }}" target="_blank" class="text-decoration-none text-dark">
                                    <div class="border mt-3">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-3 text-center">
                                                <i class="fa-solid fa-globe fa-lg"></i>
                                            </div>
                                            <div class="col-9">
                                                <h6 class="fw-light">Website</h6>
                                                <h5 class="m-0 text-break">{{ $links->website }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shadow p-3 mb-5">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <b>About</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <dl>
                                            <b>Company name :</b>
                                            <span>{{ $cards->companyname }}</span>
                                            <br>
                                            <b>Established from :</b>
                                            <span>{{ $cards->year }}</span>
                                            <br>
                                            <b>Role of Business :</b>
                                            @if (isset($card->catName))
                                                <span>{{ $card->catName }}</span>
                                            @endif
                                            <b></b>
                                            <br>
                                            <b>About Us:</b>
                                            <span class="text-justify text-break">{{ $cards->about }}</span>
                                            <br>
                                            <b class="text-center">Links :</b>
                                            <span class="d-flex justify-content-between mt-3">
                                                <div>
                                                    <a class="text-decoration-none text-dark" href="{{ $links->facebook }}" target="_blank"><i class="fa-brands fa-square-facebook fa-xl"></i></a>
                                                </div>

                                                <div>
                                                    <a class="text-decoration-none text-dark" href="{{ $links->instagram }}" target="_blank"><i class="fa-brands fa-square-instagram fa-xl"></i></a>
                                                </div>

                                                <div>
                                                    <a class="text-decoration-none text-dark" href="{{ $links->twitter }}" target="_blank"><i class="fa-brands fa-square-twitter fa-xl"></i></a>
                                                </div>

                                                <div>
                                                    <a class="text-decoration-none text-dark" href="{{ $links->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                                                </div>

                                                <div>
                                                    <a class="text-decoration-none text-dark" href="{{ $links->skype }}" target="_blank"><i class=" fa-brands fa-skype fa-xl"></i></a>
                                                </div>
                                            </span>
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <b>Services</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h4 class="text-center">Services</h4>
                                        <?php
                                        
                                        use Illuminate\Support\Facades\URL;
                                        use PhpParser\Node\Stmt\Break_;
                                        
                                        $count = 0;
                                        
                                        ?>


                                        @if (count($service) != 0)
                                            @foreach ($service as $service)
                                                @php
                                                    $count++;
                                                @endphp
                                                @if ($count % 2 == 0)
                                                    <div class="row mt-3">
                                                        <div class="col-md-8">
                                                            <h5 class="fw-bold"><span style="color: #002E6E"> {{ $service->title }} </span></h5>
                                                            <p class="" style="text-align: justify;">{{ $service->description }}</p>
                                                        </div>
                                                        <div class="col-md-4 pt-3">
                                                            <img src="{{ url('servicedetailimg') }}/{{ $service->photo }}" style="width: 150px;" alt="img" class=" serviceimg">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @else
                                                    <div class="row mt-3">
                                                        <div class="col-md-4 pt-3">
                                                            <img src="{{ url('servicedetailimg') }}/{{ $service->photo }}" style="width: 150px;" alt="img" class=" serviceimg">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h5 class="fw-bold"><span style="color: #002E6E"> {{ $service->title }} </span></h5>
                                                            <p class="" style="text-align: justify;">{{ $service->description }}</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endif
                                            @endforeach
                                        @else
                                            <span class="text-muted">No Data found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <b>Payments</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <dl>
                                            @if (count($payment) != 0)
                                                @foreach ($payment as $payment)
                                                    <dt>Bank Name</dt>
                                                    <dd>{{ $payment->bankName }}</dd>
                                                    <dt>Account holder name</dt>
                                                    <dd>{{ $payment->accountHolderName }}</dd>
                                                    <dt>Bank Account Number</dt>
                                                    <dd>{{ $payment->accountNumber }}</dd>
                                                    <dt>Account Type</dt>
                                                    <dd>{{ $payment->accountType }}</dd>
                                                    <dt>IFSC Code</dt>
                                                    <dd>{{ $payment->ifscCode }}</dd>
                                                    <dt>UPI Detail</dt>
                                                    <dd>{{ $payment->upidetail }}</dd>
                                                @endforeach
                                                @if (count($qrno) != 0)
                                                    <div class="row">
                                                        <dt>Qr Code</dt>
                                                        @foreach ($qrno as $qrnos)
                                                            <div class="col-md-4">
                                                                <dd>-{{ $qrnos->type }}</dd>
                                                                <dd><img src="{{ url('QRcodes') }}/{{ $qrnos->code }}" alt="" style="height: 100px; width: 100px;"></dd>
                                                                <dd>{{ $qrnos->number }}</dd>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @else
                                                <dt>Bank Name</dt>
                                                <dd>-</dd>
                                                <dt>Account holder name</dt>
                                                <dd>-</dd>
                                                <dt>Bank Account Number</dt>
                                                <dd>-</dd>
                                                <dt>Account Type</dt>
                                                <dd>-</dd>
                                                <dt>IFSC Code</dt>
                                                <dd>-</dd>
                                                <dt>UPI Detail</dt>
                                                <dd>-</dd>
                                                <dt>QR Code</dt>
                                                <dd>-</dd>
                                            @endif
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <b>Gallery</b>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            @if (count($gallery) != 0)
                                                @foreach ($gallery as $item)
                                                    <div class="col-md-6 p-2">
                                                        <div class="text-center">
                                                            @if ($item->type == 'Photo')
                                                                @if (isset($item->image))
                                                                    <img src="{{ url('cardimage') }}/{{ $item->image }}" class="" height="200px" width="200px" data-bs-toggle="modal" data-bs-target="#lightbox" data-bs-slide-to="{{ $loop->index }}" alt="Image">
                                                                @else
                                                                    <img src="{{ asset('asset/img/default.jpg') }}" class="" height="200px" width="200px" alt="Placeholder Image">
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="col-6 p-2">
                                                    <div class="text-center">
                                                        No Images Found
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <b>Feedback</b>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <form class="" action="{{ route('feedback.store') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="cardId" value="{{ $user->id }}">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Enter Full
                                                    Name</label>
                                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email
                                                    address</label>
                                                <input type="email" class="form-control" name="email" id="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Your Message</label>
                                                <textarea class="form-control" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <b>Videos</b>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        @if (count($gallery1) != 0)
                                            @foreach ($gallery1 as $gallery1)
                                                @if ($gallery1->type == 'Video')
                                                    <div class="col-md-12 py-1">
                                                        <iframe src="{!! $gallery1->image !!}" style="width: 100%;"></iframe>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @else
                                            <span class="text-muted">No Data found</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <b>Inquiry</b>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="container">
                                            <form class="" action="{{ route('inquiry.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="cardId" value="{{ $user->id }}">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Enter Full
                                                        Name</label>
                                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Contact
                                                        No.</label>
                                                    <input type="number" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    @if ($errors->has('phone'))
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Your
                                                        Message</label>
                                                    <textarea class="form-control" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
                                                    @if ($errors->has('message'))
                                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                                    @endif
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <b> Brochure</b>
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div>
                                            <div class="row">
                                                @if (count($bro) != 0)
                                                    @foreach ($bro as $bro)
                                                        <div class="col-md-12 text-center">
                                                            <h5><a href="{{ $bro->file }}" download> Download</a></h5>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <span class="text-muted">No Brochure found</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <b> Reach Us</b>
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div>
                                            <a href="#" class="text-decoration-none text-dark">
                                                <div class="row d-flex justify-content-center mt-4">
                                                    <div class="col-3 text-center">
                                                        <i class="fa-solid fa-location-dot fa-lg"></i>
                                                    </div>
                                                    <div class="col-9 text-center">
                                                        1017, Shilp Epitome, B/h Rajpath club, opp. Sindhu Bhavan road,
                                                        Ahmadabad
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="tel:+919979411148" class="text-decoration-none text-dark">
                                                <div class="row d-flex justify-content-center mt-4">
                                                    <div class="col-3 text-center">
                                                        <i class="fa-solid fa-phone-volume fa-lg"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        +919979411148
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="mailto:jaydeep.parekh@gmail.com" class="text-decoration-none text-dark">
                                                <div class="row d-flex justify-content-center mt-4">
                                                    <div class="col-3 text-center">
                                                        <i class="fa-solid fa-envelope fa-lg"></i>
                                                    </div>
                                                    <div class="col-9 ">
                                                        <p class="text-dark"> jaydeep.parekh@gmail.com </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="https://www.aspireotech.com/" target="_blank" class="text-decoration-none text-dark">
                                                <div class="row d-flex justify-content-center mt-4">
                                                    <div class="col-3 text-center">
                                                        <i class="fa-solid fa-globe fa-lg"></i>
                                                    </div>
                                                    <div class="col-9">
                                                        aspireotech
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <!-- Modal -->
                            <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div id="indicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                                            <div class="carousel-inner">
                                                @foreach ($gallery as $item)
                                                    <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                                        @if (isset($item->image))
                                                            <img class="d-block w-100" src="{{ url('cardimage') }}/{{ $item->image }}" height="500px" width="500px" alt="Image">
                                                        @else
                                                            <img src="{{ asset('asset/img/default.jpg') }}" class="" height="500px" width="500px" alt="Placeholder Image">
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="carousel-control-prev" href="#indicators" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#indicators" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <style>
                .round {
                    border-bottom-left-radius: 1rem;
                    border-top-left-radius: 1rem;
                }

                a span {
                    max-width: 0;
                    -webkit-transition: max-width 1s;
                    transition: max-width 1s;
                    display: inline-block;
                    vertical-align: top;
                    white-space: nowrap;
                    overflow: hidden;
                }

                a:hover span {
                    max-width: 15rem;
                }
            </style>
            <div class="d-flex justify-content-end fixed-top position-absolute top-50 end-0 translate-middle-y">
                <a id="btn" href="{{ route('login') }}" style="background-color: #002e6e;" class="btn round">
                    <i class="bi bi-plus-lg text-white"></i>
                    <span class="text-white">Create your Own Card</span>
                </a>
            </div>


            <nav class="navbar fixed-bottom bg-body-tertiary hdd">
                <div>
                    <div class="row justify-content-between">
                        <div class="col-1"></div>
                        <div class="col-2 bg-blue text-center p-1">
                            <a href="tel:{{ $links->phone1 }}" class="text-decoration-none text-light">
                                <i class="fa-solid fa-phone-volume fa-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 bg-green text-center p-1">
                            <a href="https://wa.me/{{ $links->phone1 }}?send" target="_blank" class="text-decoration-none text-light">
                                <i class="fa-brands fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 bg-yellow text-center p-1">
                            <a href="mailto:{{ $user->email }}" class="text-decoration-none text-light">
                                <i class="fa-solid fa-envelope fa-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 bg-grey text-center p-1">
                            <a href="#" class="text-decoration-none text-light">
                                <i class="fa-solid fa-location-dot fa-lg"></i>
                            </a>
                        </div>
                        <div class="col-2 bg-black text-center p-1">
                            <a href="https://{{ $links->website }}" target="_blank" class="text-decoration-none text-light">
                                <i class="fa-solid fa-globe fa-lg"></i>
                            </a>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/629dffd7a0.js" crossorigin="anonymous"></script>
</body>

</html>
