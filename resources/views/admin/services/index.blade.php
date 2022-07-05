@extends('layouts.admin')

@section('content')
@component('admin.includes.title')
    All Services
@endcomponent



<form action="/services/actions" method="POST">
  
    @csrf
  
   
    <div class="form-group row">
     <div class="col-md-3">
        <select name="bulk_options" class="form-control">
            <option value="delete">Delete</option>
        </select>
      </div>


        <div class="col-md-4">
            <input type="submit" class="btn btn-success" value="apply" name="submit" id="">
        <a class="btn btn-primary" href="{{ url('/admin/services/create')}}">Add New</a>
        </div>
    </div>




<table id="news" class="table table-striped admin_users_table">
    <thead>
        <tr>
            <th><input id="selectAllBoxes" type="checkbox"></th>
            <th>Id</th>
            <th>Photo</th>
            <th>title</th>
            <th>Description</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($services)
            @foreach($services as $service)
             <tr>
                <td><input class="checkboxes" type="checkbox" name="checkBoxArray[]" value="{{ $service->id}}"></td>
             <td>{{ $service->id }}</td>
             <td><img style="width:60px" src="{{ url('images/services/'.$service->photo->filename)}}"></td>
             <td>{{ $service->title}}</td>
             <td>{{ Str::limit($service->description, 50) }}
            </p></td>
            
             <td>{{ $service->created_at->diffForHumans() }}</td>
             <td>{{ $service->updated_at->diffForHumans() }}</td> 
             <td>
                 <a href="{{ url('/admin/services/'. $service->id.'/edit')}}"><button type="button" class="btn btn-primary">Edit</button></a> | 
                 <a href="{{ route('service.destroy', ['id' => $service->id]) }}"><button type="button" class="btn btn-danger">Delete</button></a> 
             </tr>
            @endforeach
        @endif


      
   


    
        
    </tbody>
    
</table>
</form>
@if($services->isEmpty())

<div class="row-fluid">

    <div class="span12 text-center">

    No service added

    </div>

</div>
@endif
{{ $services->links('pagination::bootstrap-4')}}

@if(Session::has('flash_admin'))
<div class="flash_message">
    {{ Session('flash_admin')}}
</div>
@endif
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>


   <script>
       $(document).ready(function(){
        
           $('#selectAllBoxes').click(function(){
           if(this.checked){
               $('.checkBoxes').each(function(){
                   this.checked = true;
               })
           }else{
                $('.checkBoxes').each(function(){
                   this.checked = false;
           })
       }
           }
       )}
       )
       
   </script>