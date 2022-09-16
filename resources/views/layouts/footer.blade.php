<div class="pt-footer">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="pt-logo">
					<a href="#"><i class="fas fa-hamburger"></i> DonExpress</a>
				</div>
				
			</div>
			<div class="col-6">
				<div class="pt-links">
					<h3>{{ $home_links }}</h3>
          			<a href="titres Des liens à remplacer"><i class="fas fa-long-arrow-alt-right"></i> titres Des liens à remplacer </a>
				</div>
			</div>
			<div class="col-3">
				<div class="pt-copy">
					<h3>&nbsp;</h3>
					<div class="pt-lang">
						<a href="#" rel="en"><i class="flag-icon flag-icon-squared flag-icon-us"></i></a>
						<a href="#" rel="fr"><i class="flag-icon flag-icon-squared flag-icon-fr"></i></a>
						<a href="#" rel="es"><i class="flag-icon flag-icon-squared flag-icon-es"></i></a>
						<a href="#" rel="tr"><i class="flag-icon flag-icon-squared flag-icon-tr"></i></a>
						<a href="#" rel="ar"><i class="flag-icon flag-icon-squared flag-icon-sa"></i></a>
					</div>
					Copyright &copy; 2022 <a href="#">DonExpress</a>. All Rights Reserved.<br>
					Programming and design with <i class="fas fa-heart text-danger"></i> by <a href="#" target="_blanc">Acist</a>.
				</div>
			</div>
		</div>
	</div>

</div><!-- End footer -->

</div><!-- End wrapper -->
</div><!-- End Scroller -->

<form  method="POST" action="{{ route('logout') }}" id="sendsignin">
	@csrf
	<div class="modal fade newmodal" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Se Déconnecter</h4>
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body">
					<x-dropdown-link :href="route('logout')"
						onclick="event.preventDefault();
						this.closest('form').submit();">
						{{ __('Déconnexion') }}
					</x-dropdown-link>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="senditemtocart">
<div class="modal fade newmodal" id="addtocartModal">
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
							<input type="text" name="item_quantity" value="1" disabled>
							<i class="fas fa-plus pt-plus"></i>
						</div>

						<span class="pt-ingredient"><i class="fas fa-utensils"></i> <b>Ingredient:</b> ExempleIngrediants</span>
						<textarea name="item_note" placeholder="Your extra note"></textarea>
					</div>
				</div>

				<div class="pt-price-det">
					<div class="pt-price pt-totalprice">{{ $item->prix }}</div>
					<button type="button" class="pt-btn pt-buytocart" data-buy="false">Ajouter au panier</button>
					<button type="submit" class="pt-buy" data-buy="true">Commander</button>
				</div>

				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#homes">Extra</a></li>
					<li class="nav-item"><a class="nav-link<?=(!$item_rs['extra']?' active':'')?>" data-toggle="tab" href="#menus1">Description</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menus2">Reviews</a></li>
				</ul>

				<!-- Tab panes -->
				<input type="hidden" name="item_id" value="{{ $item->id }}">
				<input type="hidden" name="item_price" value="{{ $item->prix }}">
				<input type="hidden" name="item_quantities" value="1">
				<input type="hidden" name="item_delivery_price" value="{{ $item->livrason }}">

			</div>
		</div>
	</div>
</div>
</form>
@include('layouts.scripts')

</body>
</html>
