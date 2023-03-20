@extends('layout.master')
@section('title', 'Selamat datang!')
@section('css', 'index')

@section('content')

  <body style="overflow-x: hidden">
    <section data-bss-parallax-bg="true" style="background: url('assets/img/bg-sky.jpg'); background-size: cover;"
      class="vh-100" class="img-hero2">
      {{-- main  --}}
      <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <div class="row">
          <div class="col-md-6">
            {{-- gambar --}}
            <div class="img text-start ext-md-start" >
              <img src="{{ url('assets/img/h1.png') }}" alt="" class="img-fluid"
                style="max-height:400px; max-width:400px;">
            </div>
            {{-- sub h --}}
            <div class="subh">
              <p class="text-start">(Aksesibilitas, Atraktif, Antusias, Akademik)</p>
            </div>
            {{-- desc --}}
            <div class="desc p-0 m-0 text-start text-md-start">
              <p>Platform media pembelajaran interaktif dengan game-based education dan trivia berbasis website untuk anak
                tunagrahita ringan, memiliki mengedepankan pada aksesibiltas, atraktif, dan antusias akademik.</p>
            </div>
            {{-- button --}}
            <div class="button text-start text-md-start">
              <a href="lojin" type="button" class="buthon mx-3"> Mulai!</a>
              <a href="/about" type="button" class="buthon2"> lebih lanjut</a>

            </div>
          </div>
          <div class="col-md-6">
            {{-- main img --}}
            <div class="img-main text-center">
              <img src="{{ url('pictures/pensilterbang.png') }}" alt="pensil" draggable="false" class="img-fluid"
                style="height:700px; ">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- create a fixed button in the middle bottom functionm to scroll down --}}
    <div class=" text-center">
      <a class="btn-down">
        <i class="fa-solid fa-arrow-down"></i>
      </a>
    </div>

    {{-- hal 2 --}}
    <section style="background: url('pictures/bg.jpg'); background-size: cover;" class="vh-100 d-flex" id="section2">
      {{-- main --}}
      <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <div class="row d-flex flex-column justify-content-center align-items-center">
          {{-- head --}}
          <img src="{{ url('assets/img/h11.png') }}" alt="" class="img-fluid img-sec">
          <img src="assets/img/geser.png" alt="" class="img-fluid img-sec2">
          {{-- carousel  --}}
          <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ url('assets/img/belajar1.png') }}" class="img-fluid text-center img-c" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ url('assets/img/bermain1.png') }}" class="img-fluid text-center img-c" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ url('assets/img/tekateki1.png') }}" class="img-fluid text-center img-c" alt="...">
                </div>
              </div>
              {{-- btn --}}
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prevs-icon" style="font-size: 8rem" aria-hidden="true"><i class="fa-solid fa-chevron-left"></i>
                  </span>
                    <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-nexst-icon" style="font-size: 8rem"aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

    </section>

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    {{-- jq --}}
    <script src="{{ url('js/jq.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- paralax --}}
    <script src="{{ url('js/parallax.js') }}"></script>
    <script>
      // hide navbar, then reveal on scroll
      // $(document).ready(function() {
      //   var lastScrollTop = 0;
      //   $(window).scroll(function() {
      //     var scrollTop = $(this).scrollTop();
      //     if (scrollTop > lastScrollTop) {
      //       $('#navbar').slideDown('slow');

      //     } else {
      //       $('#navbar').slideUp('slow');
      //     }
      //     lastScrollTop = scrollTop;
      //   });
      // });

      // hide btn-down on scroll
      $(document).ready(function() {
        var lastScrollTop = 0;
        $(window).scroll(function() {
          var scrollTop = $(this).scrollTop();
          if (scrollTop > lastScrollTop) {
            $('.btn-down').fadeOut('slow');

          } else {
            $('.btn-down').fadeIn('slow');

          }
          lastScrollTop = scrollTop;
        });
      });
      // make btn-down scroll to the next section
      const btnDown = $('.btn-down');
      const section2 = document.getElementById('section2');

      btnDown.on('click', () => {
        section2.scrollIntoView({
          behavior: 'smooth'
        });
      });
    </script>

  @endsection
