<form action="{{ route('cart.store') }}" method="POST" id="senditemtocart" enctype="multipart/form-data">
	@csrf
	<div class="modal fade newmodal" id="addtocartModal{{ $item->id }}">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<div class="modal-body">
					<div class="media">
						<div class="media-left">
							<div class="pt-thumb"><img src="#" alt="{{ $item->nom }}" onerror="this.src='{{ asset('img/noimage.jpg') }}'"></div>
						</div>
						<div class="media-body">
							<h3>{{ $item->nom }}</h3>
							<div class="pt-quantity">
								<i class="fas fa-minus pt-minus"></i>
								<input type="text" name="quantity" value="1" disabled>
								<i class="fas fa-plus pt-plus"></i>
							</div>

							<span class="pt-ingredient"><i class="fas fa-utensils"></i> Ingredient:</b> ExempleIngrediants</span>
							<textarea name="item_note" placeholder="Ajouter des details"></textarea>
						</div>
					</div>

					<div class="pt-price-det">
						<input type="hidden" name="id" value="{{ $item->id }}">
						<input type="hidden" name="name" value="{{ $item->nom }}">
						<input type="hidden" name="price" value="{{ $item->prix }}">
						<input type="hidden" value="1" name="quantity">
						<input type="hidden" name="item_delivery_price" value="500">

						<div class="pt-price pt-totalprice">{{ $item->prix }}F</div>
						<button class="pt-btn" data-buy="false">Ajouter au panier</button>
					</div>

					<ul class="nav nav-tabs">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#homes">Description</a></li>
					</ul>

					<!-- Tab panes -->

					<div class="tab-content">
						<div class="tab-pane active container" id="menus1">
							<div class="pt-desc">{{ $item->details }}</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</form>