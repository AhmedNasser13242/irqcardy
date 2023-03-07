@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Image Slider</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset ('css/style.css') }}" />
  </head>
  <body>
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
          @foreach ($sliders as  $sliderItem)


        <div class="slide swiper-slide">
          <img src="{{ asset("$sliderItem->image") }}" alt="" class="image" />
          <div class="image-data">
                <span class="text"><h1 style="color: rgba(173, 173, 173, 0.383)">{{ $sliderItem->title }}</h1></span>
            <h2>
                {{ $sliderItem->description }}
            </h2>
            <a href="{{ url("/collections") }}" class="button">شاهد البطاقات</a>
          </div>
        </div>
        @endforeach
    </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
    <!-- Swiper JS -->
    <script src="JS/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </body>
</html>

@endsection

