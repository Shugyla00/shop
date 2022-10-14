@extends('layouts.app')

@section('title', 'CREATE PAGE')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{ route('shops.index') }}">Main menu</a>
                <form action="{{ route('shops.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="titleInput">Name</label>
                        <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="contentGroup">Price</label>
                        <input type="number" class="form-control" id="priceInput" name="price" placeholder="Enter price">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="contentGroup">Size</label>
                        <input type="number" class="form-control" id="sizeInput" name="size" placeholder="Enter size">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="categoryGroup">Fabrica</label>
                        <select class="form-control" name="fabrica_id" id="fabricaGroup">
                            @foreach($fabrica as $fabrica)
                                <option value="{{$fabrica->id}}">{{ $fabrica->country }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-outline-success" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
