<div data-sticky-container>
	<div id="main-header" class="sticky">
		<!-- mobile nav bar -->
		{{-- <div class="title-bar topbar-center-logo-mobile hide" data-responsive-toggle="topbar-center-logo" data-hide-for="medium">
		    <div class="title-bar-left">
		        <div class="title-bar-title"><img src="https://placehold.it/100x39" alt="" /></div>
		    </div>
		    <div class="title-bar-right">
		        <button class="menu-icon" type="button" data-toggle="topbar-center-logo"></button>
		    </div>
		</div> --}}
		<!-- /mobile nav bar -->
		<!-- medium and larger nav bar -->
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell">
					<div class="top-bar topbar-center-logo" id="topbar-center-logo">
					    <div class="top-bar-left">

					        <a href="{{ url('') }}">
								<img id="header-logo" src="{{ asset('img/logo_catalyze.png') }}" alt="">
								{{-- <strong>ERASMUS</strong> --}}
							</a>
							<button class="menu-icon hide-for-medium" type="button" data-animate="slide" data-toggle="social-menu center-menu"></button>
					    </div>
					    <div class="top-bar-center hide-for-small-only" data-toggler=".hide-for-small-only" id="center-menu">
					        <ul class="menu vertical medium-horizontal">
					            <li class="is-active"><a href="#">Home</a></li>
					            <li><a href="#">About</a></li>
					            <li><a href="#">Works</a></li>
					            <li><a href="#">Service</a></li>
					        </ul>
					    </div>
					    <div class="top-bar-right show-for-large" data-toggler='.show-for-large' id="social-menu">
					        <ul class="menu medium-horizontal">
					            <li>
									<a href="#">
										<i class="fa fa-lg fa-facebook"></i>
									</a>
					            </li>
					            <li>
									<a href="#">
										<i class="fa fa-lg fa-twitter"></i>
									</a>
					            </li>
					            <li>
									<a href="#">
										<i class="fa fa-lg fa-google"></i>
									</a>
					            </li>
					            <li>
									<a href="#">
										<i class="fa fa-lg fa-search"></i>
									</a>
					            </li>
					        </ul>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /medium and larger nav bar -->
</div>