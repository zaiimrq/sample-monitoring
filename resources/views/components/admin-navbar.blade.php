<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #2E8B57;">
    <a class="navbar-brand" href="#">
        <!-- <img src="{{ asset('img/logo.jpg') }}" alt="LOGO" > -->
        <span>NASON UTI</span>
    </a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class='bx bx-menu'></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <div class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" aria-current="page" href="#" id="navbarDropdown"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    KPI TIM SUKSES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('kpi-timses')}}">TIM SUKSES TESTING</a>
                    <a class="dropdown-item" href="#">TIM SUKSES BLABLA</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="#">TIM SUKSES BLABLA</a>
                </div>
            </div>
            <a class="nav-link" href="">GRAFIK KINERJA</a>
            <a class="nav-link" href="">OPERASIONAL</a>
            <a class="nav-link" href="">TABULASI DATA</a>
            <a class="nav-link" href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
        </div>
    </div>
</nav>