@extends('admin.layout.master')

@section('title', 'Update User')

@section('content')
    <form action="{{route('dashboard.users.update',$id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $user->name}}" class="form-control" id="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="email" placeholder="Enter Email">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="admin" {{$user->type == 'admin'  ? 'checked' : ''}}>Admin</option>
                <option value="Client" {{ $user->type == 'client'  ? 'checked' : ''}}>Client</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
