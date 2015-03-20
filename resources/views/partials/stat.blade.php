<div class="row well">
    <div class="col-xs-12">
        <h2>
            <small>{{trans('blog.percentagePost')}} max: {{$stat['post']['max']}},
                nombre: {{$stat['post']['num']}}</small>
        </h2>
        <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$stat['post']['percentage']}}%">
                {{$stat['post']['percentage']}}%
            </div>
        </div>
        <h2>
            <small>{{trans('blog.percentageArchive')}}  max: {{$stat['archive']['max']}},
                nombre: {{$stat['archive']['num']}}</small>
        </h2>
        <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$stat['archive']['percentage']}}%">
                {{$stat['archive']['percentage']}}%
            </div>
        </div>
        <h2>
            <small> {{trans('blog.percentageComment')}}  nombre: {{$stat['comment']['num']}}</small>
        </h2>
        <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20"
                 aria-valuemin="0" aria-valuemax="100" style="width: {{$stat['comment']['percentage']}}%">
                {{$stat['comment']['percentage']}}%
            </div>
        </div>
        <h2>
            <small>{{trans('blog.percentageThumbnail')}} max: {{$stat['thumbnail']['max']}},
                nombre: {{$stat['thumbnail']['num']}}</small>
        </h2>
        <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                 aria-valuenow="{{$stat['thumbnail']['percentage']}}" aria-valuemin="0" aria-valuemax="100"
                 style="width:{{$stat['thumbnail']['percentage']}}%">
                {{$stat['thumbnail']['percentage']}}%
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>