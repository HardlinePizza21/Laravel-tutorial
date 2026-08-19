@extends('layouts.app')
@section('title', $data["title"])
@section('subtitle', $data["subtitle"])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">{{ $data["desc"] }}</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">Developed by: {{ $data["author"] }}</p>
            </div>
        </div>
    </div>
@endsection
