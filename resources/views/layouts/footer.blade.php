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


<form id="sendsignin">
	<div class="modal fade newmodal" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">{{ $login_title }}</h4>
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body">
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-user"></i></span>
						<input type="text" name="sign_name" placeholder="{{ $login_username }}">
					</div>
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-key"></i></span>
						<input type="password" name="sign_pass" placeholder="{{ $login_password }}">
					</div>
					<div class="row">
						<div class="col">
							<div class="form-group">
								<input type="checkbox" name="sign_type" id="ck1" value="1" class="choice">
								<label for="ck1">{{ __('Remember me') }}</label>
							</div>
						</div>
					</div>
					<div class="pt-msg"></div>
					<button type="submit">{{ $login_btn }}</button>

					<?php //if(site_register): ?>
						<p>{{ $login_footer }} <b><a data-toggle="modal" href="#registerModal">{{ $login_footer_l }}</a></b></p>
					<?php //endif; ?>
				</div>

			</div>
		</div>
	</div>
</form>

<?php //if(site_register): ?>

<form method="POST" action="{{ route('register') }}">
	@csrf
	<div class="modal fade newmodal" id="registerModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">{{ $signup_title }}</h4>
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>
				<div class="modal-body">
					<!--Nom-->
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-user"></i></span>
						<input id="name" type="text" name="name" :value="old('name')" placeholder="{{ $signup_username }}" autofocus required>
					</div>

					<!--Email-->
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-envelope"></i></span>
						<input type="email" id="email" name="email" :value="old('email')" placeholder="{{ $signup_email }}" required>
					</div>

					<!--Password-->
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-key"></i></span>
						<input id="password" type="password" name="password" placeholder="{{ $signup_password }}" required>
					</div>

					<!--Confirm Password-->
					<div class="form-group pt-form-icon">
						<span><i class="icons icon-lock-open"></i></span>
						<input id="password_confirmation" type="password" name="password_confirmation" placeholder="{{ $signup_rpassword }}" required>
					</div>
					<div class="pt-msg"></div>
					<button type="submit">S'enregistrer</button>
					<p>Avez-vous un compte ? <b><a data-toggle="modal" href="#registerModal" data-dismiss="modal">Connectez-vous !</a></b></p>
				</div>
			</div>
		</div>
	</div>
</form>
<?php //else: ?>
	<form id="sendpassword">
		<div class="modal fade newmodal" id="passwordModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">{{ $header_change_password }}</h4>
						<button type="button" class="close" data-dismiss="modal">×</button>
					</div>
					<div class="modal-body">
						<div class="form-row">
							<div class="col">
								<div class="form-group pt-form-icon">
									<span><i class="icons icon-key"></i></span>
									<input type="password" name="oldpass" placeholder=" {{ $header_change_pass_i1 }}">
								</div>
							</div>
							<div class="col">
								<div class="form-group pt-form-icon">
									<span><i class="icons icon-key"></i></span>
									<input type="password" name="newpass" placeholder="{{ $header_change_pass_i2 }}">
								</div>
							</div>
						</div>
						<div class="pt-msg"></div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="pt-btn">{{ $header_change_pass_bt }}</button>
					</div>
				</div>
			</div>
		</div>
	</form>

<?php //endif; ?>

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
