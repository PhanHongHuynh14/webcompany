
@extends('base')

@section('service')
  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h3 class=" ">
          DỊCH VỤ CỦA 2BON
        </h3>
      </div>
      <p class="">
Để mang lại hiệu quả cho khách hàng công ty đã cho ra những dịch vụ cần thiết khi khách hàng mong muốn      </p>
      <div class="service_container ">
        <div class="row">
          <div class="col-md-4">
            <div class="box b-1">
              <div class="img-box">
                <img src="images/giacong.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Dịch vụ gia công
                </h6>
                <div class="btn-box">
                  <a href="./service_1_vdc">
                    Xem thêm
                  </a>
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box b-2">
              <div class="img-box">
                <img src="images/logis.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Logistics
                </h6>
                <div class="btn-box">
                  <a href="./service_2_tq">
                    Xem thêm
                  </a>
                  <hr>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box b-4">
              <div class="img-box">
                <img src="images/tonkho.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Quản trị tồn kho tối ưu
                </h6>
                <div class="btn-box">
                  <a href="./service_3_qt">
                    Xem thêm
                  </a>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->
@endsection