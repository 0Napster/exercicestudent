@extends('layouts.master')

@section('content')
    @if(!empty($post))
        <h2>{{$post->title}}</h2>
        @if(isset($post->link_thumbnail))
            <div class="thumbnail">
                <img src="{{url('assets/images/'.$post->link_thumbnail)}}" alt="">
            </div>
        @endif
        <p>{{$post->content}}</p>

        @if($post->user)
            <p>auteur: <a href="{{url('user/'.$post->user->id)}}">{{$post->user->username}}</a></p>
        @endif
        @if(count($comments)>0)
            <h2>comentaire(s)</h2>
            <ul>
                @foreach($comments as $comment)
                    <li>{{$comment->username}} <br> {{$comment->message}}
                        <small>{{$comment->created_at->format('d-m-Y')}}</small>
                    </li>
                @endforeach
            </ul>
        @else
            <p>aucun commentaire</p>
        @endif

        {!! Form::open(['route'=>'comment']) !!}
        {!!Form::hidden('post_id', $post->id)!!}
        @include('partials.comment')
        {!! Form::close() !!}
    @else
        <p>Désolé pas de contenu</p>
    @endif
@stop
@section('footer')
    @parent
    mentions légales
@stop