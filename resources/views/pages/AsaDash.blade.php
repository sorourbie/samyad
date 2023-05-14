@extends('layouts.master')

@section('title')
    DashboardPage
@endsection

@section('content')

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div style="direction: rtl" class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('clist') }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">  لیست دروس </h5>
                        <p class="card-text">جهت مشاهده لیست دروس از طریق این لینک اقدام کنید</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('glist') }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">  اسامی و نمرات دانشجویان </h5>
                        <p class="card-text">اساتید محترم جهت نمره دهی به دانشجویان از طریق این لینک اقدام کنید</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<br><br>
<br><br>
@endsection
