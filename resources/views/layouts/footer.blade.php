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
					<h3>Liens Utiles</h3>
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

@include('layouts.scripts')

</body>
</html>
