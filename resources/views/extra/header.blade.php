<style>
    .switch-container .switch-option {
        cursor: pointer !important;
        /* padding: 5px 10px !important; */
        border-radius: 5px !important;
        margin-top: 5px !important;
        background-color: #1BC7EC !important;
        color: #002E6E !important;
        border-radius: 50px !important;
    }

    .switch-container .switch-option.selected-role {
        background-color: #002E6E !important;
        color: white !important;
    }
</style>

<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom sticky-top">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 me-5">
                    <li class="nav-item"><a href="#" class="nav-link"><i>
                                <div class=" pb-3 text-center">
                                    <?php
                                    $user = Auth::user()->id;
                                    $balance = \App\Models\BrandPoints::where('userId', $user)->get();
                                    $total = 0;
                                    
                                    foreach ($balance as $points) {
                                        $total += $points->points;
                                    }
                                    
                                    ?>
                                    <span class="waves-effect"><i>Total Points = {{ $total }}</i>
                                    </span>
                                </div>

                            </i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            <div class="switch-container">
                                @php
                                    $hasUser = false;
                                @endphp
                                @foreach (Auth::user()->roles as $role)
                                    @if ($role->name === 'User')
                                        @php
                                            $hasUser = true;
                                        @endphp
                                    @elseif ($role->name !== 'Influencer')
                                        <a class="switch-option dropdown-item text-decoration-none btn" href="#" id="roleSwitch">{{ $role->name }}</a>
                                    @endif
                                @endforeach

                                @if ($hasUser)
                                    <a class="switch-option dropdown-item text-decoration-none btn" href="#" id="roleSwitch">My Account</a>
                                @endif
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();
                                                     localStorage.removeItem('selectedRole');">
                                Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container-fluid p-4">
        <div class="">
            @if ($message = Session::get('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($message = Session::get('info'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        @yield('content')
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectedRole = localStorage.getItem('selectedRole');
        if (selectedRole) {
            var switchOptions = document.querySelectorAll('.switch-option');
            switchOptions.forEach(function(element) {
                var roleName = element.textContent.trim();
                if (roleName === selectedRole) {
                    element.classList.add('selected-role');
                }
            });
        }

        document.querySelectorAll('.switch-option').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                var roleName = this.textContent.trim();
                localStorage.setItem('selectedRole', roleName);
                localStorage.setItem('count', '1');
                location.reload();
            });
        });
    });
</script>
