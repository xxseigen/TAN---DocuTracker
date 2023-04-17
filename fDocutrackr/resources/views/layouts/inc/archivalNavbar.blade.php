<!-- Navbar -->
<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent bg-color1 fixed-top navbar-scrolled">
    <div class="container px-5">
        <a class="navbar-brand text-color2 fw-bold" href="#">DocuTrackr</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-lg-5 pt-4 pb-3">
                <li class="nav-item"><a class="nav-link text-color2" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-color2" href="#about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link text-color2" href="#">Contact</a></li> -->
                @role('Superadmin | Admin | Faculty | Student' )
                <li class="nav-item"><a class="nav-link text-color2" href="{{ url('/archive') }}">Research
                        Archive</a></li>
                @endrole
            </ul>
            <!-- when user is logged in -->
            <!-- <div class="d-flex align-items-center">
                <a class="me-lg-4" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#283971"
                        class="bi bi-bell-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                    </svg>
                </a>
                <div class="dropdown">
                    <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#"
                        id="dropdownUser1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://via.placeholder.com/35x35.png" alt="Profile Picture" width="35" height="35"
                            class="rounded-circle me-2" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </div>
            </div> -->

            <!-- when user is not logged in -->
            <a class="btn fw-medium ms-lg-4 btn-color3" href="{{ route('login') }}">
                Log in
            </a>
        </div>
    </div>
</nav>

<!-- Login modal -->
<!-- <div class="modal fade" id="modal-auth-login" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-color1">
                <h5 class="modal-title fw-bold text-color2">Log in</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-color1">
                <form>
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" placeholder="Enter email address">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword1" placeholder="Enter password">
                    </div>
                    <div class="px-0 form-check d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="Check1">
                            <label class="form-check-label" for="Check1">Remember me</label>
                        </div>
                        <a class="text-color2" data-bs-toggle="modal" data-bs-target="#modal-auth-password"
                            style="cursor: pointer;">Forgot
                            Password?</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-color1">
                <div class="text-center">
                    <button class="btn btn-color2 w-100" href="#">Log in</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Forgot password -->
<!-- <div class="modal fade" id="modal-auth-password" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-color1">
                <h1 class="modal-title fs-5 fw-bold text-color2">Password Recovery</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-color1">
                <div class="form-text mb-3">Enter your email address and we will send you a link to reset your password.
                </div>
                <form>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="InputEmail2" placeholder="Enter email address">
                </form>
            </div>
            <div class="modal-footer bg-color1 d-flex justify-content-between">
                <a class="text-color2 me-4" data-bs-toggle="modal" data-bs-target="#modal-auth-login"
                    style="cursor: pointer;">Return to Login</a>
                <button class="btn btn-color2" href="#">Reset Password</button>
            </div>
        </div>
    </div>
</div> -->