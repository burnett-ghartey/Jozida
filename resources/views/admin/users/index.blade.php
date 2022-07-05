@extends('layouts.admin')



@section('content')
@component('admin.includes.title')
    Administrators / Guests
@endcomponent



    <table class="table table-striped admin_users_table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                 <tr>
                 <td>{{ $user->id }}</td>
                 <td><a href="{{ url('/admin/users/'. $user->id. '/edit')}}">{{ $user->name }}</a></td>
                 <td>{{ $user->email }}</td>
                 <td>{{ $user->role->name }}</td>
                 <td>{{ $user->created_at->diffForHumans() }}</td>
                 <td>{{ $user->updated_at->diffForHumans() }}</td>
                 <td>
                    <a href="{{ url('/admin/users/'. $user->id.'/edit')}}"><button type="button" class="btn btn-primary">Edit</button></a> | 
                    <a href="{{ route('user.destroy', ['id' => $user->id]) }}"><button type="button" class="btn btn-danger">Delete</button></a> 
                </tr>
                 </tr>
                @endforeach
            @endif

        </tbody>
    </table>

    @if(Session::has('flash_admin'))
    <div class="flash_message">
        {{ Session('flash_admin')}}
    </div>
@endif
@endsection