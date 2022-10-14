@extends('layouts.app')

@section('title', 'SHOW PAGE')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="col-md-10">
                <a class="btn btn-outline-primary" href="{{ route('phones.index') }}">Main menu</a>
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="card-body">
                            <h5 class="card-title">Name: {{$phone->name }}</h5>
                            <p class="card-text">Model year: {{$phone->model_year }}</p>
                            <p class="card-text">Price: {{$phone->price }} $</p>
                            <p class="card-text">RAM: {{$phone->ram }} GB</p>
                            <p class="card-text">Memory: {{$phone->memory }} GB</p>
                            <p class="card-text">Camera: {{$phone->camera_mpx }} mpx</p>
                            <a class="btn btn-success" href="{{route('phones.edit', $phone->id)}}">Edit</a>
                        </div>
                        <form action="{{route('phones.destroy', $phone->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="flex-sm-row btn btn-danger mt-1" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
