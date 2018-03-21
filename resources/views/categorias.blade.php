@extends('plantilla')

@section('contenido')

	<h1>Categorias</h1>

<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">

@foreach ($categorias as $cat)
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<a href="{{  url('categoria',$cat->id) }}">
									<div class="product-thumb">
										<div class="product-label">

										</div>
										<img src="img/cat/{{$cat->foto}}" alt="{{$cat->nombre}}" />

									</div>
								</a>
									<div class="product-body">
										<h2 class="product-name">
											<h2 class="product-name"><a href="{{  url('categoria',$cat->id) }}">
										{{ $cat->nombre }}</a></h2>
										<p>{{ $cat->desc }}</p>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
@endforeach

						</div>
					</div>


@endsection
