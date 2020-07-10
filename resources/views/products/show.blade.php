@extends('layouts.app')
@section('title')
    show
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <button  type="button" class="btn btn-warning"><a href="/products"> <-back</a></button>
    </div>
</div>

<h2>details for {{$product->name}}</h2>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <tr><td> NAME </td><td> PRICE</td><td>MODEL </td><td>COLOR</td><td>CATEGORY</td></tr>
                <tr><td>{{$product->name}} </td><td> {{$product->price}} TND</td><td> {{$product->model}}</td><td>{{$product->color}}</td><td>{{$product->category}}</td></tr>        
            </table>
        </div>
    </div>
    <div class="row">
        <div class=" offset-5 col-3">
            <button  type="button" class="btn btn-warning"><a href="/products/{{$product->id}}/edit">edit {{$product->name}} {{$product->model}}  </a></button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class=" offset-5 col-3">
            <form action="/products/{{$product->id}}" method="POST">
                @method('delete')
                @csrf    
                <button  type="submit" class="btn btn-danger">delete {{$product->name}} {{$product->model}}</button>            
            </form>
            
            
        </div>
    </div>
@endsection