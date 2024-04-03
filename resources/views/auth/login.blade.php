@section('title', __('Login'))
<x-guest-layout>
    <div class="login-container" style="height: 100vh;">
        <div class="row h-100">
            <div class="col-md-6 logo-side text-center">
                <img src="{{ asset('img/logo.png') }}" class="img-fluid mt-5" alt="img" style="height: 60%;width:auto;">
                <div class="text-hero-regular text-white">Selamat Datang!</div>
            </div>
            <div class="col-md-6 form-side">
                <div class="form-container">
                    <div class="text-hero-bold">BUPATIKU</div>
                    <div class="text-hero-regular">Sistem Management Informasi Tim Sukses</div>
                    <hr>
                    <form action="{{ route('login.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username">Username</label><br>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username" autocomplete="none" required>
                            @error('username')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label><br>
                            <input type="password" class="form-control @error('username') is-invalid @enderror" name="password" placeholder="Masukkan Password" required>
                            @error('password')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
        <!-- <div class="container container-login">
            <div class="row">

                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/stat.svg') }}" class="img-fluid" alt="img" style="height: 80%;width:auto;">
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card border-light mb-3">
                        <div class="copy" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                            data-aos-duration="1000">
                            <div class="card-header text-center">
                                <div class="text-hero-bold">
                                    BUPATIKU
                                </div>
                                <div class="text-hero-reguler">
                                    Sistem Management Informasi Tim Sukses
                                </div>
                            </div>
                            <div class="card-body shadow-lg">
                                <form action="{{ route('login.store') }}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="username">Username</label><br>
                                        <input type="text" class="form-control @error('username')
                                            is-invalid
                                        @enderror" name="username" placeholder="Masukkan Username" autocomplete="none"
                                            required>
                                        @error('username')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label><br>
                                        <input type="password" class="form-control @error('username')
                                            is-invalid
                                        @enderror" name="password" placeholder="Masukkan Password" required>
                                        @error('password')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">MASUK</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->
</x-guest-layout>