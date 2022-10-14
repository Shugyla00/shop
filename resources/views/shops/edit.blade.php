@extends('layouts.app')

@section('title', 'EDIT PAGE')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{ route('shops.index') }}">Main menu</a>

                <form action="{{ route('shops.update', $shop->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="titleInput">Name</label>
                        <input type="text" value="{{$shop->name}}" class="form-control" id="nameInput" name="name" placeholder="Enter name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="contentGroup">Price</label>
                        <input type="number" value="{{$shop->price}}" class="form-control" id="priceInput" name="price" placeholder="Enter price">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="contentGroup">Size</label>
                        <input type="number" value="{{$shop->size}}" class="form-control" id="sizeInput" name="size" placeholder="Enter size">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="fabricaGroup">Fabrica</label>
                        <select class="form-control" name="fabrica_id">
                            @foreach($shop as $mct)
                                <option @if($mct->id == $shop->fabrica_id) selected @endif value="{{$mct->id}}">{{ $mct->country }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-outline-success" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
