@extends('layouts.master')

@section('title')
    FirstPage
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
    <form action="/dan/login" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1> فرم ورود</h1>
        <div class="container">
            <label for="national" style="text-align: right">کد ملی</label>
            <input style="text-align: right" type="text" id="national" name="national" placeholder="کد ملی خود را وارد کنید">

            <label for="student" style="text-align: right">شماره دانشجویی</label>
            <input style="text-align: right" type="text" id="student" name="student" placeholder="شماره دانشجویی خود را وارد کنید">
<br><br>
            <input type="submit" value="ورود">
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
