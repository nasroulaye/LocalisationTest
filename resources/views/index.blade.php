<x-app-layout>
	<div class="pt-header-content">
		<div class="container">
			<div class="pt-body">
				<h1>DonExpress <br> rapide & éfficace !</h1>
				<p>
					DonExpress vous permet de vous faire livrer vos repas de restaurants et de petites courses partout à Lomé !
				</p>
				<a href="restaurants"> COMMANDER MAINTENANT<i class="fas fa-long-arrow-alt-right"></i></a>
				
				<div class="pt-info">
					<div>
						<span><i class="icons icon-clock"></i></span>
						<h3>Aujourd'hui 08h - 19h</h3>
						<p>Horaires</p>
					</div>
					<div>
						<span><i class="icons icon-phone"></i></span>
						<h3>+228 70 30 55 66</h3>
						<p>Nous appeler</p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="pt-thumb">
			<span class="pt-bg"></span>
			<img src="{{ asset('img/burger.png') }}" onerror="this.src='{{ asset('img/nophoto.jpg') }}'" />
		</div>
	</div><!-- End header Content -->

	<div class="pt-section pt-best">
		<div class="container">
			<div class="pt-section-title">
				<h3>Restaurants les restaurants les plus proches</h3>
				<p>Découvrez les restaurants plus proches de vous</p>
			</div>

			
		</div>
	</div>

	<div class="pt-section">
		<div class="container">
			<div class="pt-section-title">
				<h3>Comment passer une commande ?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt</p>
			</div>

			<div class="row">
				<div class="col-4">
					<div class="pt-how">
						<span><i class="fas fa-pizza-slice"></i></span>
						<h3>Pick Meals</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt</p>
					</div>
				</div>
				<div class="col-4">
					<div class="pt-how">
						<span><i class="far fa-credit-card"></i></span>
						<h3>Choisir un paiement</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt</p>
					</div>
				</div>
				<div class="col-4">
					<div class="pt-how">
						<span><i class="far fa-paper-plane"></i></span>
						<h3>Livraison Express</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, [br]sed do eiusmod tempor incididunt</p>
					</div>
				</div>
			</div>

		</div>
	</div><!-- End section -->

	<div class="pt-section">
		<div class="container">
			<div class="pt-section-title">
				<h3>Avez-vous des questions ? Nous pourrons vous aider</h3>
			</div>
			<div class="pt-subscribe">
				<form id="sendsubscribe">
					<div class="pt-input">
						<input type="text" name="email" placeholder="votreemail@email.com" />
						<button type="submit">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
	</div><!-- End section -->
</x-app-layouts>
@include('layouts.footer')