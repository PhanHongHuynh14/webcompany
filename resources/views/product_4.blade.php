@extends('base')
@section('product_4')
<section class="about_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h3>
                Thép tròn chế tạo
            </h3>

        </div>
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 light">
                        <img src="images/4.jpg" style="width:600px">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 light">
                        <small>
                            <a class="product" href="index">Trang chủ</a> / <a class="product" href="product">Sản
                                phẩm</a>
                        </small>

                        <h3>Thép tròn chế tạo</h3>

                        <p>Thép tròn chế tạo: Là thép cán nóng dạng thanh hoặc cuộn hình tròn, chuyên dùng cho các ngành
                            cơ khí chế
                            tạo. Thép tròn chế tạo hợp kim bao gồm thép Carbon chất lượng cao, thép tròn hợp kim, thép
                            vòng bi, thép
                            hợp kim thấp – cường độ cao, thép bánh răng, thép lò xo…
                        </p>
                        <b>Mác thép chính 2Bon đang kinh doanh: </b>

                        <p>S45C, 40Cr (40X); 40CrMo (40XM); 20Cr2Ni4… </p>

                        <b>Tiêu chuẩn:</b>
                        <p>S45C: JIS G 4051; 40Cr: GB 3077-1999 </p>

                        <b>Quy cách:</b>
                        <p> F10 – F500</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="product_col_1">
            <div class="row align-items-start">
                <div class="col">
                    <a class="product_1" href="product_4_ud"> Ứng dụng sản phẩm</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_4_tc">Tiêu chuẩn thông dụng</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_4_da">Dự án tiêu biểu</a>
                </div>
            </div>
            @yield('product_4_ud')
            @yield('product_4_tc')
            @yield('product_4_da')
        </div>
</section>
@endsection