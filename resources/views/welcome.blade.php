@extends('layout')

@section('title','Home')

@section('content')
    <h1>Ini Home</h1>
    <h2>data</h2>
    <ul>
        @foreach($data as $data)
        <li>{{ $data }}</li>
        @endforeach
    </ul>
@endsection