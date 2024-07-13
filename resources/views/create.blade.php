<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        />
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" 
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" 
        crossorigin="anonymous">

  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Healet</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
  <!-- font awesome style -->
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand col-9" href="/"><span>
            Healet
          </span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="{{asset('images/slider-bg.jpg')}}" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-9 col-lg-8">
        <div class="detail-box">
            <div class="container">
                <div class="card" style="background:rgba(255, 255, 255, 0.0);">
                  <form action="/product/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="pl-4 mt-3 mb-3"><h6><i class="bi bi-journal-plus"></i> Add New Product</h6></div>
                    <div class="d-flex">
                        <label for="name" class="form-lebel p-3 col-3">Name</label>
                        <input type="text" name="name" class="form-control p-3 col-8" id="name" >
                    </div>
                    <div class="d-flex">
                        <label for="model" class="form-lebel p-3 col-3">Model</label>
                        <input type="text" name="model" class="form-control p-3 col-8" id="model" >
                    </div>
                    <div class="d-flex">
                        <label for="price" class="form-lebel p-3 col-3">Price</label>
                        <input type="text" name="price" class="form-control p-3 col-8" id="price" >
                    </div>
                    <div class="d-flex">
                      <label for="quantity" class="form-lebel p-3 col-3">Quantity</label>
                      <input type="text" name="quantity" class="form-control p-3 col-8" id="quantity">
                  </div>
                    <div class="d-flex">
                        <label for="des" class="form-lebel p-3 col-3">Descreption</label>
                        <input type="text" name="des" class="form-control p-3 col-8" id="des">
                    </div>
                    <div class="d-flex">
                        <label for="image" class="form-lebel p-3 col-3">Image</label>
                        <input type="file" name="image" class="form-control p-1 col-8" id="image">
                    </div>
                    <div class="mt-2 mb-2 d-flex justify-content-around">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary col-md-2"
                        >Add
                      </button>
                      <button type="reset" class="btn btn-warning text-white col-md-2"
                        >Clear</button
                      >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>