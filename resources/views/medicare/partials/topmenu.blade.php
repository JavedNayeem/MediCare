<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="images/logo.png" alt="Logo">
			</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<!-- NAV -->
				<li><a href="#HOME">HOME</a> </li>
				<li><a href="#ABOUT">ABOUT </a> </li>
				<li><a href="#FEATURES">FEATURES</a></li>
				<li><a href="#SCREENS">SCREENS</a> </li>
				<li><a href="#DOWNLOAD">DOWNLOAD </a> </li>
				<li><a href="#CONTACT">CONTACT </a> </li>

				@if (Auth::check())
					<li><a href="/dashboard">DASHBOARD</a> </li>

				@else
					<li><a href="/login">LOGIN </a> </li>
					<li><a href="/register">REGISTER</a> </li>
				@endif


			</ul>
		</div>

	</div>

</nav>