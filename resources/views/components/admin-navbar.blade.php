<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <!-- <img src="{{ asset('img/logo.jpg') }}" alt="LOGO" > -->
        <span>NASON UTI</span>
    </a>
    <button class="navbar-toggler shadow-none border-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fi fi-br-bars-staggered"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="{{ route('admin.dashboard')}}"><i class="fi fi-rs-home"></i> BERANDA</a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fi fi-sr-kpi-evaluation"></i> KPI TIM SUKSES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($timses as $t)
                    <a class="dropdown-item" href="{{ route('kpi-timses', ['user' => $t->username]) }}">{{ $t->name}}</a>
                    @endforeach
                </div>
            </div>
            <a class="nav-link" href="{{ route('admin.grafik-kinerja')}}"><i class="fi fi-br-chat-arrow-grow"></i> GRAFIK KINERJA</a>
            <a class="nav-link" href="{{ route('admin.operasional')}}"><i class="fi fi-bs-operation"></i> OPERASIONAL</a>
            <a class="nav-link" href=""><i class="fi fi-ss-folder-open"></i> TABULASI DATA</a>
            <a class="nav-link" href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
        </div>
    </div>
</nav>