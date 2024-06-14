<div class="list-group list-group-flush">
    {{-- {{ Route::currentRouteName() }}
    {{ url()->current() }}
    {{ url()->full() }} --}}

    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('user.dashboard') }}">
        <i class="bi bi-speedometer"></i> Dashboard
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3 " href="{{ route('profile') }}">
        <i class="bi bi-person-fill"></i> Profile
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('portfolio.index') }}">
        <i class="bi bi-image"></i> Portfolio
    </a>

    @if (Auth::user()->package != 'FREE')
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('userTemplate.index') }}">
            <i class="bi bi-file-image-fill"></i> Custom Template
        </a>
    @endif
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('account.setting') }}">
        <i class="bi bi-person-lock"></i> Account & Passwords
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('inquiry.index') }}">
        <i class="bi bi-chat-right-quote-fill"></i> Inquiries
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('feed.index') }}">
        <i class="bi bi-chat-square-heart"></i> Feedback
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('refer.index') }}">
        <i class="bi bi-person-add"></i> Referral
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('pricing.index') }}">
        <i class="bi bi-piggy-bank-fill"></i> Pricing
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('my-purchase-offer') }}">
        <i class="bi bi-cart4"></i> Purchase Offer
    </a>
</div>
