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
  {{-- bootsrap icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand col-9" href="#"><span>
            Healet
          </span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
              <a class="nav-link text-white" href="#about">About</a>
              <a class="nav-link text-white" href="#shop">Shop</a>
              <a class="nav-link text-white" href="#blog">Blog</a>
              <a class="nav-link text-white" href="/signup"><i class="bi bi-box-arrow-in-right"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

  <!-- shop section -->

  <section class="shop_section layout_padding" id="shop">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          The All Products
        </h2>
      </div>
      <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="/{{$product->id}}/details">
              <div class="img-box">
                <img src="picture/{{$product->product_image}}" alt="{{$product->product_name}}">
              </div>
              <div class="detail-box">
                <h6>
                  {{$product->product_name}}
                </h6>
                <h6>
                  Price
                  <span>
                    <i class="bi bi-currency-rupee"></i>&nbsp;{{$product->product_price}}
                  </span>
                </h6>
              </div>
              <div class="edit btn btn-warning">
                <span>
                  <a href="/{{$product->id}}/update">
                  <i class="bi bi-pencil-square"></i></a>
                </span>
              </div>
              <div class="del btn btn-danger">
                <span>
                  <a href="/product/{{$product->id}}/deleted">
                  <i class="bi bi-trash"></i></a>
                </span>
              </div>
            </a>
          </div>
	    </div>
        @endforeach
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->