@extends('app')

@section('content')
    <div class="jumbotron">
        <h1>Bienvenue sur le site des etudiants</h1>
        <p>blabl</p>
    </div>
    @if(isset($students))
        @foreach($students as $stud)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$stud->name.' '.$stud->firstname}}</h3>
                </div>
                <div class="panel-body">
                    <p>Formation: {{$stud->role}}</p>
                    <p>Biographie : {{$stud->bio}}</p>
                </div>
            </div>
        @endforeach
    @endif
@stop
@section('footer')
    @parent
    mentions légales
@stop