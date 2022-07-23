test

@foreach($values as $value)
{{$value->id}}
<p>
    {{$value->text}}
<p>
    @endforeach