@extends('layouts.master')

@section('title')
    FirstPage
@endsection

@section('content')

    <h1>دروس من</h1>
    <ul>
        @foreach ($courses as $course)
            <li>{{ $course->name }}</li>
        @endforeach
    </ul>
@endsection

