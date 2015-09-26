@section('Header')
  @include('shared.header',array('section' => 'login'))
@stop

@section('pageContent')
	{{$user->name}}
@stop