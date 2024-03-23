@extends('Layout.main-no-navbar')
@section('container')
    
<section class="login">
    <div class="container container-login">
        <div class="row">

            <div class="col-md-6 text-center">
                <img src="{{ asset('img/stat.svg') }}" class="img-fluid" alt="img" style="height: 80%;width:auto;">
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="card border-light mb-3">
                    <div class="copy" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                        <div class="card-header text-center">
                            <div class="text-hero-bold">
                                BUPATIKU
                            </div>
                            <div class="text-hero-reguler">
                                Sistem Management Informasi Tim Sukses
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group">
                                    <label for="username">Username</label><br>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" autocomplete="none" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label><br>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required><br>
                                </div>
                                <button type="submit" class="btn btn-primary" href="{{ route('admin-home')}}">MASUK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection