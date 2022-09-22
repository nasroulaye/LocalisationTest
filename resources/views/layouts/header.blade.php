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
									<b>5</b>
								</a>
							</li>
							<li class="pt-login">
								<a data-toggle="modal" href="#loginModal"><i class="icon-user icons"></i>{{ Auth::user()->nom }}</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div><!-- End header top -->

		</div><!-- End header -->