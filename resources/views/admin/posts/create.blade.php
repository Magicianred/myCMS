@extends('layouts.app')

@section('content')

    <h2 class="text-center">
        Create a new post
    </h2>

    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form method="POST" action="{{ route('post.store')}}" class="mt-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" >
        </div>

        <div class="form-group">
            <label for="featured_image">Featured Image</label>
            <input type="file" class="form-control" name="featured_image" id="featured_image" >
        </div>
        
        <div class="form-group">
          <label for="content">Post Body</label>
          <textarea class="form-control" name="content" id="content" rows="5"></textarea>
        </div>

        <div class="form-group">

                <button type="submit" class="btn btn-success">Submit</button>
            
        </div>
    </form>
@endsection
