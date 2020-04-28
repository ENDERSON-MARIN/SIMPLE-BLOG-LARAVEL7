@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ALLS POSTS</div>

                <div class="card-body">
                    @if(count($posts) > 0)
                            @foreach($posts->all() as $post)
                            <h4>{{$post->post_title}}</h4>
                            <img src="{{$post->post_image}}">
                            <p>{{$post->post_body}}</p>
                            @endforeach
                    @else
                        <p>No Post Available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


        

    


