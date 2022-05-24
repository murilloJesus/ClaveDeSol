<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Telephasic by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">CLAVE DE SOL</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Galerias</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Metodologia</a></li>
									<li class="break"><a href="right-sidebar.html">Mural</a></li>
									<li><a href="no-sidebar.html">Contato</a></li>
								</ul>
							</nav>

					</div>

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<h2>Instituto de Educação Especial
								<br /> Clave de Sol </h2>
							</header>
							<p>Contamos com Vocês para podermos continuar cuidando
							<br /> de nossas Pequenas Estrelas</p>
							<ul class="actions">
								<li><a href="#" class="button">Faça sua Doação</a></li>
							</ul>
						</section>

				</div>

                <div class="wrapper">
					<div class="container" id="main">

                        @yield('content')

                    </div>
                </div>


			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2 align="center">Contate-nos</h2>
							<p>Caso tenha ficado alguma Duvida Nos encaminhe uma mensagem </p>
						</header>

						<div class="row">
							<section class="col-6 col-12-narrower">
								<form method="post" action="#">
									<div class="row gtr-50">
										<div class="col-6 col-12-mobile">
											<input name="name" placeholder="Nome" type="text" />
										</div>
										<div class="col-6 col-12-mobile">
											<input name="email" placeholder=" Seu Email" type="text" />
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Mensagem"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="reset" value="Cancelar" /></li>
												<li><input type="submit" value="Enviar" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="col-6 col-12-narrower">
								<div class="row gtr-0">
									<ul class="divided icons col-6 col-12-mobile">
										<li class="icon brands fa-facebook-f"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiK-tre6tr3AhXNjZUCHdHMB5wQFnoECBQQAQ&url=https%3A%2F%2Fpt-br.facebook.com%2FInstitutoClaveDeSol%2F&usg=AOvVaw0eNszAR5MRrietS-2OzQ1Y">Nos Acompanhe<span class="extra"></span></a></li>
										<li class="icon brands fa-instagram"><a href="#"> Nos Acompanhe<span class="extra"></span></a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Clave de Sol. Todos os direitos reservados.</li><li>Site por Star Escola</li>
						</ul>
					</div>
				</div>

		</div>

		<!-- Scripts -->
            <script src="/assets/js/jquery.dropotron.min.js"></script>
            <script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>
