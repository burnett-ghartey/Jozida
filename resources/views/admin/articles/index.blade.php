@extends('layouts.admin')

@section('content')
 @component('admin.includes.title')
  All Articles
 @endcomponent


<form action="/articles/actions" method="POST">
  
    @csrf
  
   
    <div class="form-group row">
     <div class="col-md-3">
        <select name="bulk_options" class="form-control">
            <option value="published">Published</option>
            <option value="draft">Draft</option>
            <option value="delete">Delete</option>
        </select>
      </div>


        <div class="col-md-4">
            <input type="submit" class="btn btn-success" value="apply" name="submit" id="">
        <a class="btn btn-primary" href="{{ url('/admin/articles/create')}}">Add New</a>
        </div>
    </div>


  



<table id="news" class="table table-striped admin_users_table">
    <thead>
        <tr>
            <th><input id="selectAllBoxes" type="checkbox"></th>
            <th>Id</th>
            <th>Photo</th>
            <th>Headline</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($articles)
            @foreach($articles as $article)
             <tr>
                <td><input class="checkboxes" type="checkbox" name="checkBoxArray[]" value="{{ $article->id}}"></td>
             <td>{{ $article->id }}</td>
             <td><img style="width:60px" src="{{ url('images/articles/'.$article->photo->filename)}}"></td>
             <td>{{ $article->headline}}</td>
             <td>{{ Str::limit(strip_tags($article->description), 50) }}
            </p></td>
             <td>{{ $article->status }}</td>
             <td>{{ $article->created_at->diffForHumans() }}</td>
             <td>{{ $article->updated_at->diffForHumans() }}</td> 
             <td>
                 <a href="{{ url('/admin/articles/'. $article->id.'/edit')}}"><button type="button" class="btn btn-primary">Edit</button></a> | 
                 <a href="{{ route('article.destroy', ['id' => $article->id]) }}"><button type="button" class="btn btn-danger">Delete</button></a> 
                
   
             </tr>
            @endforeach
        @endif
        
    </tbody>
    
</table>
</form>
@if($articles->isEmpty())

<div class="row-fluid">

    <div class="span12 text-center">

    No article added

    </div>

</div>
@endif
{{ $articles->links('pagination::bootstrap-4')}}

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