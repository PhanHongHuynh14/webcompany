@extends('base')

@section('service_1')

<div class="container">
    <div class="service_1 service">
        <h1>LOGISTICS</h1>
        <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-tabs nav-normal nav-left"
            role="tablist">
            <li class="contai">
                <a href="./service_2_tq">Thông quan</a>
            </li>
            <li class="contai">
                <a href="./service_2_gn">Giao nhận hàng hóa</a>
            </li>
        </ul>
        @yield('service_2_tq')
        @yield('service_2_gn')
        <div class="home">
            <a  href="./service"> Trở về dịch vụ</a>
        </div>
    </div>
</div>
@endsection