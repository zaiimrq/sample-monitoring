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
            <a class="nav-link" href="">UPLOAD DUKUNGAN</a>
            <a class="nav-link" href="">OPERASIONAL</a>
            <a class="nav-link" href="">KENDALA</a>
            <a class="nav-link" href="">PERMINTAAN MASYARAKAT</a>
            <a class="nav-link" href="{{ route('logout') }}"><i class='bx bx-log-out'></i></a>
        </div>
    </div>
</nav>