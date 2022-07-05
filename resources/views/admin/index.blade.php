@extends('layouts.admin');
@push('styles')
<link href="{{asset('css/admin/dashboard.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="grid">
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Users</span>
        <div  class="ps-at-1">{{ count($users)}}</div>
        </div>
    </div>
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Articles</span>
            <div  class="ps-at-1">{{ count($articles)}}</div>
        </div>
    </div>
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Services</span>
            <div class="ps-at-1">{{ count($services)}}</div>
        </div>
    </div>
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Projects</span>
            <div class="ps-at-1">{{ count($projects)}}</div>
        </div>
    </div>
</div>

@endsection