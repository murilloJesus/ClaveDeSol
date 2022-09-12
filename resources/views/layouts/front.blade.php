<!DOCTYPE HTML>
<html>
	<head>
		<title>Clave de Sol</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/public/assets/css/main.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
		<script src="/public/assets/js/lgpd.js"></script>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
			<!-- Header -->
            <x-menu></x-menu>
                <div class="wrapper">
					<div class="container" id="main">
                        @yield('content')
                    </div>
                </div>
			<!-- Footer -->
                <x-footer></x-footer>
		</div>

		<!-- Scripts -->
            <script src="/public/assets/js/jquery.min.js"></script>
            <script src="/public/assets/js/jquery.dropotron.min.js"></script>
			<script src="/public/assets/js/browser.min.js"></script>
			<script src="/public/assets/js/breakpoints.min.js"></script>
			<script src="/public/assets/js/util.js"></script>
			<script src="/public/assets/js/main.js"></script>
			<script src="/public/assets/js/lgpd.js"></script>


	</body>
</html>
