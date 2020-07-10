@extends('layouts.app')
@section('content')
    <form action="/products/{{$product->id}}" method="POST">
        @method('patch')<!--attention-->
        <div class="row">
            <div class="offset-1 col-11">
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="offset-1 col-11">
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="offset-1 col-11">
                <input type="text" class="form-control" name="model" value="{{$product->model}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="offset-1 col-11">
                <input type="text" class="form-control" name="color" value=" {{$product->color}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="offset-1 col-11">
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">categories</label>
                            <select  id="category" name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>{{$product->category}}</option>
                                <option value="pc">pc</option>
                                <option value="tablet">tablet</option>
                                <option value="smartphone">smartphone</option>
                            </select>
                    </div>
                </div>
            </div>
        </div>
        

        <br>
        <div class="row">
            <div class="offset-5 col">
                <button type="submit" class="btn btn-warning">update</button>
            </div>
        </div>
        @csrf
    </form>
@endsection