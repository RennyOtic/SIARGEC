@extends('layouts.backend')

@section('content')
<div class="peer bd bgc-white peer-greed p-30">
	<h3 class="block">Cheque n° {{ $cheque->num }}</h3>
</div>
<br>
<div class="row">
	<div class="col-md-5 bd bgc-white peer-greed p-40" style="font-size: 1.5em">
		<p>Beneficiado: <b>{{ $cheque->beneficiary }}</b></p>
		<p>Banco: <b>{{ $cheque->bank->name }}</b></p>
		<p>Fecha: <b>{{ $cheque->dated_at }}</b></p>
		<p>Estado: <b>{{ ($cheque->state) ? 'Físico' : 'Digital' }}</b></p>
		@if($cheque->state)
		<p>Estante: <b>{{ $cheque->folder->box->shelf->name }}</b></p>
		<p>Caja: <b>{{ $cheque->folder->box->name }}</b></p>
		<p>Carpeta: <b>{{ $cheque->folder->name }}</b></p>
		@endif
		<p>Monto: <b>{{ $cheque->total }} Bs.</b></p>
		<p>Registrado: <b>{{ $cheque->created_at->diffForHumans() }}</b></p>
	</div>
	<div class="col-md-7 bd bgc-white peer-greed p-40">
		@foreach($cheque->image as $image)
		<a href="{{ asset("storage/images/$image->name") }}" class="fresco"
			data-fresco-group='overflow-example'
			data-fresco-group-options="overflow: true, thumbnails: 'vertical', onClick: 'close'"
			>
			<img src="{{ asset("storage/images/$image->name") }}" alt="image" class="img-responsive img-circle img-thumbnail" style="max-height: 200px;margin: 1vw">
		</a>
		@endforeach
	</div>
</div>
@endsection
