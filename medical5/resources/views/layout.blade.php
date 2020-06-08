<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>   </title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">
		<link rel="stylesheet" href="{{ asset('css/register.css')}}">


	<script src="{{asset('js\bootstrap.min.js')}}"> </script>
</head>

		<body>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Dropdown
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</li>
<li class="nav-item">
	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
</ul>

</div>
</nav>


@yield("content")
<div id="fixedfooter">
		<center>

				<p>
						Copyright © Albasel Hospital In Lattakia 2019. All rights reserved.
						<br />
						<font size="2" color="black">
								Facebook | Twitter |YouTube | Linkedin | Google+Page
				</p>

		</center>



</div>
		</body>
		</html>
