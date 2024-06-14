<div class="list-group list-group-flush">
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.dashboard') }}">
        <i class="bi bi-speedometer"></i> Dashboard
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.campaign.index') }}">
        <i class="bi bi-person-workspace"></i> Campaign
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.campaign.step.index') }}">
        <i class="bi bi-bar-chart-steps"></i> Campaign Steps
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.campaign.appliers') }}">
        <i class="bi bi-person-add"></i> Appliers
    </a>
    {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.pricing') }}">
        <i class="bi bi-cash"></i> Pricing
    </a> --}}
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('pricing.index') }}">
        <i class="bi bi-piggy-bank-fill"></i> Pricing
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.influencerList') }}">
        <i class="bi bi-person-heart"></i> Influencer
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.log') }}">
        <i class="bi bi-list-nested"></i> Point Log
    </a>

    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.offers') }}">
        <i class="bi bi-bookmark-heart"></i> Brand Offer
    </a>
</div>
