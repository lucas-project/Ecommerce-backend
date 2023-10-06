<!-- resources/views/products/edit.blade.php -->


@extends('layouts.navigation')

@if (Auth::check())
    @auth
        <li class="nav-item d-flex align-items-center">
            <span class="navbar-text mr-3">Welcome, {{ Auth::user()->name }}</span>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    @endauth
@else
    Welcome, Guest!
@endif

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $product->code }}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $product->size }}">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" class="form-control" value="{{ $product->color }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@endsection
