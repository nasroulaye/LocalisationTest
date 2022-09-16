<div id="full-page-container">
	<div class="pt-wrapper">
		<div class="pt-header">
			<div class="pt-header-top">
				<?=(page != "index" ?'<div class="over"><span class="pt-bg"></span></div>':"")?>
				<div class="container">
					<div class="pt-logo"><a href="/"><img src="{{ asset('img/DonExpress.png') }}" alt="logo"></a></div>
					<div class="pt-menu">
						<ul>
							<li><a href="/">Accueil</a></li>
							<li><a href="/restaurants">Restaurants</a></li>
							<li><a href="/about">A propos</a></li>
							<li><a href="/contact">Contactez-nous</a></li>
							<li class="pt-mobile-menu">
								<a href="#"><i class="icon-menu icons"></i></a>
								<ul class="pt-drop">
									<li><a href="/">Accueil</a></li>
									<li><a href="/restaurants">Restaurants</a></li>
									<li><a href="/about">A propos</a></li>
									<li><a href="/contact">Contactez-nous</a></li>
								</ul>
							</li>

							<li class="pt-cart">
								<a href="/cart">
									<i class="icon-basket icons"></i>
									<b>{{ Cart::getTotalQuantity()}}</b>
								</a>
							</li>
							<li class="pt-login">
								<a data-toggle="modal" href="#loginModal"><i class="icon-user icons"></i>{{ Auth::user()->nom }}</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div><!-- End header top -->

			<?php if(page == "index"): ?>
			<div class="pt-header-content">
				<div class="container">
					<div class="pt-body">
						<h1>DonExpress <br> rapide & éfficace !</h1>
						<p>
							DonExpress vous permet de vous faire livrer vos repas de restaurants et de petites courses partout à Lomé
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
					<div class="pt-thumb">
						<span class="pt-bg"></span>
						<img src="{{ asset('img/burger.png') }}" onerror="this.src='{{ asset('img/nophoto.jpg') }}'" />
					</div>
				</div>
			</div><!-- End header Content -->
			<?php endif; ?>
		</div><!-- End header -->