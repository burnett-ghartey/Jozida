@extends('layouts.admin')
@push('styles')
<link href="{{ asset('css/admin/articles.css') }}" rel="stylesheet">

@endpush
@section('content')


<div class="inject-section">
    @component('admin.includes.title')
     Create news article
    @endcomponent

    <div class="form-wrapper">
        <form method="POST" action="/admin/articles/{{$article->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="file">Article image</label>
                        <div>
                            <img src="{{ asset('images/articles/'.$article->photo->filename)}}" id="profile-img-tag" width="276px">
                        </div>
                        <input type="file" name="file" id="profile-img">
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="form-group">
                        <label for="headline">Headline </label>
                        <input type="text" value="{{$article->headline}}" class="form-control" name="headline" id="headline" placeholder="Enter headline">
                    </div>

                    <div class="form-group">
                        <label for="Status">Status</label>
                        <select class="form-control" name="status" id="" class="form-group">
                            @if($article->status == "published")
                            <option selected value="{{$article->status}}">{{ $article->status}}</option>
                            <option  value="draft">Draft</option>
                            @else
                            <option selected value="{{$article->status}}">{{ $article->status}}</option>
                                <option  value="published">Published</option>

                            @endif
                          
                        </select>
    
                    </div>

                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="editor1"  name="description">
                    {{ $article->description}}
                          </textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Update article</button>

                    @component('admin.includes.formErrors')

                    @endcomponent

                </div>
            </div>
        </form>
    </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.18.0/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'editor1' );
</script>
  
@if(Session::has('flash_guest'))
<div class="flash_message">
    {{ Session('flash_guest')}}
</div>
@endif
@endsection
