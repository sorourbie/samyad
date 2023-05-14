@extends('layouts.master')

@section('title')
    FirstPage
@endsection

@section('content')

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div style="direction: rtl" class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif
    <br>
    <head>
        <title>Table with CSS</title>
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
                color: #333;
                font-family: Arial, sans-serif;
                font-size: 14px;
                text-align: center;
                background-color: #F5DEB3; /* رنگ طوسی */
            }
            th {
                background-color: #8B0000; /* رنگ قرمز */
                color: white;
                padding: 10px;
            }
            td {
                padding: 10px;
            }
            tr:nth-child(even) {
                background-color: #FFE4C4; /* رنگ نارنجی */
            }
        </style>
    <br>
    <table border="6" bgcolor="#b22222" class="table table-striped ">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>

        </tr>
        </thead>
        <tbody>


        </tr>
        @if(count($users))
            @foreach($users as $user)
                <tr>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>

                </tr>
            @endforeach
        @endif

        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
@endsection
