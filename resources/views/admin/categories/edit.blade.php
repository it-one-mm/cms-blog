@extends('layouts.admin')

@section('title', 'All Categories')

@section('content')

    <h2>All Categories</h2>
    <hr>

    <div class="row">
        <div class="col-6">

            @include('messages.errors')

            <form action="{{ action('Admin\CategoriesController@update', $category->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Category Name..." value="{{ $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>

        </div>
        <div class="col-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <form action="{{ action('Admin\CategoriesController@destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@stop