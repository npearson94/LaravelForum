@section('content')

<div class="page-header">
    <h1>{{ $dashboardGreeting }} <small>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</small></h1>
</div>

@stop