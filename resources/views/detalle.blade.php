@extends('plantilla')

@section('contenido')
	<h1>Detalle de producto raza</h1>
	<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							@foreach(json_decode($producto[0]->fotos) as $foto)
							<div class="product-view">
							<img src="{{ url(substr($foto,7)) }}" alt="">
							</div>
							@endforeach
						</div>
						<div id="product-view">
							@foreach(json_decode($producto[0]->fotos) as $foto)
							<div class="product-view">
							<img src="{{ url(substr($foto,7)) }}" alt="">
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
							</div>
							<h2 class="product-name">{{$producto[0]->nombre}}</h2>
							<p><strong>SKU:</strong> {{$producto[0]->sku}}</p>
							<p><strong>Marca:</strong> {{$producto[0]->marca}}</p>
							<p><strong>Categoria:</strong> {{$producto[0]->categoria}}</p>
							<p><a  href="{{ URL::to('/ficha/'. $producto[0]->fichaTecnica)  }}"  download="ficha-tecnica-{{$producto[0]->nombre}}.pdf">
								<button class="main-btn icon-btn"><i class="fa fa-file-pdf-o"></i>
							catálogo</button>
							</a></p>
							<p>{{$producto[0]->desc }}</p>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
@stop
