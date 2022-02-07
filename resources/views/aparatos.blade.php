<h1>{{$cadena}}</h1>
@if(! empty($aparatos))
<ul>
    @foreach($aparatos as $aparato)
        <li>{{$aparato}}</li>
    @endforeach
</ul>
@else
    <p>No hay elementos en la lista</p>
@endif