@extends('layouts.app')
@section('title')
    add
@endsection
@section('content')
    
    <div class="row">
        <div class="offset-5 col-6">
            <h1>add product</h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-3 col-6">
            @include('form')
        </div>
    </div>

    

@endsection