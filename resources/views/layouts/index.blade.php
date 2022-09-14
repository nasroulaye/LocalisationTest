<x-app-layout>
	<div class="pt-section pt-best">
		<div class="container">
			<div class="pt-section-title">
				<h3>{{ $home_nearby }}</h3>
				<p>{{ $home_nearby_desc }}</p>
			</div>

			
		</div>
	</div>


	<div class="pt-section pt-best">
		<div class="container">
			<div class="pt-section-title">
				<h3>{{ $home_best }}</h3>
				<p>{{ $home_best_desc }}</p>
			</div>

			<div class="row">
				<div class="col-4">
					<div class="pt-post">
						<div class="pt-thumb"><img src="restoImage" onerror="this.src='{{ asset('img/noimage.jpg') }}'"></div>
						<div class="pt-details">
							<div class="pt-option">
								<a data-toggle="modal" href="#addtocartModal" data-id="$rs_id" class="pt-addtobasket pt-addtocart tips"><i class="icons icon-basket"></i><b>{{ $home_addtocart }}</b></a>
								<a class="pt-addtobasket pt-addtocart tips bg-danger"><i class="icons icon-close"></i><b>{{ $home_unavailable }}</b></a>
							</div>
							<a href="#" class="pt-price"><?php echo "10 $" ?></a>
							<div class="pt-title"><h1><a href="#">Nom_Restaurant à ajouter</a></h1></div>
							<div class="pt-info">
								<span><i class="icons icon-clock"></i> 15min ? 20min : '--')</span>
								<span class="pt-stars">ff</span>
							</div>
							<div class="pt-tags">
								<a href="/cuisines.php?id=">Nom_Cuisine</a>
							</div>
						</div>
					</div>
				</div>
			
			</div><!-- End Row -->

			<div class="pt-link">
				<a href="/cuisines.php">{{ $home_more }}<i class="fas fa-long-arrow-alt-right"></i></a>
			</div>

		</div><!-- End container -->

	</div><!-- End section -->

	<div class="pt-section">
		<div class="container">
			<div class="pt-section-title">
				<h3>{{ $home_how }}</h3>
				<p>{{ $home_how_desc }}</p>
			</div>

			<div class="row">
				<div class="col-4">
					<div class="pt-how">
						<span><i class="fas fa-pizza-slice"></i></span>
						<h3>{{ $home_how1 }}</h3>
						<p>{{ $home_how1_desc }}</p>
					</div>
				</div>
				<div class="col-4">
					<div class="pt-how">
						<span><i class="far fa-credit-card"></i></span>
						<h3>{{ $home_how2 }}</h3>
						<p>{{ $home_how2_desc }}</p>
					</div>
				</div>
				<div class="col-4">
					<div class="pt-how">
						<span><i class="far fa-paper-plane"></i></span>
						<h3>{{ $home_how3 }}</h3>
						<p>{{ $home_how3_desc }}</p>
					</div>
				</div>
			</div>

		</div>
	</div><!-- End section -->

	<div class="pt-section">
		<div class="container">
			<div class="pt-section-title">
				<h3>{{ $home_help }}</h3>
			</div>
			<div class="pt-subscribe">
				<form id="sendsubscribe">
					<div class="pt-input">
						<input type="text" name="email" placeholder="youremail@email.com" />
						<button type="submit">{{ $home_help_btn }}</button>
					</div>
				</form>
			</div>
		</div>
	</div><!-- End section -->
</x-app-layouts>
@include('layouts.footer')