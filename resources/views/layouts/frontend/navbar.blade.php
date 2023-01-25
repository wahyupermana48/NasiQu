<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">NasiQu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#gallery">Gallery</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#donate">Donations</a></li>
                @auth
                <li class="nav-item"><a class="nav-link me-lg-3" href="/dashboard">Dashboard</a></li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark">log out</button>
                    </form>
                </li>
                @else
                <li class="nav-item"><a class="nav-link me-lg-3" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="/register">Register</a></li>
                @endauth
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                <span class="d-flex align-items-center">
                    <i class="bi-gift-fill me-2"></i>
                    <span class="small">Donate</span>
                </span>
            </button>
            
            <button type="button" class="btn btn-warning rounded-pill mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-bag-fill mx-2"></i>KeripikQu
            </button>
        </div>
    </div>
</nav>