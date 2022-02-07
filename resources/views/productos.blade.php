@extends('principal')
@section('contentProducto')
<h1>{{$cadena}}</h1>
@if(!empty($productos))
    @foreach($productos as $producto=>$imagen)
    <div class="col-lg-4">
        <img src="{{asset('img/'.$imagen)}}" class="bd-placeholder-img rounded-circle" width="140" height="140"/>
        <h2>{{$producto}}</h2>
        <p>Compra uno de nuestros productos con 20% de descuento</p>
        <p><a class="btn btn-secondary" href="#">Más Detalles</a></p>
    </div>
    @endforeach
@else
    <p>No hay elementos en la lista</p>
@endif
@endsection