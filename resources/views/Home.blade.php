@extends('Layouts.app')
@section('content')

    <section id="hero" class="section hero">

        <div class="container">
          <div class="row gy-4 mt-5">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 class=""> Selamat Datang</h1>
              <p>Ini adalah mini Project yang dibuat pasca UTS</p>
              <div class="d-flex">
                <img src="{{ Vite::asset('resource/images/hero-img.svg') }}" alt="" class="btn-get-started">Get Started>


              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
              <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section><!-- /Hero Section -->
    <div class="container mt-4">
        {{-- <h4>{{ $pageTitle }}</h4> --}}
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded3 border">
            <div class="bi-person-fill me-3 fs-1"></div>

            <h4 class="mb-0"> Faiq Rizki Al Fatih</h4>
            <hr>
            <h4 class="mb-0"> /1204222069</h4>
        </div>
    </div>
    @vite('resources/js/app.js')
@endsection
</html>
