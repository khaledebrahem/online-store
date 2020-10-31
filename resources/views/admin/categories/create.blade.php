@extends('admin.layout.master')

@section('title', 'Create User')

@section('content')



    <form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="" class="form-control" id="name" placeholder="Enter Name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>




        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            @error('image')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
