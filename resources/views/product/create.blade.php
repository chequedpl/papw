@extends('layouts.app')

@section('content')

<form method="POST" role="form" action="{{ url('product')}}" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
				Nombre <input type="text" name="Nombre"  class="in">	<br>
				Descripcion	<input type="text" name="Descripcion"  class="in">	<br>
				Precio	<input type="text" name="Precio"  class="in"> <br>
				Foto	<input type="text" name="Foto1" class="in"> <br>
				<input type="submit" name="submit" class="in" id="btn" onclick="">

			</form>

@endsection
		