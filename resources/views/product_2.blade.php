@extends('base')
@section('product_2')
<section class="about_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h3>
                Thép chống trượt
            </h3>

        </div>
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 light">
                        <img src="images/2.jpg" style="width:600px">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 light">
                        <small>
                            <a class="product" href="index">Trang chủ</a> / <a class="product" href="product">Sản
                                phẩm</a>
                        </small>

                        <h3>Thép chống trượt</h3>

                        <p>Thép tấm nhám (hay còn gọi là thép tấm chống trượt) là thép tấm cán nóng có những đường gân
                            nổi lên trên
                            bề mặt của tấm thép, mặt còn lại là một tấm phẳng. Các đường gân làm cho bề mặt hơi nâng
                            lên, làm giảm
                            nguy cơ trơn, trượt .
                        </p>
                        <b>Mác thép chính 2Bon đang kinh doanh: </b>

                        <p>Thép tấm nhám thường (tấm cường độ thấp): SS400/Q235/ A36</p>

                        <b>Tiêu chuẩn:</b>
                        <p>JIS G 3101-2010/ GB-T 1591-2008/ ASTM A36M </p>

                        <b>Quy cách:</b>
                        <p> 3 -12 (mm) x 1250/1500 (mm) x 6000/ 12000/ khẩu độ khách hàng yêu cầu (mm) </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="product_col_1">
            <div class="row align-items-start">
                <div class="col">
                    <a class="product_1" href="product_2_ud"> Ứng dụng sản phẩm</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_2_tc">Tiêu chuẩn thông dụng</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_2_da">Dự án tiêu biểu</a>
                </div>
            </div>
            @yield('product_2_ud')
            @yield('product_2_tc')
            @yield('product_2_da')
        </div>
</section>
@endsection