<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Bhumi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('public')}}/img/icon/bhumiIcon.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   

    <!-- Libraries Stylesheet -->
    <link href="{{url('public')}}/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{url('public')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="{{url('public')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('public')}}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{url('public')}}/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

  

    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-2"
          >
            <h1 class="display-4 text-light mb-5">
            Wonderful Indonesia <br>
            Bhinekka Tunggal Ika
            </h1>
          
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="{{url('public')}}/img/1.jfif" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="{{url('public')}}/img/4.jfif" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="{{url('public')}}/img/8.jfif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
 <div class="container px-4 px-lg-5">

      @foreach ($list_artikel as $artikel)
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
              <!-- Post preview-->
              <div class="post-preview">
                  <a href="{{ url('detailArtikel', $artikel->id) }}">
                      <h2 class="post-title">{{ $artikel->judul }}</h2>
                     
                  </a>
                  <p>
                      <strong> Penulis : {{ $artikel->penulis }} </strong>
                      <br>
                     <strong>Publikasi {{ $artikel->created_at->diffForHumans()  }}</strong>
                    
                      <br>
                     {{$artikel->isi}}
                  </p>
              </div>
          </div>
      </div>
      @endforeach
  
  
  </div>
  
  </div>
    <!-- Footer Start -->
  
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public')}}/lib/wow/wow.min.js"></script>
    <script src="{{url('public')}}/lib/easing/easing.min.js"></script>
    <script src="{{url('public')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{url('public')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{url('public')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url('public')}}/js/main.js"></script>
  </body>
</html>
