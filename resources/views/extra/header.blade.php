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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name
                            }}</a>
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
                                <a class="switch-option dropdown-item text-decoration-none btn" href="#"
                                    id="roleSwitch">{{ $role->name }}</a>
                                @endif
                                @endforeach

                                @if ($hasUser)
                                <a class="switch-option dropdown-item text-decoration-none btn" href="#"
                                    id="roleSwitch">My Account</a>
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
        <div class="d-flex justify-content-end">

            @if (session()->has('success'))
            <div class="toast align-items-center text-white show bg-success" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-autohide="true" data-bs-delay="2000">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-bs-label="Close"></button> --}}
                </div>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                        style="width: 0%"></div>
                </div>
            </div>
            @endif
            @if (session()->has('error'))
            <div class="toast align-items-center text-white show bg-danger" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-autohide="true" data-bs-delay="2000">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('error') }}
                    </div>
                    {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button> --}}
                </div>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                        style="width: 0%"></div>
                </div>
            </div>
            @endif
            @if (session()->has('warning'))
            <div class="toast align-items-center text-white show bg-warning" role="alert" aria-live="assertive"
                aria-atomic="true" data-bs-autohide="true" data-bs-delay="2000">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('warning') }}
                    </div>
                    {{-- <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button> --}}
                </div>
                <div class="progress" style="height: 3px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar"
                        style="width: 0%"></div>
                </div>
            </div>
            @endif

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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


<script>
    document.addEventListener('DOMContentLoaded', function() {
            const toasts = document.querySelectorAll('.toast');

            function startProgressBar(toast) {
                const progressBar = toast.querySelector('.progress-bar');
                if (progressBar) {
                    if (!toast.classList.contains('progress-in-progress')) {
                        const delay = parseInt(toast.getAttribute('data-bs-delay'));
                        progressBar.style.transition = width ${delay}ms linear;
                        progressBar.style.width = '100%';
                        toast.classList.add('progress-in-progress');

                        // Check when progress bar reaches 100% width
                        progressBar.addEventListener('transitionend', function() {
                            if (progressBar.style.width === '100%' && !toast.classList.contains(
                                    'hovered')) {
                                toast.remove();
                            }
                        });
                    }
                }
            }

            function resetProgressBar(toast) {
                const progressBar = toast.querySelector('.progress-bar');
                if (progressBar) {
                    progressBar.style.width = '0%';
                    toast.classList.remove('progress-in-progress');
                }
            }

            toasts.forEach(toast => {
                toast.addEventListener('mouseenter', function() {
                    toast.classList.add('hovered');
                    resetProgressBar(toast);
                });

                toast.addEventListener('mouseleave', function() {
                    toast.classList.remove('hovered');
                    startProgressBar(toast);
                });

                startProgressBar(toast);
            });
        });
</script>