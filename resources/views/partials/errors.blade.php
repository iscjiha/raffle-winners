@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Corrija los siguientes errores:</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>{!! $error !!}</li>
			@endforeach
		</ul>
	</div>
@endif