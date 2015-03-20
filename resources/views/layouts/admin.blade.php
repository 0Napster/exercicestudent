@include('partials.header_admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            @include('partials.sidebar_admin')
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="box-alert"></div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">{{trans('blog.dashboard')}}</h1>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>


