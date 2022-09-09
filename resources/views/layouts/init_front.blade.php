<!DOCTYPE HTML>

<html>
	<head>
		<title>Clave de Sol</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/public/assets/css/main.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<x-menu></x-menu>

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

									<a href="https://api.whatsapp.com/send?phone=5515998394579&text=Ol%C3%A1%20Boa%20tarde"><img id="footer-img" src="https://imagepng.org/wp-content/uploads/2017/08/WhatsApp-icone.png" alt="Icone Whatsapp "> </a>
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
            <script src="/public/assets/js/jquery.min.js"></script>
            <script src="/public/assets/js/jquery.dropotron.min.js"></script>
            <script src="/public/assets/js/bootstrap.min.js"></script>
            <script src="/public/assets/js/browser.min.js"></script>
            <script src="/public/assets/js/breakpoints.min.js"></script>
            <script src="/public/assets/js/util.js"></script>
            <script src="/public/assets/js/main.js"></script>

	</body>
</html>
