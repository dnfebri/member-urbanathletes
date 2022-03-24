@push('style')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

  <style>
    .wrapper {
      width: 100%;
    }

    .wrapper .carousel {
      position: relative;
      max-width: 1000px;
      margin: auto;
      padding: 0 60px;
    }

    .carousel .card {
      height: 500px;
      border-radius: 5px;
    }

    .owl-dots {
      text-align: center;
      margin-top: 20px;
    }

    .owl-dot {
      height: 10px;
      width: 10px;
      border-radius: 50%;
      cursor: pointer;
      outline: none;
      margin: 0 3px;
      border: 1px solid #fff !important;
      transition: all 0.3s ease;
    }

    .owl-dot:hover,
    .owl-dot.active {
      background-color: #fff !important;
    }

    .owl-prev,
    .owl-next {
      position: absolute;
      top: 45%;
      transform: translate(-50%, -50%);
    }

    .owl-prev {
      left: 40px;
    }

    .owl-next {
      right: 20px;
    }

    .fa-chevron-left,
    .fa-chevron-right {
      font-size: 30px;
      color: #fff;
      transition: all 0.2s;
    }

    .fa-chevron-left:hover,
    .fa-chevron-right:hover {
      color: #777;
    }
  </style>
@endpush

<div class="wrapper">
  <div class="carousel owl-carousel">
    {{ $slot }}
  </div>
</div>

@push('script')
<!-- Script Crad swiper -->
<script>
  $(".carousel").owlCarousel({
    loop: true,
    margin: 25,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    }
  })
</script>
@endpush