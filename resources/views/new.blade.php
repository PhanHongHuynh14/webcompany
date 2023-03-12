@extends('base')

@section('new')
<section class="about_section layout_padding">
  <div class="container">
    <div class="custom_heading-container">
      <h3>
        2BON VÀ TIN TỨC
      </h3>
    </div>

    <br>

    <div class="row ">
      <div class="col-sm-5 col-md-6 ">
        <div class="colnew_1">
          <div>
            <img src="images/new1.jpg" alt="" style="height: 390px">
          </div>
          <div style=" text-align: left;">
            <a href="new_1" class="col_a">Giá thép hôm nay 30/4: Trong nước đi ngang, sàn giao dịch sôi động</a>
            <br><small>30/4/2023</small>
            <p>Giá thép hôm nay giao kỳ hạn tháng 5/2023 trên sàn giao dịch Thượng Hải hôm nay tăng 65 nhân dân tệ, lên
              mức 3.737 nhân dân tệ/tấn. Giá thép đã tăng mấy phiên liên tiếp trên sàn giao dịch. Giá quặng sắt cũng
              tăng trở lại từ ngày 28/11[...]</p>
          </div>
        </div>
      </div>
      <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 ">
        <div class="colnew_2">

          {{-- tin 1 --}}
          <div class="container">
            <div class="row">
              <div class="col-4"> <img src="images/new2.png" alt="" style="height: 100px"></div>
              <div class="col-6 mai">
                <a href="new_2" class="col_a ">Tín hiệu tích cực cho ngành sắt thép năm 2023</a>
                <br> <small>05//03/2023</small>
              </div>
            </div>
          </div>
          <hr>

          {{-- tin 2 --}}
          <div class="container">
            <div class="row">
              <div class="col-4"> <img src="images/new3.jpg" alt="" style="height: 98px; width: 150px;"></div>
              <div class="col-6 mai">
                <a href="new_3" class="col_a ">Những cơ hội dành cho ngành cơ khí</a>
                <br> <small>07//03/2023</small>
              </div>
            </div>
          </div>
          <hr>

          {{-- tin 3 --}}
          <div class="container">
            <div class="row">
              <div class="col-4"> <img src="images/new4.jpg" alt="" style="height: 100px"></div>
              <div class="col-6 mai">
                <a href="new_4" class="col_a ">Doanh nghiệp thép đặt cược vào hàng tồn kho</a>
                <br> <small>05//04/2023</small>
              </div>
            </div>
          </div>
          <hr>

          {{-- tin 4 --}}
          <div class="container">
            <div class="row">
              <div class="col-4"> <img src="images/new5.jpg" alt="" style="height: 100px"></div>
              <div class="col-6 mai">
                <a href="new_5" class="col_a">Ngành thép đang đối diện với ba rủi ro lớn</a>
                <br> <small>15//03/2023</small>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

  <div class="container">

    {{-- tin 5 --}}
    <div class="container newbaer">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="images/new6.jpg" style="height: 200px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="newbear_col">
            <a class="col_a" href="new_6"><b>Lo ngại giá thép tăng cao</b> </a><br>
            <small>06/03/2023</small> <br>
            <p>Gần một tháng qua, các mặt hàng sắt, thép xây dựng trong nước liên tục tăng giá mạnh. Chỉ tính riêng từ
              đầu
              tháng 3 đến nay, giá thép đã được điều chỉnh tăng đến 3 đợt với tổng mức tăng từ 1,4 đến 1,6 triệu
              đồng/tấn[...]</p>
              <a type="button" class="btn btn-danger" href="new_6" >Xem thêm</a>

          </div>
        </div>
      </div>
    </div>

    {{-- tin 6 --}}
    <div class="container newbaer">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="images/new7.png" style="height: 211px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="newbear_col">
            <a class="col_a" href="new_7"><b>Dự báo giá thép tiếp tục neo cao theo giá nguyên liệu</b> </a><br>
            <small>07/03/2023</small> <br>
            <p>Nhiều chuyên gia dự báo, thời gian tới, cùng với giá nguyên liệu tăng, việc các dự án đầu tư công, bất
              động sản được đẩy tiến độ xây dựng, giá thép có thể tiếp tục neo cao. Theo thông tin từ Hiệp hội Thép Việt
              Nam (VSA), giá các nguyên, nhiên liệu sản xuấ[...]</p>
              <a type="button" class="btn btn-danger" href="new_7" >Xem thêm</a>
            </div>
        </div>
      </div>
    </div>

    {{-- tin 7 --}}
    <div class="container newbaer">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="images/new10.jpg" style="height: 209px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="newbear_col">
            <a class="col_a" href="new_7"><b>Vai trò của thép trong cuộc sống nhân loại</b> </a><br>
            <small>08/03/2023</small> <br>
            <p>Trong tất cả những vật liệu trên thế giới, không có gì đa dạng, cứng rắn và hữu ích bằng sắt thép. Hiện
              nay, có tất cả 3.500 loại thép, gồm thép các bon, thép mạ kẽm và thép không gỉ. Được dùng để chế tạo các
              công cụ, thiết bị, nhà cửa, cầu đường,[...]</p>
              <a type="button" class="btn btn-danger" href="new_7" >Xem thêm</a>

          </div>
        </div>
      </div>
    </div>

    {{-- tin 8 --}}
    <div class="container newbaer">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="images/new9.png" style="height: 205px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="newbear_col">
            <a class="col_a" href="new_8"><b>Sản xuất thép có giữ được đà tăng kỷ lục trong năm 2023?
              </b> </a><br>
            <small>09/03/2023</small> <br>
            <p>Các tổ chức đầu tư dự báo thị trường thép sẽ tiếp tục đà tăng ngay sau Tết Nguyên đán và có thể đạt tăng
              trưởng 20% trong năm 2022. Dữ liệu vừa được Hiệp hội Thép Việt Nam (VSA) công bố cho thấy trong khi tiêu
              thụ trong nước có chiều hướng ảm đạm trong cả[...]</p>
              <a type="button" class="btn btn-danger" href="new_8" >Xem thêm</a>

          </div>
        </div>
      </div>
    </div>

    {{-- tin 9 --}}
    <div class="container newbaer">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="images/new8.jpg" style="height: 175px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <div class="newbear_col">
            <a class="col_a" href="new_9"><b>Giá thép thế giới tiếp tục tăng
              </b> </a><br>
            <small>10/03/2023</small> <br>
            <p>Các nhà sản xuất thép châu Á trong những ngày qua liên tục thông báo tăng giá bán cho các lô hàng tháng 3
              và tháng 4 đồng thời cũng dự kiến sẽ còn tiếp tục tăng trong tháng 5/2023.[...]</p>
              <a type="button" class="btn btn-danger" href="new_9" >Xem thêm</a>
          
            </div>
        </div>
      </div>
    </div>


</section>
@endsection