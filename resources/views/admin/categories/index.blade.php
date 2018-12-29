@extends('layouts.app')

@section('content')

    <table class="table table-hover">
        <thead>
            <th>Category Name</th>   
            <th></th> 
            <th></th>
        </thead>    

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">Edit</a></td>

                    <td><a href="{{ route('category.destroy', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">Delete</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>    

@endsection
