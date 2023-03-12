@extends('base')

@section('service_3')

<div class="container">
    <div class="service_1 service">
        <h1>QUẢN TRỊ TỒN KHO TỐI ƯU</h1>
        <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-tabs nav-normal nav-left"
            role="tablist">
            <li class="contai">
                <a href="./service_3_qt">Quy trình thực hiện </a>
            </li>
            <li class="contai">
                <a href="./service_3_gt">Năng lực quản trị </a>
            </li>
        </ul>
        @yield('service_3_qt')
        @yield('service_3_gt')
        <div class="home">
            <a  href="./service"> Trở về dịch vụ</a>
        </div>
    </div>
</div>
@endsection