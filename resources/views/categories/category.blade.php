@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12 mx-auto">
        @if(session('response'))
          <div class="alert alert-success">{{session('response')}}</div>
        @endif
      </div>
        <div class="col-md-4 mx-auto">
      <div class="card">
        <div class="card-header" style="width: auto; margin: auto auto;">
        <h2>CREATE CATEGORY</h2>
        </div>
        @if(count($errors)) > 0)
          @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
          @endforeach
        @endif
          <div class="card card-body">
              {!! Form::open(['url' => 'addCategory']) !!}
                @csrf
               <div class="form-group">
                  <label for="category">Category Name</label>
                  <input id="category" type="category" class="form-control" name="category" value="{{old('category')}}" placeholder= "Enter Category Name " required autofocus>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                  <button type="reset" class="btn btn-danger btn-sm btn-block">Cancel</button>
                </div>
            {!! Form::close() !!}
          </div>
        </div>
</div>

</div>
@endsection
