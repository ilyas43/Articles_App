@extends('layouts.app')
@section('title')
    products
    
@endsection
@section('content')

    <div class="row">
        <div class="offset-5 col-6">
            <button class="btn btn-warning"><a href="products/create">add product</a></button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="offset-3 col-9">
            <h1>here is the list of your products </h1>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <table class="table table-dark table-striped">
                <tr>
                    <td><center>pc</center> </td><td><center>tablets</center></td><td><center>smartphone</center></td>
                </tr>
                <tr>
                    <td> @foreach ($pcs as $pc) <center> <a href="products/{{$pc->id}}">{{$pc->name}}</a> - {{$pc->model}}</center>@endforeach</td>
                    <td> @foreach ($tablets as $tablet)<center> <a href="products/{{$tablet->id}}">{{$tablet->name}}</a> - {{$tablet->model}}</center>@endforeach</td>
                    <td> @foreach ($smartphones as $smartphone)<center> <a href="products/{{$smartphone->id}}">{{$smartphone->name}}</a> - {{$smartphone->model}}</center>@endforeach</td>                                        
                </tr>
            </table>
        </div>
    </div>
   
    
@endsection