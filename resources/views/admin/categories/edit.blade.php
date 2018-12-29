@extends('layouts.app')

@section('content')

    <h2 class="text-center">
        Update category: {{ $category->name }}
    </h2>

    @include('admin.includes.errors')


    <form method="POST" action="{{ route('category.update', ['id' => $category->id])}}" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" >
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update Category</button>
        </div>
    </form>
@endsection
