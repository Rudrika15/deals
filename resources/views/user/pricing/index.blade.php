@extends('extra.master')
@section('title', 'Brand Beans | Slogan Create')
@section('content')
<div class="container my-4">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Packages</h3>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($subpack as $subpack)
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-body">
                    <h3 class="card-title">{{ $subpack->title }}</h3>
                    {{-- <h5 class="text-muted"><s>₹{{ $subpack->price }}</s> / {{ $subpack->points }}</h5> --}}
                    <h5>₹{{ $subpack->price }} / {{ $subpack->points }} <span class="text-muted">Points</span></h5>
                    <div class="text-center mt-3">
                        @if ($subpack->priceType == 'Free')
                        <a href="register">
                            <button type="button" class="btn btn-outline-primary btn-sm">SIGN UP FREE</button>
                        </a>
                        @else
                        <form id="payment-form" action="{{ route('razorpay.payment.store') }}" method="POST">
                            @csrf
                            <div class="pay-container">
                                <input type="hidden" name="amount" class="amount" value="{{ $subpack->price }}" />
                                <button class="pay-button btn btn-primary btn-sm" type="button">Get Started</button>
                            </div>
                        </form>
                        @endif
                    </div>
                    <h6 class="card-text mt-4">Best features for this Package:</h6>
                    <table class="table table-bordered table-responsive mt-2">
                        <thead>
                            <tr>
                                <th class="text-center">Activities</th>
                                <th class="text-center">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subpack->brandPackageDetails as $subpackDetails)
                            @foreach ($subpackDetails->activity as $activity)
                            <tr>
                                <td class="text-center">{{ $activity->title }}</td>
                                <td class="text-center">{{ $subpackDetails->points }}</td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var payButtons = document.querySelectorAll('.pay-button');

        payButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                var amountElement = button.closest('.pay-container').querySelector('.amount');
                var amount = parseFloat(amountElement.value);

                var options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": amount * 100,
                    "currency": "INR",
                    "name": "Brandbeans",
                    "description": "Razorpay payment",
                    "image": "/images/logo-icon.png",
                    "handler": function(response) {
                        var paymentId = response.razorpay_payment_id;
                        storePaymentId(paymentId, amount);
                    },
                    "prefill": {
                        "name": "ABC",
                        "email": "abc@gmail.com"
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
            console.log('Payment ID stored successfully');
        })
        .catch(error => {
            console.error('Error storing payment ID: ', error);
        });
    }
</script>
@endsection
