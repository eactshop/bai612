<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tin tức - Sự kiện</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    @include('blocks.header')
    @include('blocks.navbar')
    <div class="full-news">
        <div class="row ">
            <div class="col-8 full-news__col1">
                <h1 class="full-new__title">NHỰA DUY TÂN TRỞ THÀNH "THƯƠNG HIỆU TRUYỀN CẢM HỨNG CHÂU Á 2023"</h1>
                <div class="time-line">
                    <div class="full-new__time">11/10/2023</div>
                    <div class="line"></div>
                </div>
                <div class="full-new__description">
                    <span class="fn-des__text">Với 36 năm nỗ lực mang tới những sản phẩm nhựa chất lượng, Duy Tân vinh
                        dự là đại diện duy nhất của ngành nhựa Việt Nam được xướng tên “Thương hiệu truyền cảm hứng” tại
                        giải thưởng Doanh nghiệp châu Á - Asia Pacific Enterprise Awards. Đây là cột mốc ý nghĩa của
                        doanh nghiệp trước thềm kỷ niệm 36 năm ngày thành lập (15/10).

                        Tối 5/10/2023, đêm gala trao giải Doanh nghiệp châu Á - Asia Pacific Enterprise Awards (APEA)
                        diễn ra tại TP.HCM với sự hiện diện của 65 Doanh nghiệp hàng đầu trong các lĩnh vực. Đây là giải
                        thưởng quốc tế uy tín được tổ chức thường niên từ năm 2007 tại 16 quốc gia và thị trường trên
                        toàn châu Á nhằm tôn vinh các doanh nghiệp, doanh nhân có thành tích vượt trội, đóng góp bền
                        vững cho cộng đồng.</span>
                    <img src="{{ asset('assets/images/full-new.jpg') }}" alt="" class="fn-des__img">
                </div>
            </div>
            <div class="col-4 full-news__col2">
                <div class="other-news">
                    <h1 class="other-new__title">Tin tức khác</h1>
                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>

                    <a href="#" class="other-new">
                        <img src="{{ asset('assets/images/other-new.jpg') }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">11/10/2023</div>
                            <h1 class="other-new__text">KHÁCH HÀNG QUỐC TẾ ĐÁNH GIÁ CAO NHỰA DUY TÂN TẠI COSME TECH OSAKA 2023</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
