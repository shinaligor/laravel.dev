@extends ('template.template')

@section('content')

    @if(isset($errors))

        @foreach($errors as $error)

            <strong>{{ $error[0] }}</strong>

        @endforeach

    @else

        <h2>Ошибок нет</h2>

    @endif

  <br />  <a href = "{{ URL::previous() }}">&larrb; Вернуться</a>

@stop