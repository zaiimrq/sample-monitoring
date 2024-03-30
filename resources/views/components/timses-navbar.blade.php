<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <!-- <img src="{{ asset('img/logo.jpg') }}" alt="LOGO" > -->
        <span>NASON UTI</span>
    </a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fi fi-br-bars-staggered"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="{{ route('timses.dashboard')}}"><i class="fi fi-rs-file-upload"></i> UPLOAD DUKUNGAN</a>
            <a class="nav-link" href="{{ route('timses.operasional')}}"><i class="fi fi-bs-operation"></i> OPERASIONAL</a>
            <a class="nav-link" href="{{ route('timses.kendala')}}"><i class="fi fi-br-exclamation"></i> KENDALA</a>
            <a class="nav-link" href="{{ route('timses.permintaan')}}"><i class="fi fi-br-exclamation"></i> PERMINTAAN MASYARAKAT</a>
            <a class="nav-link" href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
        </div>
    </div>
</nav>