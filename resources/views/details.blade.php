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
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

    <div class="container mt-4 ">
        <div class="row">
            <h5>
              <i class=" bi bi-plus-square-fill"></i>&nbsp;&nbsp;Project Details
            </h5>
            <hr />
            <div class="card">
    
              <img src="/picture/{{$product->product_image}}" alt="{{$product->product_name}}&nbsp;{{$product->product_model}}" class="card-img-top"  />
              <div class="card-body">
                <h5 class="fw-semibold">{{$product->product_name}}&nbsp;{{$product->product_model}}</h5>
    
                <p class="fw-semibold">
                  M.R.P :
                  <small class="card-text text-decoration-line-through text-danger"
                    >{{$product->product_price}}</small
                  >&nbsp;&nbsp;&nbsp;&nbsp; Offered Price :
                  <small class="text-success">{{$product->product_offered_price}}</small>
                </p>
                <div class="card-text text-secondary">
                  {{$product->product_des}}
                </div>
              </div>
            </div>
          </div>
    </div>

  <!-- jQery -->
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>