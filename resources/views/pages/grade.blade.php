@extends('layouts.master')

@section('title')
    GradePage
@endsection

@section('content')

    <br><br>
    <br>
    <br>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Form</title>
        <style type="text/css">
            body {
                background-color: snow;
                font-family: Arial, sans-serif;
                color: #fff;
            }
            form {
                background-color: #444;
                padding: 40px;
                border-radius: 5px;
                width: 300px;
                margin: 0 auto;
            }
            label {
                display: block;
                margin-bottom: 10px;
            }
            input[type="text"], input[type="password"] {
                padding: 10px;
                border-radius: 5px;
                border: none;
                width: 100%;
                margin-bottom: 20px;
            }
            input[type="submit"] {
                background-color: #101214;
                color: #fff;
                padding: 10px 15px;
                border-radius: 10px;
                border:none;
                cursor:pointer;
                margin-top:-15%;
                margin-left:-1%;
                font-size :18px;
                font-weight:bold
            }
            h1{
                text-align:center;
                font-size :30px;
                margin-top:-5%
            }
            .container{
                display:flex;
                flex-direction :column
            }
        </style>
    </head>
    <body style="text-align: right">
    @if($errors->all())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/update/{{$user->student_id}}"  method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        @method('put')
        @csrf
        @method('put')
        <h1> فرم نمره دهی اساتید</h1>
        <div class="container">
            <label for="ID" style="text-align: right">آیدی دانشجو</label>
            <input style="text-align: right" type="text" id="ID" name="ID" placeholder="آیدی دانشجو را وارد کنید"  value="{{$user->student_id}}">
            <label for="grade" style="text-align: right">نمره دانشجو</label>
            <input style="text-align: right" type="text" id="grade" name="grade" placeholder="نمره دانشجو را وارد کنید"  value="{{$user->grade}}">
            <br><br>
            <input type="submit" value="تایید">
        </div>
    </form>
    </body>
    </html>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
