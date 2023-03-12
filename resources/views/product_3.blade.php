@extends('base')
@section('product_3')
<section class="about_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h3>
                Thép góc
            </h3>

        </div>
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 light">
                        <img src="images/3.jpg" style="width:600px">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 light">
                        <small>
                            <a class="product" href="index">Trang chủ</a> / <a class="product" href="product">Sản
                                phẩm</a>
                        </small>

                        <h3>Thép góc</h3>

                        <p>Thép hình – góc là thép thanh cán nóng từ thép hợp kim hoặc không hợp kim ở các dạng góc, khuôn và hình.
                        </p>
                        <b>Mác thép thông dụng 2Bon đang kinh doanh:</b>
                        <p>CT34~CT51, Q235, Q345, SS400, SS490</p>
                        <b>Tiêu chuẩn:</b>
                        <p>JISG-3101, JISG3192, TCVN 7571-I: 2006, TCVN 5709-93, TCVB1656-93, GB/T706-88, GB/T707-88</p>
                        <b>Quy cách:</b>
                        <p>Thép V từ V40-V120, U từ U80-U200, I, H từ I100-I400. Mỗi cây có độ dài thông dụng là 6000/ 12000 (mm)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="product_col_1">
            <div class="row align-items-start">
                <div class="col">
                    <a class="product_1" href="product_3_ud"> Ứng dụng sản phẩm</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_3_tc">Tiêu chuẩn thông dụng</a>
                </div>
                <div class="col">
                    <a class="product_1" href="product_3_da">Dự án tiêu biểu</a>
                </div>
            </div>
            @yield('product_3_ud')
            @yield('product_3_tc')
            @yield('product_3_da')
        </div>
</section>
@endsection