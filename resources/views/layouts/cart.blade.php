@include('layouts.header')

<div class="pt-breadcrumb-p">
	<div class="container">
		<h3>Panier</h3>
		<p>PanierDescription</p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-8">
			@if ($message = Session::get('success'))
                <div class="p-4 mb-3 bg-green-400 rounded">
                    <p class="text-green-800">{{ $message }}</p>
                </div>
            @endif
			<div class="pt-cart-body">
				@foreach ($cartItems as $item)
					<div class="pt-cart-body">
						<div class="media">
							<div class="media-left"><div class="pt-thumb"><img src="#" alt="{{ $item->nom }}" onerror="this.src='{{ asset('img/noimage.jpg') }}'"></div></div>
							<div class="media-body">
								<div class="pt-dtable">
									<div class="pt-vmiddle">
										<div class="pt-title"><h3><a href="#">{{ $item->name }}</a></h3></div>
									
										<div class="d-none pt-deliveryprice">{{ $item->prix_livraison }}</div>
										<div class="pt-extra">
											<strong>Prix: <a class="checked">{{ $item->price }} F</a></strong>
										</div>


										<!--<div class="pt-extra">
											
											<?php
											/*
											if($cart['item_extra']):
											foreach($cart['item_extra'] as $k => $extra):
												$extra = db_unserialize([$rs['extra'], $extra]);
											?>
												<span>
													<?=$extra['name']?> <b class="pt-extraprice"><?=$extra['price']?></b>
													<i class="fas fa-times pt-removeexratoitem" data-price="<?=$extra['price']?>" data-id="<?=$k?>" data-iid="<?=$it_id?>" data-iiid="<?=$cart_id?>"></i>
												</span>
											<?php
											endforeach;
											endif;
											*/
											?>
											
										</div>-->
										<div class="pt-options">
											<form action="{{ route('cart.remove') }}" method="POST">
												@csrf
												<a class="pt-removefromcart"><i class="fas fa-trash"></i></a>
												<input type="hidden" value="{{ $item->id }}" name="id">
												<div class="pt-quantity">
												<i class="fas fa-minus pt-minus"></i>
												<input type="text" name="quantity" value="{{ $item->quantity }}" disabled>
												<i class="fas fa-plus pt-plus"></i>
											</div>
											</form>
											
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		<div class="col-4">
			<div class="pt-cart-body">
				<div id="checkout">
					<form id="payment-form" method="POST" action="stripe.php">
						<h2>Résumé de la commande</h2>
						<div class="fieldset mb-4">
							<p class="mt-2"><span>Sous-Total</span><b class="float-right pt-totalprice">{{ Cart::getTotal() }} F</b></p>
							<p><span>Prix Livraison</span><b class="float-right pt-deliverytotalprice">$0.00</b></p>
							<hr />
							<p><span>Total</span><b class="float-right pt-alltotalprice">$0.00</b></p>
						</div>

	          			<h2>Informations Livraison</h2>
						<div class="fieldset">
	            			<label class="label">
	              				<span>Nom</span>
	              				<input name="name" value="Nom_Utilisateur" class="field" required>
	            			</label>

							<label class="label">
								<span>email</span>
								<input name="email" value="utilisateur@gmail.com" type="email" class="field" placeholder="jenny@example.com" required>
							</label>

							<label class="label">
								<span>Contact</span>
								<input name="phone" value="+22870305566" type="text" class="field phone" placeholder="0000-000-000"required>
							</label>

							<label class="label">
								<span>Adresse</span>
								<input name="address" value="Adresse User" class="field" placeholder="Lomé, Baguida"required>
							</label>
						</div>
						<button class="payment-button" type="submit">Proceder au paiement</button>
      				</form>
    			</div>

			</div>
		</div>
	</div>
	
</div>

@include('layouts.footer')