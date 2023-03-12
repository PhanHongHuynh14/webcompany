@extends('base')

@section('home')
    {{-- section --}}
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider_item-box layout_padding2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <div>
                                            <img src="images/bia.jpg" alt="" class="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <div>
                                            <h1>
                                                THÉP <br>
                                                <span>
                                                    Và đời sống
                                                </span>
                                            </h1>
                                            <p>
                                                Thép hiện diện trong mọi đời sống của chúng ta. Thép là vật liệu không thể
                                                thiếu trong xây dựng,
                                                thiếu thép là thiếu đi sự bền bỉ, kiên cố.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end secction --}}

    {{-- about sesion --}}
    <section class="about_section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h3 class=" ">
                    VỀ CÔNG TY CỦA CHÚNG TÔI
                </h3>
            </div>
            <p class="layout_padding2-top">
                Công ty được thành lấp từ năm ... , với sự cố gắng hết mình thì công ty đạt được rất nhiều thành tựu vào
                những năm qua. Kết nối nhiều công ty và doanh nghiệp cơ khí Việt Nam
            </p>
            <div class="img-box layout_padding2">
                <img src="images/about.jpg" style="width: 80%">
            </div>
            <p class="layout_padding2-bottom">
                Là đại lý phân phối thép xây dựng cấp 1 của nhà máy thép Hòa Phát, Việt Đức, Việt Ý, Việt Úc, Việt Nhật,
                Pomina, VAS, Tungho, Thép Miền Nam, thép Việt Mỹ, Việt Sing, Thái Nguyên và nhiều nhà máy liên doanh khác.
                Với phương châm Uy tín- Chất lượng- Hiệu quả, Công ty CP Thép và Thương mại Hà Nội luôn mang tới Khách hàng
                dịch vụ hoàn hảo, sản phẩm chất lượng và đảm bảo chữ tín trong kinh doanh.
            </p>
        </div>

    </section>
    {{-- end about sesion --}}

    {{-- service section --}}

    <section class="service_section layout_padding-bottom">
        <div class="container">
            <div class="custom_heading-container">
                <h3 class=" ">
                    VỀ SẢN PHẨM CÔNG TY CỦA CHÚNG TÔI
                </h3>
            </div>
            <p class="">
                Công ty CP Thép Hà Nội là đại lý sắt thép giá rẻ số 1 tại Hà Nội. Chúng tôi là đại lý cấp 1 của hầu hết các
                nhà máy thép tại Việt Nam. </p>
            <div class="service_container ">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box b-1">
                            <div class="img-box">
                                <img src="images/1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Thép hợp kim
                                </h6>
                                <p>
                                    được nấu pha trộn với các nguyên tố hoá học khác...</p>
                                <div class="btn-box">
                                    <a href="">
                                        Đọc thêm
                                    </a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box b-2">
                            <div class="img-box">
                                <img src="images/2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Thép chống trượt
                                </h6>
                                <p>
                                    là loại thép với đặc điểm có các đường gân...</p>
                                <div class="btn-box">
                                    <a href="">
                                        Đọc thêm
                                    </a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box b-3">
                            <div class="img-box">
                                <img src="images/3.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Thép góc </h6>
                                <p>
                                    là một trong những nguyên vật ...</p>
                                <div class="btn-box">
                                    <a href="">
                                        Đọc thêm
                                    </a>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box b-4">
                            <div class="img-box">
                                <img src="images/4.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <h6>
                                    Thép tròn chế tạo </h6>
                                <p>
                                    chịu tải trọng như đinh ốc, bulong, trục, bánh răng;...</p>
                                <div class="btn-box">
                                    <a href="">
                                        Đọc thêm
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
    {{-- end service section --}}


    <!-- work section -->
    <section class="work_section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h3 class=" ">
                    HOW IT WORKS
                </h3>
            </div>
        </div>
        <div class="work_container ">
            <div class="box b-1">
                <div class="img-box">
                    <img src="images/w-1.png" alt="">
                </div>
                <div class="name">
                    <h6>
                        ...
                    </h6>
                </div>
            </div>
            <div class="box b-2">
                <div class="img-box ">
                    <img src="images/w-2.png" alt="">
                </div>
                <div class="name">
                    <h6>
                        ... </h6>
                </div>
            </div>
            <div class="box b-3">
                <div class="img-box ">
                    <img src="images/w-3.png" alt="">
                </div>
                <div class="name">
                    <h6>
                        ... </h6>
                </div>
            </div>
            <div class="box b-4">
                <div class="img-box ">
                    <img src="images/w-4.png" alt="">
                </div>
                <div class="name">
                    <h6>
                        ... </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- end work section -->

    <!-- contact section -->


        <section class="contact_section layout_padding">
            <div class="custom_heading-container">
                <h3 class=" ">
                    Đặt hàng Online
                </h3>
            </div>
            <div class="container layout_padding2-top">
                <div class="row">
                    <div class="col-md-6 mx-auto">

                        @if (empty($contacts))
                            <form class="container" method="post" action="{{ route('contact.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                        @endif
                    </div>
                    <div class="container">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control mb-2 @error('name') is-invalid @enderror"
                            id="name" placeholder="" value="{{ old('name', $contact->name ?? '') }}"
                            @isset($isShow) disabled @endisset>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="container">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control mb-2 @error('email') is-invalid @enderror"
                            id="email" placeholder="" value="{{ old('email', $contact->email ?? '') }}"
                            @isset($isShow) disabled
                    @endisset>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="container-fluid">
                        <label>Option</label>
                        <select name="option" id="option" class="form-select @error('option') is-invalid @enderror"
                            @isset($isShow) disabled @endisset>
                            @if (empty($options))
                                <option value="" selected disabled hidden> Select a option </option>
                            @endif
                            @foreach ($options as $option)
                                <option value="{{ $option->name }}">
                                    {{ $option->name }} </option>
                            @endforeach
                        </select>
                        @error('option')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="container">
                        <label for="number" class="form-label">Number</label>
                        <input name="number" type="text" class="form-control mb-2 @error('number') is-invalid @enderror"
                            id="number" placeholder="" value="{{ old('number', $contact->number ?? '') }}"
                            @isset($isShow)
                    disabled @endisset>
                        @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="container">
                        <label for="note" class="form-label">Note</label>
                        <input name="note" type="text" class="form-control mb-2 @error('note') is-invalid @enderror"
                            id="note" placeholder="" value="{{ old('note', $contact->note ?? '') }}">
                        @error('note')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    @empty($isShow)
                        <div class="row mt-3">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    HOÀN THÀNH
                                </button>
                            </div>
                        </div>
                    @endempty
                    </form>
                </div>
            </div>
            </div>
        </section>
    <!-- end contact section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="custom_heading-container">
                <h3 class=" ">
                    phản hồi của khách hàng </h3>
            </div>
            <div class="layout_padding2-top">
                <div class="client_container">
                    <div class="detail-box">
                        <p>
                            Mình đã tin dùng 2Bon từ tháng 9/2020 và gắn bó với 2Bon đến giờ cũng là cái duyên với 2Bon.
                            Năm 2020, mình được biết đến 2Bon trong một lần đi du lịch với bạn bè và được giới thiệu cho thử
                            tin dùng sắt thép của 2Bon.
                            Mình thấy giá cả hợp lý và cả cách tiếp cận khách hàng của 2Bon rất tốt với khách hàng. Sau khi
                            tin và sử dụng sản phẩm bên 2Bon
                            mình cảm thấy rất oke. Từ đó đến bây giờ mình luôn tin dùng sản phẩm của 2Bon và luôn giới thiệu
                            cho bạn bè khi cần. Sản phẩm tốt đánh giá 5 sao.


                        </p>
                    </div>
                    <div class="client_id">
                        <div class="img-box">
                            <img src="images/khachhang.jpg">
                        </div>
                        <div class="name">
                            <h5>
                                Trịnh Ngọc Phương </h5>
                            <h6>
                                Khách hàng
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
