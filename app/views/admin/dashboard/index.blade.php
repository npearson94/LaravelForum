@section('content')

<div class="page-header">
    <h1>Hey! <small>{{ Auth::user()->email }}</small></h1>
</div>

@stop