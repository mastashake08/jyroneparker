<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="/">
				<i class="fa fa-btn fa-code"></i>Parker Code Academy
			</a>
		</div>

		<div class="collapse navbar-collapse" id="spark-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				<li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
				<li role="presentation" class="dropdown">
				 <a class="dropdown-toggle" data-toggle="dropdown" href="/posts/category/php" role="button" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-play"></i> PHP Casts <span class="caret"></span>
				 </a>
				 <ul class="dropdown-menu">
					 <li><a href="/posts/category/laravel"><i class="fa fa-file-code-o"></i> Laravel Casts</a></li>
				 </ul>
			 </li>
			 <li role="presentation" class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="/posts/category/javascript" role="button" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-play"></i>	Javascript Casts <span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="/posts/category/vue"><i class="fa fa-file-code-o"></i> Vue.js Casts</a></li>
					<li><a href="/posts/category/angular"><i class="fa fa-file-code-o"></i> Angular.js Casts</a></li>
					<li><a href="/posts/category/ionic"><i class="fa fa-file-code-o"></i> Ionic Casts</a></li>
				</ul>
			</li>
				<li role="presentation" class="dropdown">
				 <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					 <i class="fa fa-play"></i> Tools Casts <span class="caret"></span>
				 </a>
				 <ul class="dropdown-menu">
					 <li><a href="/posts/category/command-line"><i class="fa fa-terminal"></i> Command Line</a></li>
					 <li><a href="/posts/category/git"><i class="fa fa-git"></i> Git</a></li>
					 <li><a href="/posts/category/homestead"><i class="fa fa-home"></i> Homestead</a></li>
					 <li><a href="/posts/category/gulp"><i class="fa fa-beer"></i> Gulp</a></li>
				 </ul>
			 </li>
			 <li><a href="/store"><i class="fa fa-shopping-cart"></i> Store</a></li>
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				@include('spark::nav.settings')
			</ul>
		</div>
	</div>
</nav>
