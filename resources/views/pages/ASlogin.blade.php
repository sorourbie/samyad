@extends('layouts.master')

@section('title')
    FirstPage
@endsection

@section('content')

    <br>
    <br>
    <br>
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
                padding: 10px 20px;
                border-radius: 5px;
                border:none;
                cursor:pointer;
                margin-top:-10%;
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
    <form action="/dan/login2" method="POST">
                {{csrf_field()}}

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <h1>ورود اساتید</h1>
        <br><br>
        <div class="container">
            <label for="national">کد ملی</label>
            <input style="text-align: right" type="text" id="national" name="national" placeholder="کد ملی خود را وارد کنید">
            <br><br>
{{--            <label for="student_id">Student ID:</label>--}}
{{--            <input type="text" id="student_id" name="student_id" placeholder="Enter your student ID">--}}

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
    <br>
@endsection
