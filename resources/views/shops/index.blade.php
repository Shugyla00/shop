@extends('layouts.app')

@section('title', 'MAIN  PAGE')

@section('content')
    <div class="container">
        <a class="btn btn-outline-primary" href="{{ route('shops.create') }}">Create</a>
        <div class="row">
            @foreach($shop as $shop)
                <div class="card mt-3 col-lg-3 m-lg-3">
                    <div class="card-header">
                        <div class="card-body">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title">{{ $shop->name }}</h5>
                            <p class="card-text">{{ $shop->price }} $</p>
                            <a href="{{ route('shops.show', $shop->id) }}" class="flex-sm-row btn btn-primary">Choose</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
