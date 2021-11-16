<x-app-layouts>

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
                        <a class="nav-link btn btn-primary login-btn" href="">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="relative">
        <div class="container text-white mt-4">
            <section class="row">
                <div class="col-md-12">
                    <div class="landing-text text-center">
                        <h1 class="font-right display-3 text-dark">travel<span class="text-primary">mate</span></h1>
                        <p class="font-outfit text-dark">Make your travel safe and comfortable with us, mate!</p>
                    </div>
                </div>
            </section>
            <section class="row mt-5">
                <div class="col-md-12 d-flex justify-content-center text-outfit">
                    <form action="" class="searchbar-land d-flex align-items-center">
                        <button class="btn-searchbar-land" type="submit"><span class="iconify me-2" data-icon="whh:magnifier"></span></button>
                        <input class="input-searchbar-land font-outfit" type="text" placeholder="Hayang Kamana?">
                    </form>
                </div>
            </section>
            <section class="row mt-5">
                <div class="col-md-12 font-outfit">
                    <h4 class="text-dark">Recommended For You</h4>
                    <div class="recommend">
                        @for($i = 0; $i < 10; $i++)
                        <a href="">

                            <div>
                                <div class="slide-item mx-2">
                                    <div class="slide-img mb-2">
                                        <img src="/img/landing-face-bg.jpg" alt="">
                                    </div>
                                    <div class="slide-body">
                                        <h4 class="text-dark mb-0 font-bold">Tiberius Lake</h4>
                                        <p class="text-dark mb-0">Tiberius, Russia</p>
                                        <div class="slide-rating d-flex align-items-center">
                                            <span class="iconify checked" data-icon="bi:star-fill"></span>
                                            <span class="iconify checked" data-icon="bi:star-fill"></span>
                                            <span class="iconify checked" data-icon="bi:star-fill"></span>
                                            <span class="iconify checked" data-icon="bi:star-fill"></span>
                                            <span class="iconify not-checked" data-icon="bi:star-fill"></span>
                                            <p class="text-primary mb-0 ms-2">4,00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
            </section>
            <section class="row mt-4">
                <div class="col-md-12">
                    <h4 class="font-outfit text-dark">Latest Article</h4>
                    <div class="last-article">
                        @for($i = 0; $i < 10; $i++)
                        <a href="">
                            <div class="mx-2">
                                <div class="article-img mb-2">
                                    <img src="/img/motogp.jpg" alt="motogp">
                                </div>
                                <div class="article-body">
                                    <h6 class="article-name text-dark font-outfit font-bold mb-0">Mandalika MotoGP</h6>
                                    <p class="article-author text-dark font-outfit mb-0">Andhika Prayogo</p>
                                    <p class="article-time text-dark font-outfit">Now</p>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-md-12">

                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="font-right display-5 text-dark">travel<span class="text-primary">mate</span></h3>
                </div>
            </div>
        </div>
    </footer>
</x-app-layouts>




    
    
  
