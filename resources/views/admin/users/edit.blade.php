
@extends('layouts.admin')

@section('content')

<div class="col-sm-6">
@component('admin.includes.title')
Edit Administrators / Guests
@endcomponent

@if(!empty($user))
<form method="POST" action="/admin/users/{{ $user->id}}">
@csrf
@method('PATCH')

<div class="form-group">
    <label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" value="{{ $user->name}}">
</div>

<div class="form-group">
    <label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
</div>
<div class="form-group">
    <label for="name">Password</label>
    <input type="password" class="form-control" name="password" id="password">
</div>
<div class="form-group">
    <label for="role">Role</label>
    <select class="form-control" name="role_id">
        <option disabled selected>Select a role</option>
        @foreach($roles as $role)
    <option value="{{$role->id}}" {{ $user->role_id == $role->id ? 'selected': ''}}>{{$role->name}}</option>
        @endforeach
    </select>
</div>


@component('admin.includes.formErrors')

@endcomponent
<button type="submit" class="btn btn-primary">Update User</button>
    </form>
    @else
    <div>Sorry, no user found.</div>

@endif
</div>
@endsection