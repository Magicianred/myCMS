@extends('layouts.app')

@section('content')

    <h2 class="text-center">
        Create a new category
    </h2>

    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


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
