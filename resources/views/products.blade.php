<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
</head>
<body>
    @include('blocks.header')
    @include('blocks.navbar')
    @include('blocks.product')
    <div class="ta-product">
        <div class="ta-product__top">
            <h1 class="ta-product__title">Danh Sách Sản Phẩm</h1>
            <div class="arrange shadow-sm">
                <div class="arrange-title">Sắp xếp</div>
                <a class="arrange-link acctive" href="">Mới nhất</a>
                <a class="arrange-link" href="">Cũ nhất</a>
                <a class="arrange-link" href="">Giá: Thấp - Cao</a>
                <a class="arrange-link" href="">Giá: Cao - Thấp</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>

              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>

              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
              <a href="{{route('full-product') }}" class="col-2 ta-product__col">
                <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                <div class="ta-product__name">Tên sản phẩm</div>
                <div class="ta-product__price">100.000VND</div>
              </a>
            </div>
          </div>
    </div>
    
    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
