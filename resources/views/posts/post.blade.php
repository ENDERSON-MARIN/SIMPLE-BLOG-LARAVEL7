@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12 mx-auto">
        @if(session('response'))
          <div class="alert alert-success">{{session('response')}}</div>
        @endif
      </div>
        <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header" style="width: auto; margin: auto auto;">
        <h2>CREATE POST</h2>
        </div>
        @if(count($errors)) > 0)
          @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif
          <div class="card card-body">
              <form action="/addPost" method="post" enctype="multipart/form-data">
                @csrf
               <div class="form-group">
                  <label for="post_title">Post Title</label>
                  <input id="post_title" type="post_title" class="form-control" name="post_title" value="{{old('post_title')}}" placeholder= "Enter Post Title " required autofocus>
                </div>
                <div class="form-group">
                  <label for="post_body">Post Body</label>
                  <textarea id="post_body" rows="4" class="form-control" name="post_body" value="{{old('post_body')}}" placeholder= "Enter Post Body " required ></textarea>
                </div>
                <div class="form-group">
                  <label for="category_id">Category</label>
                  <select id="category_id"  class="form-control" name="category_id" value="{{old('category_id')}}" required>
                        <option value="">Select</option>
                        @if(count($categories) > 0)
                            @foreach($categories->all() as $categories)
                            <option value="{{ $categories->id }}" >{{$categories->category}}</option>
                            @endforeach
                        @endif
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Post Image</label>
                  <input id="post_image" type="file" class="form-control" name="post_image" value="{{old('post_image')}}" placeholder= "select your Post image ">
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block">Publish Post</button>
                </div>
            </form>
          </div>
        </div>
</div>

</div>
@endsection
