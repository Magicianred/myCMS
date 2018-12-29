@extends('layouts.app')

@section('content')

    <h2 class="text-center">
        Create a new category
    </h2>

    @include('admin.includes.errors')


    <form method="POST" action="{{ route('category.store')}}" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Store</button>
        </div>
    </form>
@endsection
