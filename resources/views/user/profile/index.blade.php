@extends('extra.master')
@section('title', 'Brand beans | Design Create')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <div class="container-fluid pt-2 pb-5">
        <div class="d-flex justify-content-end p-3">
            <a href="{{ route('user.card') }}/{{ $userurl }}" target="_blank" class="btn btn-sm btn-primary">Preview
                Card</a>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#profile"
                        aria-expanded="true" aria-controls="profile">
                        Profile
                    </button>
                </h2>
                <div id="profile" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <form id="my-form" action="{{ route('card.store') }}" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pb-1">
                                    <input type="hidden" name="cardid" value="{{ $details->id }}">

                                    <div class="row">
                                        <div class="col-md-4"><label>Your Full Name:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id="name"
                                                name="name" value="{{ $details->name }}">

                                        </div>
                                    </div>
                                </div>
                                @if (!Auth::user()->hasRole('Influencer'))
                                    <div class="col-md-6 pb-1">
                                        <div class="row">
                                            <div class="col-md-4"><label>Designation:</label></div>
                                            <div class="col-md-7">
                                                <input type="text" required class="form-control " id="heading"
                                                    name="heading" value="{{ $details->heading }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-1">
                                        <div class="row">
                                            <div class="col-md-4"><label>Company Name:</label></div>
                                            <div class="col-md-7">
                                                <input type="text" required class=" form-control" id="companyname"
                                                    name="companyname" value="{{ $details->companyname }}">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label>Username:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class=" form-control" id="username"
                                                name="username" value="{{ $users->username }}">
                                        </div>
                                    </div>
                                </div>
                                @if (!Auth::user()->hasRole('Influencer'))
                                    <div class="col-md-6 pb-1">
                                        <div class="row">
                                            <div class="col-md-4"><label>State:</label></div>
                                            <div class="col-md-7">
                                                <input type="text" required class=" form-control" id="state"
                                                    name="state" value="{{ $details->state }}">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label>City:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id="location"
                                                name="city" value="{{ $details->city }}">
                                        </div>
                                    </div>
                                </div>
                                @if (!Auth::user()->hasRole('Influencer'))
                                    <div class="col-md-6 pb-1">
                                        <div class="row">
                                            <div class="col-md-4"><label>Address:</label></div>
                                            <div class="col-md-7">
                                                <textarea type="text" required class="form-control " id="address" name="address">{{ $details->address }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label>Profile Photo:</label></div>
                                        <div class="col-md-5">
                                            <input type="file" accept="image/*" class="form-control " id="profilePhoto"
                                                name="profilePhoto"
                                                value="{{ url('profile') }}/{{ $users->profilePhoto }}">
                                            @if ($errors->has('profilePhoto'))
                                                <span class="text-danger">{{ $errors->first('profilePhoto') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ url('profile') }}/{{ $users->profilePhoto }}" class="img-fluid"
                                                alt="Responsive image">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label>Logo:</label></div>
                                        <div class="col-md-5">
                                            <input type="file" class="form-control " id="logo" name="logo">
                                            @if ($errors->has('logo'))
                                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-2">
                                            <img src="{{ url('cardlogo') }}/{{ $details->logo }}" class="img-fluid"
                                                alt="Responsive image">
                                        </div>
                                    </div>
                                </div>
                                @if (!Auth::user()->hasRole('Influencer'))
                                @endif

                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label>Category:</label></div>
                                        <div class="col-md-7">
                                            <select name="category" id="category" class=" form-control">
                                                <option selected disabled>--Update your Category--</option>
                                                @foreach ($category as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category', $details->category) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}</option>
                                                @endforeach
                                                <option value="other">Other</option>
                                            </select>

                                            <div class="frm-input py-3" id="other" style="display: none;">
                                                <input type="text" placeholder="Add Other Category"
                                                    name="categoryname" class=" form-control">
                                            </div>
                                            @if ($errors->has('category'))
                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if (!Auth::user()->hasRole('Influencer'))
                                    <div class="col-md-6 pb-1">
                                        <div class="row">
                                            <div class="col-md-4"><label>Year of Establish:</label></div>
                                            <div class="col-md-7">
                                                <input type="text" required pattern="[0-9]{4}" class=" form-control"
                                                    id="year" name="year" value="{{ $details->year }}">
                                                @if ($errors->has('year'))
                                                    <span class="text-danger">{{ $errors->first('year') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                {{-- @role('Influencer')
                                    <div class="col-md-6 pb-1">
                                        <div class="row">

                                            <div class="col-md-4"><label>Date of Birth:</label></div>
                                            <div class="col-md-7">
                                                <input type="date" class=" form-control" name="dob"
                                                    value="{{ $influencer->dob }}" id="dob">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 pb-1">

                                        <div class="col-md-4 pb-1">
                                            <label>Influencer Category:</label>
                                        </div>
                                        <div class="col-md-7 pb-1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="form-control select2_1 " style="width:95%"
                                                        name="categoryId[]" multiple="multiple">
                                                        <option disabled>-- Select Influencer Category --</option>
                                                        @foreach ($influencerCategory as $category)
                                                            <option value="{{ $category->name }}"
                                                                {{ old('categoryId', $influencer->categoryId) == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <b id="influencerCategory"></b>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 pb-1">
                                        <div class="row">

                                            <div class="col-md-4"><label>Gender:</label></div>
                                            <div class="col-md-7">
                                                <label>
                                                    <input type="radio" name="gender" value="Male" id="gender"
                                                        {{ old('gender') == 'Male' || $influencer->gender == 'Male' ? 'checked' : '' }}>
                                                    Male
                                                </label>

                                                <label>
                                                    <input type="radio" name="gender" value="Female" id="gender"
                                                        {{ old('gender') == 'Female' || $influencer->gender == 'Female' ? 'checked' : '' }}>
                                                    Female
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                @endrole --}}

                            </div>

                            <div class="row">
                                <div class="col-md-12 pb-1">
                                    <div class="row">
                                        <div class="col-md-2"><label>About:</label></div>
                                        <div class="col-md-10">
                                            {{-- <div class="form-control  bg-light ">
                                                <div>
                                                    <button type="button" id="bold-btn" class="btn btn-secondary ">
                                                        <i class="bi bi-type-bold"></i></button>
                                                    <button type="button" id="italic-btn" class="btn btn-secondary ">
                                                        <i class="bi bi-type-italic"></i></button>
                                                    <button type="button" id="underline-btn" class="btn btn-secondary ">
                                                        <i class="bi bi-type-underline"></i></button>
                                                    <button id="ul-btn" type="button" class="btn btn-secondary ">
                                                        <i class="bi bi-list-ul"></i></button>
                                                    <button id="ol-btn" type="button" class="btn btn-secondary ">
                                                        <i class="bi bi-list-ol"></i>
                                                    </button>
                                                </div>
                                                <div id="editor" class="form-control mt-2 shadow-none"
                                                    contenteditable="true" name= "about"
                                                    style="overflow-y: scroll ; overflow-x: hidden; ">

                                                    {!! $details->about !!}

                                                </div>
                                            </div> --}}
                                            <textarea class="summernote form-control" placeholder="Enter About" required name="about" id="summernote">{!! $details->about !!}</textarea>

                                        </div>
                                    </div>
                                </div>



                                {{-- @role('Influencer')
                                    <div class="row">
                                        <div class="col-md-6 pb-1">
                                            <div class="row">

                                                <div class="col-md-4"><label>Instagram Username or Link:</label></div>
                                                <div class="col-md-7">
                                                    <input type="text" required class=" form-control" name="instagramUrl"
                                                        value="{{ $influencer->instagramUrl }}"
                                                        placeholder="username or @your_username" id="instagramUrl">
                                                    @if ($errors->has('instagramUrl'))
                                                        <span class="text-danger">{{ $errors->first('instagramUrl') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-1">
                                            <div class="row">

                                                <div class="col-md-4"><label>Instagram Followers:</label></div>
                                                <div class="col-md-7">
                                                    <input type="text" required class=" form-control"
                                                        name="instagramFollowers"
                                                        value="{{ $influencer->instagramFollowers }}"
                                                        placeholder="Enter your instagram followers" id="instagramUrl">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-1">
                                            <div class="row">

                                                <div class="col-md-4"><label>Youtube Channel Url:</label></div>
                                                <div class="col-md-7">
                                                    <input type="text" required class=" form-control"
                                                        name="youtubeChannelUrl" value="{{ $influencer->youtubeChannelUrl }}"
                                                        placeholder="Enter your youtube channel" id="youtubeChannelUrl">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-1">
                                            <div class="row">

                                                <div class="col-md-4"><label>Youtube Subscriber:</label></div>
                                                <div class="col-md-7">
                                                    <input type="text" required class=" form-control"
                                                        name="youtubeSubscriber" value="{{ $influencer->youtubeSubscriber }}"
                                                        placeholder="Enter your youtube subscriber" id="youtubeSubscriber">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endrole --}}


                                @role('Brand')
                                    <div class="row">
                                        <div class="col-md-2 pb-1">
                                            <label>Brand Category:</label>
                                        </div>
                                        <div class="col-md-10 pb-1">
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <select class="form-control " name="brandCategoryId">
                                                        <option disabled selected>-- Select Brand Category --</option>
                                                        @foreach ($brandCategory as $bcategory)
                                                            @if (isset($brand_category->brandCategoryId))
                                                                <option value="{{ $bcategory->id }}"
                                                                    {{ old('brandCategoryId', $brand_category->brandCategoryId) == $bcategory->id ? 'selected' : '' }}>
                                                                    {{ $bcategory->categoryName }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $bcategory->id }}">
                                                                    {{ $bcategory->categoryName }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endrole
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-sm mt-3">Update</button><br>
                                </div>
                        </form>

                    </div>

                </div>
            </div>
            <hr style="margin: 0%;" class="text-muted">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#service" aria-expanded="false" aria-controls="service">
                        Social Links
                    </button>
                </h2>
                <div id="service" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="{{ route('link.update') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-phone ico text-success"></i> Phone
                                                Number:</label></div>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control " id="phone1" name="phone1"
                                                value="{{ $links->phone1 }}">
                                            @if ($errors->has('phone1'))
                                                <span class="text-danger">{{ $errors->first('phone1') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-whatsapp ico text-success"></i>
                                                Whatsapp Number:</label></div>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control " id="whatsappnumber"
                                                name="whatsappnumber"
                                                value="{{ $links->phone2 ?? old('whatsappnumber') }}">
                                            @if ($errors->has('whatsappnumber'))
                                                <span class="text-danger">{{ $errors->first('whatsappnumber') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-envelope ico"></i> Email:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="email" required
                                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                                                class="form-control " id="email" name="email" inputmode="email"
                                                value="{{ $links->email ?? old('email') }} ">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-skype ico text-info"></i>
                                                Skype:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id="skype"
                                                name="skype" value="{{ old('skype') ?? $links->skype }} ">
                                            @if ($errors->has('skype'))
                                                <span class="text-danger"> Please enter a
                                                    valid Skype URL, e.g. https://join.skype.com/username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-facebook ico text-primary"></i>
                                                FaceBook:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id="facebook"
                                                name="facebook" value="{{ old('facebook') ?? $links->facebook }}">
                                            @if ($errors->has('facebook'))
                                                <span class="text-danger"> Please enter a
                                                    valid Facebook URL, e.g. https://facebook.com/username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-instagram ico"
                                                    style="color: #E1306C;"></i> Instagram:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control "
                                                pattern="https?://?instagram\.com(?:\/[a-zA-Z0-9_\.]+)?" id="instagram"
                                                name="instagram" value="{{ old('instagram') ?? $links->instagram }}">
                                            @if ($errors->has('instagram'))
                                                <span class="text-danger"> Please enter a
                                                    valid Instagram URL, e.g. https://instagram.com/username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-twitter ico text-info"></i>
                                                Twitter:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id=""
                                                name="twitter" value="{{ old('twitter') ?? $links->twitter }}">
                                            @if ($errors->has('twitter'))
                                                <span class="text-danger"> Please enter a
                                                    valid Twitter URL, e.g. https://twitter.com/username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-youtube ico text-danger"></i>
                                                Youtube:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id=""
                                                name="youtube" value="{{ old('youtube') ?? $links->youtube }}">
                                            @if ($errors->has('youtube'))
                                                <span class="text-danger"> Please enter a
                                                    valid YouTube URL, e.g. https://youtube.com/@username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-linkedin ico text-primary"></i>
                                                Linkedin:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id=""
                                                name="linkedin" value="{{ old('linkedin') ?? $links->linkedin }} ">
                                            @if ($errors->has('linkedin'))
                                                <span class="text-danger"> Please enter a
                                                    valid LinkedIn URL, e.g. https://linkedin.com/in/username</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-1">
                                    <div class="row">
                                        <div class="col-md-4"><label> <i class="fa fa-globe ico text-secondary"></i> Web
                                                Site:</label></div>
                                        <div class="col-md-7">
                                            <input type="text" required class="form-control " id=""
                                                name="website" value="{{ old('website') ?? $links->website }}">
                                            @if ($errors->has('website'))
                                                <span class="text-danger"> Please enter a
                                                    valid URL</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-2">
                                <button type="submit" class="btn btn-success ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @role(['Admin', 'Brand', 'Reseller', 'Writer', 'Designer'])
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Payment" aria-expanded="false" aria-controls="Payment">
                            Payment
                        </button>
                    </h2>
                    <div id="Payment" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form class="form" method="post" action="{{ route('payment.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <label for="formFile" class="form-label ">Bank Name</label>
                                <input class="form-control " type="text" required id="bankName"
                                    value="{{ $payment->bankName ?? old('bankName') }}" name="bankName">
                                <br>
                                <label for="formFile" class="form-label ">Account Holder Name</label>
                                <input class="form-control " type="text" required id="accountHolderName"
                                    value="{{ $payment->accountHolderName ?? old('accountHolderName') }}"
                                    name="accountHolderName">
                                @if ($errors->has('accountHolderName'))
                                    <span class="text-danger">{{ $errors->first('accountHolderName') }}</span>
                                @endif
                                <br>
                                <label for="formFile" class=" form-label">Account Number</label>
                                <input class="form-control " type="text" required id="accountNumber" name="accountNumber"
                                    value="{{ $payment->accountNumber ?? old('accountNumber') }}">
                                @if ($errors->has('accountNumber'))
                                    <span class="text-danger">{{ $errors->first('accountNumber') }}</span>
                                @endif
                                <br>
                                <label for="formFile" class=" form-label">Account Type</label>
                                <input class="form-control " type="text" required id="accountType" name="accountType"
                                    value="{{ $payment->accountType ?? old('accountType') }}">
                                <br>
                                <label for="formFile" class=" form-label">IFSC Code</label>
                                <input class="form-control " type="text" required id="ifscCode" name="ifscCode"
                                    value="{{ $payment->ifscCode ?? old('ifscCode') }}">
                                @if ($errors->has('ifscCode'))
                                    <span class="text-danger">{{ $errors->first('ifscCode') }}</span>
                                @endif
                                <br>
                                <label for="formFile" class=" form-label">Upi Id</label>
                                <input class="form-control " type="text" required id="upidetail" name="upidetail"
                                    value="{{ $payment->upidetail ?? old('upidetail') }}"><br>
                                <div class="text-center">
                                    <button class="btn btn-sm btn-success" type="submit">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            @endrole
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#serviceDetails" aria-expanded="false" aria-controls="serviceDetails">
                        Service Details
                    </button>
                </h2>
                <div id="serviceDetails" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="form" method="post" action="{{ route('servicedetail.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">

                                <label for="formFile" class="form-label ">Title</label>
                                <input class="form-control " type="text" required id="title" name="title"><br>

                                <label for="formFile" class="form-label ">Photo</label>
                                <input type="file" class="" accept="image/*" id="photo"
                                    name="photo"><br>

                                <label for="formFile" class="form-label ">Description</label><br>
                                <textarea required name="description" class="form-control" id="description" cols="10" rows="5"></textarea>

                                <div class="text-center pt-2">
                                    <button type="submit"class="btn btn-sm btn-success">Submit</button>
                                </div>
                            </div>
                        </form>

                        <div class="border-top">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Photo</th>
                                            <th>Description</th>
                                            <th width="150px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($servicedetail as $servicedetails)
                                            <tr>
                                                <td>{{ $servicedetails->title }}</td>
                                                <td><img src="{{ url('servicedetailimg') }}/{{ $servicedetails->photo }}"
                                                        class="img-thumbnail" style="width:100px;height:100px"></td>
                                                <td>{{ $servicedetails->description }}</td>
                                                <td><a href="{{ route('servicedetail.edit') }}/{{ $servicedetails->id }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <a onclick="return confirm('Are you sure?')"
                                                        href="{{ route('servicedetail.delete') }}/{{ $servicedetails->id }}"
                                                        class="btn btn-sm bg-danger text-white">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#qrCodes" aria-expanded="false" aria-controls="qrCodes">
                        QR Codes
                    </button>
                </h2>
                <div id="qrCodes" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="form" method="post" action="{{ route('qrcode.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="qrcardId" id="cardId" value="{{ request('id') }}">

                            <label for="formFile" class="form-label ">Type</label>
                            <input class="form-control  w-100" type="text" required id="type"
                                name="type"><br>
                            @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif

                            <label for="formFile" class="form-label ">Phone Number</label>
                            <input class="form-control " type="number" id="number" name="number"><br>
                            @if ($errors->has('number'))
                                <span class="text-danger">{{ $errors->first('number') }}</span>
                            @endif

                            <label for="formFile" class="form-label ">QR Code</label>
                            <input type="file" id="code" class="pb-3 " name="code"><br>
                            @if ($errors->has('code'))
                                <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                            <div class="text-center">
                                <button class="btn btn-sm btn-success my-3" type="submit">Submit</button>
                            </div>
                        </form>

                        <div class="border-top">
                            <div class=" row">
                                @foreach ($qr as $qr)
                                    <div class="col-md-3 py-3">

                                        <p>
                                            <span class=" ">Title</span>: {{ $qr->type }}
                                        </p>

                                        <a class="text-danger" data-bs-toggle="modal" data-id="{{ $qr->id }}"
                                            data-bs-target="#Editservicedetails">
                                            <!-- <i class="bi bi-pencil-square "></i> -->
                                        </a>
                                        <img src="{{ url('QRcodes') }}/{{ $qr->code }}" class="img-thumbnail"
                                            style="width:100px;height:100px">
                                        <br>
                                        <p><strong class="">Number</strong>: {{ $qr->number }}</p>
                                        <a class="" onclick="return confirm('Are you sure?')"
                                            href="{{ Route('qr.delete') }}/{{ $qr->id }}"><i
                                                class="fa fa-trash ico text-danger text-center"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#slider" aria-expanded="false" aria-controls="slider">
                        Slider Images
                    </button>
                </h2>
                <div id="slider" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="form" method="post" action="{{ route('sliders') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="sliderCardId" value="{{ $details->id }}">
                                <label for="formFile" class=" form-label">File :</label>
                                <input type="file" class=" py-1" name="file">

                                <button type="submit" class="btn btn-sm btn-success my-2" id="submitimage"
                                    name="submitimage">Upload</button>
                            </div>
                        </form>


                        <div class="row">
                            @foreach ($slider as $slider)
                                <div class="col-md-3 py-3">


                                    <img src="{{ url('slider') }}/{{ $slider->file }}" class="img-thumbnail"
                                        style="width:100px;height:100px">
                                    <br>

                                    <a class="" onclick="return confirm('Are you sure?')"
                                        href="{{ route('slider.delete') }}/{{ $slider->id }}"><i
                                            class="bi bi-trash ico text-danger text-center"></i></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#brochure" aria-expanded="false" aria-controls="brochure">
                        Brochure
                    </button>
                </h2>
                <div id="brochure" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="form" method="post" action="{{ route('bro.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" name="cardid" value="{{ $details->id }}">
                                <label for="formFile" class=" form-label">File :</label>
                                <input type="file" class=" py-1" name="brochure">

                                <button type="submit" class="btn btn-sm btn-success my-2" id="submitimage"
                                    name="submitimage">Upload</button>
                            </div>
                        </form>


                        <div class="row">
                            @foreach ($bro as $bro)
                                <div class="col-md-3">
                                    <h5><a href="{{ url('brofile/' . $bro->file) }}" class="text-primary"
                                            target="_blank"> Brochure</a> <a class=""
                                            onclick="return confirm('Are you sure?')"
                                            href="{{ Route('bro.delete') }}/{{ $bro->id }}"><i
                                                class="fa fa-trash ico text-danger text-center"></i></a></h5>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mediatype').on('change', function() {
            if (this.value == 'Photo') {
                $("#Photo").show();
            } else {
                $("#Photo").hide();
            }
            if (this.value == 'Video') {
                $("#Video").show();
            } else {
                $("#Video").hide();
            }
        });
    });
</script>

<script>
    var copiedLink = '';

    function copyToClipboard(element, btnElem) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
        $(btnElem).html(`<i class="fa fa-link text-white"> </i> `);
        setTimeout(() => {
            $(btnElem).html(`<i class="fa fa-clipboard text-white"> </i> `);
        }, 2000);
    }
    $(document).ready(function() {
        copiedLink = $('#share_url').val();
        $('#shareWithTwitter').click(function() {
            window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
        });
        $('#shareWithFb').click(function() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink,
                'facebook-share-dialog', "width=626, height=436");
        });
        // $('#shareWithMail').click(function() {
        //     var formattedBody = "This is cause link: " + (copiedLink);
        //     var mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
        //     window.location.href = mailToLink;
        // });
        $('#shareWithWhatsapp').click(function() {
            var win = window.open('https://wa.me/send' + copiedLink, '_blank');
            win.focus();
        });
        $(document).on('click', '.ctoCb', function() {
            copyToClipboard($(this).parent().parent().find('input'), $(this));
        });
    });
</script>
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

{{-- 
@role('Influencer')
    <script>
        const category = {!! $influencer->categoryId !!};
        console.log('influencer category portion', category);
        console.log(category);

        document.getElementById('influencerCategory').innerHTML = category.join(', ');
    </script>
@endrole --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the editor element
        const editor = document.getElementById('editor');

        // Get the toolbar buttons
        const boldBtn = document.getElementById('bold-btn');
        const italicBtn = document.getElementById('italic-btn');
        const underlineBtn = document.getElementById('underline-btn');
        const ulBtn = document.getElementById('ul-btn');
        const olBtn = document.getElementById('ol-btn');

        // Add event listeners to the toolbar buttons
        boldBtn.addEventListener('click', () => {
            formatText(editor, 'bold');
            toggleButtonSelection(boldBtn);
            editor.focus(); // Add this line
        });

        italicBtn.addEventListener('click', () => {
            formatText(editor, 'italic');
            toggleButtonSelection(italicBtn);
            editor.focus(); // Add this line
        });

        underlineBtn.addEventListener('click', () => {
            formatText(editor, 'underline');
            toggleButtonSelection(underlineBtn);
            editor.focus(); // Add this line
        });

        ulBtn.addEventListener('click', () => {
            formatText(editor, 'ul');
            toggleButtonSelection(ulBtn);
            editor.focus(); // Add this line
        });

        olBtn.addEventListener('click', () => {
            formatText(editor, 'ol');
            toggleButtonSelection(olBtn);
            editor.focus(); // Add this line
        });
        // Function to format the selected text
        function formatText(editor, format) {
            const selection = window.getSelection();

            if (selection.rangeCount === 0) {
                // No text is selected, apply formatting to new text
                editor.addEventListener('input', function() {
                    const newNode = document.createElement('span');

                    switch (format) {
                        case 'bold':
                            newNode.style.fontWeight = 'bold';
                            break;
                        case 'italic':
                            newNode.style.fontStyle = 'italic';
                            break;
                        case 'underline':
                            newNode.style.textDecoration = 'underline';
                            break;
                        case 'ul':
                            newNode.innerHTML = '<ul><li>' + editor.textContent + '</li></ul>';
                            break;
                        case 'ol':
                            newNode.innerHTML = '<ol><li>' + editor.textContent + '</li></ol>';
                            break;
                    }

                    newNode.appendChild(document.createTextNode(editor.textContent));
                    editor.innerHTML = '';
                    editor.appendChild(newNode);
                }, {
                    once: true
                });
            } else {
                // Text is selected, apply formatting to selected text
                const range = selection.getRangeAt(0);
                const text = range.toString();
                const newNode = document.createElement('span');

                switch (format) {
                    case 'bold':
                        newNode.style.fontWeight = 'bold';
                        break;
                    case 'italic':
                        newNode.style.fontStyle = 'italic';
                        break;
                    case 'underline':
                        newNode.style.textDecoration = 'underline';
                        break;
                    case 'ul':
                        newNode.innerHTML = '<ul><li>' + text + '</li></ul>';
                        break;
                    case 'ol':
                        newNode.innerHTML = '<ol><li>' + text + '</li></ol>';
                        break;
                }

                newNode.appendChild(document.createTextNode(text));
                range.deleteContents();
                range.insertNode(newNode);
            }
        }

        // Function to toggle button selection
        function toggleButtonSelection(selectedBtn) {
            // Remove selection from all buttons
            boldBtn.classList.remove('selected');
            italicBtn.classList.remove('selected');
            underlineBtn.classList.remove('selected');
            ulBtn.classList.remove('selected');
            olBtn.classList.remove('selected');

            // Add selection to selected button
            selectedBtn.classList.add('selected');
            selectedBtn.style.color = 'black';
        }
    });
</script> --}}


{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('my-form');
        const editor = document.getElementById('editor');

        form.addEventListener('submit', function(event) {
            const about = editor.innerHTML;
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'about';
            hiddenInput.value = about;
            form.appendChild(hiddenInput);
        });
    });
</script> --}}
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // Set the height of the editor
            toolbar: [
                // ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                // ['fontname', ['fontname']],
                // ['fontsize', ['fontsize']],
                // ['color', ['color']],
                ['para', ['ul', 'ol']],
                // ['table', ['table']],
                // ['insert', ['link', 'picture', 'video']],
                // ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
