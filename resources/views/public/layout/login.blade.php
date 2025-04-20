<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle drop_togn nav_hide fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person"></i>
    </a>
    <ul class="dropdown-menu drop_login shadow rounded-0 p-0" aria-labelledby="navbarDropdown" style="width: 280px;">
        <li>
            <div class="p-3" style="padding: 1.5rem !important;">
                <b class="text-center fs-4 d-block mb-3"><i class="bi bi-person me-1 align-middle col_red"></i> Login</b>
                <form>
                    <div class="mb-2">
                        <label for="email" class="form-label small mb-1">Email Address</label>
                        <input type="email" class="form-control form-control-sm rounded-0" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label small mb-1">Password</label>
                        <input type="password" class="form-control form-control-sm rounded-0" id="password" placeholder="••••••••">
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label small" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="small">Forgot password?</a>
                    </div>

                    {{-- الزر صار رابط --}}
                    <a href="login" class="button px-3 pt-2 pb-2 w-100 mb-2 text-center d-block text-white" style="background-color: #28a745; border: 1px solid #000;">
                        Login
                    </a>

                    <div class="text-center small">
                        Don't have an account? <a href="signup" class="col_red">Sign Up</a>
                    </div>
