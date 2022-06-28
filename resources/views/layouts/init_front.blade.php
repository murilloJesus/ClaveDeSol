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
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
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
							<h1 id="logo"><a href="/">CLAVE DE SOL</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Galerias</a>
									</li>

									<li>
                                        <a href="/metodologia/">Metodologia</a>
										<ul>
											<li><a href="/metodologia/vivenciar-para-aprender">Vivenciar Para Aprender</a></li>
											<li><a href="/metodologia/plano-de-trabalho">Plano de Trabalho</a></li>
											<li><a href="/metodologia/plano-terapeutico">Plano Terapêutico</a></li>
											<li><a href="#">Atividades Complementares</a>
                                                <ul>
                                                    <li><a href="/metodologia/musicalizacao">Musicalização</a></li>
                                                    <li><a href="/metodologia/educacao-fisica">Educação Fisica</a></li>
                                                    <li><a href="/metodologia/informatica">Informática</a></li>
                                                    <li><a href="/metodologia/culinaria">Culinária</a></li>
                                                    <li><a href="/metodologia/horta">Horta</a></li>
                                                    <li><a href="/metodologia/piscina">Piscina</a></li>
                                                    <li><a href="/metodologia/curiosidades/a-importancia-da-educacao-fisica-escolar-no-desenvolvimento-infantil/">Curiosidades</a></li>
                                                </ul>
                                            </li>

										</ul>
									</li>

									<li class="break"><a href="#">Mural</a>
										<ul>
											<li><a href="#">Comunicados</a></li>
											<li><a href="#">Depoimentos</a></li>
											<li><a href="#">Calendário do Ano</a></li>
										</ul>
									</li>


									<li><a href="#">Contato</a>
										<ul>
											<li><a href="/metodologia/contato/">Contate-nos</a></li>
											<li><a href="/metodologia/trabalhe">Trabalhe Conosco</a></li>
										</ul>
									</li>
								</ul>
							</nav>

					</div>

					<!-- Hero -->
                    @yield('hero')
				</div>

				@yield('content')



			<!-- Footer -->
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header class="major">
							<h2>Instituto de Educação Especial Clave de Sol</h2>
						</header>

							<p id="d"> Contate-nos</p>
							<div class="tam-footer">
									<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiK-tre6tr3AhXNjZUCHdHMB5wQFnoECBQQAQ&url=https%3A%2F%2Fpt-br.facebook.com%2FInstitutoClaveDeSol%2F&usg=AOvVaw0eNszAR5MRrietS-2OzQ1Y" target="blank"><img id="footer-img" src="https://cdn.icon-icons.com/icons2/2429/PNG/512/facebook_logo_icon_147291.png" alt="Icone Facebook"></a>

									<a href=""><img id="footer-img" src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone.png" alt="Icone Whatsapp "> </a>
									<p id="c"> Nossa metodologia renova completamente o Ensino <br>      visando favorecer a todos os alunos a vivênciar do ensino na prática</p>
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
            <script src="/assets/js/jquery.min.js"></script>
            <script src="/assets/js/jquery.dropotron.min.js"></script>
            <script src="/assets/js/bootstrap.min.js"></script>
            <script src="/assets/js/browser.min.js"></script>
            <script src="/assets/js/breakpoints.min.js"></script>
            <script src="/assets/js/util.js"></script>
            <script src="/assets/js/main.js"></script>

	</body>
</html>