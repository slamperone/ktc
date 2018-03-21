@extends('plantilla')

@section('contenido')

	<h1>Categoria
		@isset($id)
			@foreach ($categorias as $categoria)
				@if($categoria->id == $id)
						{{ $categoria->nombre}}
				@endif
			@endforeach
		@endisset



	</h1>

<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">

@foreach ($productos as $prod)

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{ url('categoria',$prod->id) }}">
									<div class="product-thumb">
										<div class="product-label">

										</div>
										<img src="{{ url(substr(json_decode($prod->fotos)->foto0,7))}}" alt="{{$prod->nombre}}" />
									</div>
									</a>
									<div class="product-body">
										<h2 class="product-name">
											<h2 class="product-name">
												<a href="{{ url('categoria',$prod->id) }}">
										<span class="product-old-price">Nombre: </span>{{ $prod->nombre }}</a></h2>
										<span class="product-old-price">SKU: </span><h5>{{ $prod->sku }}</h5>
										<p><span class="product-old-price">Descripción: </span><br />
											{{str_limit($prod->desc, 75).' ...' }}</p>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
@endforeach

						</div>
					</div>


@endsection