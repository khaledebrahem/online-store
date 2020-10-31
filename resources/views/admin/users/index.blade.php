@extends('admin.layout.master')
@section('title', 'Users')

@section('content')


<a href="{{route('dashboard.users.create')}}" class="btn btn-success">Create New</a>
<table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Type</th>
        <th scope="col">Ops</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->type}}</td>
            <td>
                <a href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('dashboard.users.destroy',$user->id)}}" class="btn btn-danger deleteBtn">Delete</a>
            </td>
        </tr>
    @endforeach

    </tbody>
  </table>

@endsection

