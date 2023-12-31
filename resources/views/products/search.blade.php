
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
    <h1>Search Results</h1>

    <form action="{{ route('products.search') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Products" name="keyword" value="{{ $keyword }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    @if($products->isEmpty())
        <p>No matching products found for "{{ $keyword }}".</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->color }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

