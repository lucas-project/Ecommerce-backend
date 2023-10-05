<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" id="code" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" name="size" id="size" class="form-control">
        </div>
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
@endsection
