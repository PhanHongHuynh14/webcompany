@extends('base')
@section('product_1')
<section class="about_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h3>
                Thép hợp kim
            </h3>

        </div>
        <div class="container overflow-hidden">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 light">
                        <img src="images/1.jpg" style="width:600px">
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 light">
                        <small>
                            <a class="product" href="index">Trang chủ</a> / <a class="product" href="product">Sản
                                phẩm</a>
                        </small>

                        <h3>Thép hợp kim</h3>

                        <p>Thép hợp kim là loại thép chứa trong nó một lượng thành phần các nguyên tố hợp kim thích hợp.
                            Các nguyên
                            tố
                            đặc biệt được gọi là nguyên tố hợp kim: Cr, Ni, Mn, Si, W, V, Co, Mo, Ti, Cu. Nhờ đó mà thép
                            hợp kim nói
                            chung có những ưu điểm vượt trội so với thép cacbon như:
                        <ul>
                            <li>- Về cơ tính: thép hợp kim nói chung có độ bền có độ bền cao hơn hẳn so với thép cacbon.
                                Điều này thể
                                hiện đặc biệt rõ ràng sau khi nhiệt luyện tôi và ram.</li>
                            <li>- Về tính chịu nhiệt độ cao: thép hợp kim giữ được cơ tính cao của trạng thái tôi ở
                                nhiệt độ cao hơn
                                2000C. Muốn đạt được điều này thì thép phải được hợp kim hóa bởi một số nguyên tố với
                                hàm lượng tương
                                đối
                                cao.</li>
                            <li> - Các tính chất vật lý và hóa học đặc biệt như từ tính, tính giãn nở nhiệt, tính chống
                                ăn mòn…</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
<div class="product_col_1">
        <div class="row align-items-start">
            <div class="col">
                <a class="product_1" href="product_1_ud"> Ứng dụng sản phẩm</a>
            </div>
            <div class="col">
                <a class="product_1" href="product_1_tc">Tiêu chuẩn thông dụng</a>
            </div>
            <div class="col">
                <a class="product_1" href="product_1_da">Dự án tiêu biểu</a>
            </div>
        </div>
        @yield('product_1_ud')
        @yield('product_1_tc')
        @yield('product_1_da')
    </div>
</section>
@endsection