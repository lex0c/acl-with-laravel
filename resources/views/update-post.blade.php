@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

           <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                <div class="panel-body">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="http://lorempixel.com/64/64/" alt="img">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{$post->title}}</h4>
                            <p>{{$post->content}}</p>
                            <p><small>Created by: {{$post->user->name}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
