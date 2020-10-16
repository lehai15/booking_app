@extends('layouts.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
<div class="search-bg homepage" style="background-image: url({{asset('images/bookingcare-cover.jpg')}})">
    <div class="search">
        <div class="container">
            <h1>Nền tảng y tế <br><b>chăm sóc sức khỏe</b><br><b>toàn diện</b></h1>
            <div id="search_form" class="search-form">
                <div class="search-input">
                    <img src="{{asset('images/search.svg')}}">
                    <input type="search" id="search_all" placeholder="Tìm kiếm">
                </div>
            </div>
        </div>
    </div>
    <div class="options">
        <ul>
            <li>
                <a href="#">
                    <div style="background-image:url({{asset('images/kham_chuyenkhoa.png')}})"></div>
                    Khám <br>Chuyên khoa
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="background-image: url({{asset('images/kham_tuxa.png')}})"></div>
                    Khám <br>từ xa
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="background-image: url({{asset('images/kham_tongquat.png')}})"></div>
                    Khám <br>tổng quát
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="background-image: url({{asset('images/dichvu_xetnghiem.png')}})"></div>
                    Xét nghiệm <br>y học
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="background-image: url({{asset('images/suckhoe_tinhthan.png')}})"></div>
                    Sức khỏe <br>tinh thần
                </a>
            </li>
            <li>
                <a href="#">
                    <div style="background-image: url({{asset('images/kham_nhakhoa.png')}})"></div>
                    Khám <br>nha khoa
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="appointment-bg py-5">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="appointment-form">
                    <div class="appoinment-title">
                        <span>REQUEST FOR YOUR</span>
                        <h2>Consultation</h2>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Name">
                        <input type="tel" placeholder="Phone">
                        <input type="email" placeholder="Email">
                        <div class="datepicker">
                            <input type="date" placeholder="Date">
                        </div>
                        <button type="submit" class="appoinment-btn">Book appoitment</button>
                    </form>
                </div>
            </div>
            <div class="col-8"></div>
        </div>
    </div>
</div>
@endsection
