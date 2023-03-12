@extends('base')

@section('service_1')

<div class="container">
    <div class="service_1 service">
        <h1>DỊCH VỤ GIA CÔNG</h1>
        <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-tabs nav-normal nav-left"
            role="tablist">
            <li class="contai">
                <a href="./service_1_vdc">Vấn đề chung</a>
            </li>
            <li class="contai">
                <a href="./service_1_gc">Cách gia công</a>
            </li>
        </ul>
        @yield('service_1_vdc')
        @yield('service_1_gc')
        <div class="home">
            <a  href="./service"> Trở về dịch vụ</a>
        </div>
    </div>
</div>
@endsection