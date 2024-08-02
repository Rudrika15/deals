<div class="list-group list-group-flush h-100">
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.dashboard') }}">
        <i class="bi bi-speedometer"></i> Dashboard
    </a>

    {{-- User role Managment --}}
    <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> User Managment </span>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('users.index') }}">
        <i class="bi bi-people-fill"></i> User Managment
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('roles.index') }}">
        <i class="bi bi-person-check-fill"></i> Role Managment
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('users.assignRole') }}">
        <i class="bi bi-person-fill-add"></i> Assign Role
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.brand.list') }}">
        <i class="bi bi-people-fill"></i> Add Brand
    </a>


    {{-- content --}}
    {{-- <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Content </span>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admincategory.index') }}">
        <i class="bi bi-tag-fill"></i> Category
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('adminmedia.index') }}">
        <i class="bi bi-film"></i> Media
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admindownload.index') }}">
        <i class="bi bi-download"></i> Downloads
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('adminslogan.adminslogan') }}">
        <i class="bi bi-chat-heart-fill"></i> Slogan
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admindesign.admindesign') }}">
        <i class="bi bi-image-alt"></i> Design
    </a> --}}

    {{-- master --}}
    <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Master </span>
    {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admintemplatemaster.index') }}">
        <i class="bi bi-file-earmark-image"></i> Template
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('product.index') }}">
        <i class="bi bi-cart4"></i> Product
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('state.index') }}">
        <i class="bi bi-buildings-fill"></i> State
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('city.index') }}">
        <i class="bi bi-building"></i> City
    </a> --}}
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.brand.activity.index') }}">
        <i class="bi bi-boxes"></i> Package Activity
    </a>

    {{-- Creator --}}
    {{-- <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Creator </span>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('influencer.index') }}">
        <i class="bi bi-person-gear"></i> Influencer Category
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('brand.category.index') }}">
        <i class="bi bi-person-fill-gear"></i> Brand Category
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('influencer.packages') }}">
        <i class="bi bi-person-lines-fill"></i> Influencer Packages
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('influencer.list') }}">
        <i class="bi bi-person-lines-fill"></i> Influencer List
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('reseller.admin.adminPaymentStatus') }}">
        <i class="bi bi-wallet2"></i> Reseller Payments
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.brand.package.index') }}">
        <i class="bi bi-box2-heart"></i> Packages
    </a> --}}

    {{-- Extra --}}
    {{-- <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Extra </span>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('banner.index') }}">
        <i class="bi bi-crop"></i> Banner
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('offer.index') }}">
        <i class="bi bi-bookmark-heart"></i> Offer
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('coupon.index') }}">
        <i class="bi bi-postcard-heart"></i> Coupon
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('type.index') }}">
        <i class="bi bi-chat-right"></i> Notification Type
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('typedetail.index') }}">
        <i class="bi bi-chat-right-dots"></i> Notification Type Detail
    </a>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('offerSlider.index') }}">
        <i class="bi bi-chat-right-dots"></i> Offer Slider
    </a> --}}

    {{-- report --}}
    <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Report </span>
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('adminsubscription.index') }}">
        <i class="bi bi-people-fill"></i> Our Users
    </a>

    {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">
        <i class="bi bi-list-check"></i> Subscription Package
    </a> --}}
    {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('writer.designer.report') }}">
        <i class="bi bi-person-workspace"></i> Writer/Designer
    </a> --}}
    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('paymentReport.index') }}">
        <i class="bi bi-coin"></i> Payments
    </a>
    {{-- <span class=" fw-bold text-center text-uppercase sidebar-heading-small"> Report </span> --}}

</div>
