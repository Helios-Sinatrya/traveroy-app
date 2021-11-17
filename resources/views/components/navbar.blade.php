<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand font-right" href="#">travel<span class="text-primary">mate</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center font-outfit font-medium">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="#"><span class="iconify me-1" data-icon="clarity:pencil-solid"></span>Review</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center lang-select" id="LangSelect" data-bs-toggle="dropdown" aria-expanded="false">
                        <span style="font-size: 1.5em;" class="iconify" data-icon="codicon:globe"></span>
                    </button>
                    <div class="dropdown-menu lang-select-menu">
                        <a href="#" class="dropdown-item d-flex align-items-center"><span class="iconify me-2" data-icon="emojione:flag-for-united-kingdom"></span>English</a>
                        <a href="#" class="dropdown-item d-flex align-items-center"><span class="iconify me-2" data-icon="emojione:flag-for-indonesia"></span>Bahasa Indonesia</a>
                    </div>
                </li>
                <li class="nav-item">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="nav-link btn btn-primary login-btn" href="{{ Route('login') }}">Sign In</button>
                    <x-modal-login></x-modal-login>
                </li>
            </ul>
        </div>
    </div>
</nav>