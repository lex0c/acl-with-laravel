@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

           <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Dashboard - 
                        <a href="#" class="btn btn-default" role="button">Novo Post</a>
                    </h1>
                </div>
                
                <div class="panel-body">
                    @forelse($posts as $post)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="http://lorempixel.com/64/64/" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$post->title}}</h4>
                                <p>{{$post->content}}</p>
                                <p><small><b>Created by:</b> {{$post->user->name}}</small> <small><b>at</b> {{$post->created_at}}</small></p>
                                <a class="btn btn-warning" href="#" role="button">Visualizar</a>
                                @can('who-see', $post)
                                    <a class="btn btn-primary" href="{{url("post/$post->id/update")}}" role="button">Editar</a>
                                    <a class="btn btn-success" href="#" role="button">Publicar</a>
                                    <a class="btn btn-danger" href="#" role="button">Deletar</a>
                                @endcan
                            </div>
                        </div>
                        <hr>
                    @empty
                        <p>Empty..</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
