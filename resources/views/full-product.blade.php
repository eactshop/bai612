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
    <div class="ta-full__product">
        <div class="full-product__description">
            <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="full-product__img">
            <div class="full-product__text">
                <div class="full-product__name">Bộ Lau Nhà 9 Lít - Tím</div>
                <div class="full-product__price">100.000VND</div>
                <div class="full-product__info">
                    <div class="fp-info__title">Thông tin sản phẩm</div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Đơn vị:</div>
                        <span>Cái</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Kích thước:</div>
                        <span>47 x 29 x 31 cm</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Qui cách:</div>
                        <span>1 Cái/Kiện</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Nguyên liệu:</div>
                        <span>PP</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Màu sắc:</div>
                        <span>Dương, Tím, Xám, Lá</span>
                    </div>
                    <div class="mgt-20 fp-info__title">Thông tin mua hàng</div>
                    <button class="fp-info__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">Liên hệ đặt hàng</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập thông tin liên hệ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Họ tên:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Ghi chú:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Đóng</button>
                                    <button type="button" class="fp-btn__form btn btn-primary">Gửi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <a href="#" class="col-2 ta-product__col">
                    <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">Tên sản phẩm</div>
                    <div class="ta-product__price">100.000VND</div>
                </a>
                <a href="#" class="col-2 ta-product__col">
                    <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">Tên sản phẩm</div>
                    <div class="ta-product__price">100.000VND</div>
                </a>
                <a href="#" class="col-2 ta-product__col">
                    <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">Tên sản phẩm</div>
                    <div class="ta-product__price">100.000VND</div>
                </a>
                <a href="#" class="col-2 ta-product__col">
                    <img src="{{ asset('assets/images/product2.jpg') }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">Tên sản phẩm</div>
                    <div class="ta-product__price">100.000VND</div>
                </a>
                <a href="#" class="col-2 ta-product__col">
                    <img src="{{ asset('assets/images/product1.jpg') }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">Tên sản phẩm</div>
                    <div class="ta-product__price">100.000VND</div>
                </a>
                <a href="#" class="col-2 ta-product__col">
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
