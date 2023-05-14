@extends('layouts.master')

@section('title')
    FirstPage
@endsection

@section('content')
    <br>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('page1') }}">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">  ورود دانشجویان</h5>
                            <p class="card-text">دانشجویان گرامی جهت ورود به سامانه از طریق این لینک اقدام کنید</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('page2') }}">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">  ورود اساتید </h5>
                            <p class="card-text">اساتید محترم جهت ورود به سامانه از ظریق این لینک اقدام کنید</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

<br>
<br>
<br>
<br>
<br>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
@endsection
