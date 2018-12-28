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
                    <th>{{ $category->name }}</th>
                    <th><a href="#">Edit</a></th>
                    <th><a href="#">Delete</a></th>
                </tr>
                
            @endforeach
        </tbody>
    </table>    

@endsection
