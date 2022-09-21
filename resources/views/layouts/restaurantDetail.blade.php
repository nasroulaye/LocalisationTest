@include('layouts.header')
<style>.pt-restaurantspage .pt-restaurant-head:before {background-image: url({{ asset('img/cover.jpg') }})}</style>
<div class="container">
	<div class="pt-restaurant-head">
		<div class="pt-dtable">
			<div class="pt-vmiddle">
				<div class="pt-profile">
					<div class="pt-thumb">
						<img src="#" alt="{{ $restaurant->nom }}" onerror="this.src='{{ asset('img/noimage.jpg') }}'">
					</div>
					<div class="pt-name"><h1>{{ $restaurant->nom }}</h1></div>
					<div class="pt-address"><i class="fas fa-map-marker-alt"></i>{{ $restaurant->adresse }}</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-8">
			<div class="pt-restaurant-body">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Menu</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu1">Avis</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu2">Album</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active container" id="home">
						@if($restaurant->categories->count() > 0)
								<?php $i = 0; ?>
							@foreach($restaurant->categories as $categories)
								<?php $i++; ?>
									<div class="pt-resaurant<?=($i==1?' open':'')?>">
										<h3 class="pt-title<?=($i==1?' active':'')?>">
											{{ $categories->nom }} ({{ $categories->items->count() }})
											<i class="fas fa-<?=($i==1?'minus':'plus')?>-circle"></i>
										</h3>
										@foreach($categories->items as $item)
											<div class="pt-resaurant">
												<div class="media">
													<div class="media-left">
														<div class="pt-thumb"><img src="#" alt="{{ $item->nom }}" onerror="this.src='{{ asset('img/noimage.jpg') }}'"></div>
													</div>
													<div class="media-body">
														<div class="pt-dtable">
															<div class="pt-vmiddle">
																<h3>{{ $item->nom }}</h3>
																<p><span><i class="fas fa-utensils"></i> Ingrediant</span></p>
																<div class="pt-options">
																	<div class="pt-addtocart" data-id="{{ $item->id }}">
																		<a data-toggle="modal" href="#AddtocartModal{{ $item->id }}" class="pt-addtobasket tips"><i class="fas fa-shopping-basket"></i><b>Ajouter au panier</b></a>
																		<a data-toggle="modal" href="#addtocartModal{{ $item->id }}" class="pt-price">{{ $item->prix }} cfa</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											@include('layouts.addItemToCart')
										@endforeach
									</div>
							@endforeach
						@else
							<div class="text-center">Aucune donnée !</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="col-4">
			<div class="pt-restaurant-sidebar">
				<div class="pt-search">
					<div class="pt-input">
						<input type="text" name="search" placeholder="Rechercher">
						<i class="icons icon-magnifier"></i>
						<div class="sresults"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.footer')