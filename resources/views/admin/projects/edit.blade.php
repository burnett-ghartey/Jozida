@extends('layouts.admin')



@section('content')
@component('admin.includes.title')
    Edit Project
@endcomponent

<div class="form-wrapper">
    <form method="POST" action="/admin/projects/{{$project->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="file">Project image</label>
                    <div>
                        <img src="{{ asset('images/projects/'.$project->photo->filename)}}" id="profile-img-tag" width="276px">
                    </div>
                    <input  type="file" name="file" id="profile-img">
                </div>

            </div>
            <div class="col-sm-4">

                <div class="form-group">
                    <label for="headline">Category</label>
                    <input type="text" value="{{$project->category}}" class="form-control" name="category" id="title" placeholder="Enter category">
                </div>

                {{-- <div class="form-group">
                    <label for="Status">Status</label>
                    <select class="form-control" name="status" id="" class="form-group">
                        <option value="published">Published</option>
                        <option selected value="draft">Draft</option>
                    </select>

                </div> --}}

                
                {{-- <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class ="form-control" id="editor1"  name="description">
                
                      </textarea>
                </div> --}}


                <button type="submit" class="btn btn-primary">Update project</button>

                @component('admin.includes.formErrors')

                @endcomponent

            </div>
        </div>
    </form>
</div>
<script>
    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#profile-img-tag').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#profile-img').change(function(){
        readURL(this);
    });
</script>
@endsection



