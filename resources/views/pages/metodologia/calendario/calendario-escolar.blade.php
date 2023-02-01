		@extends('layouts.front-mixed')

		@section('content')
		<article id="content">

			@section('title')
			Calendario Escolar
			@endsection


			<img class="calendar" src="/public/assets/css/images/calendar.jpg" alt="Teste img" />

			</article>

			<div class="row features">
    <section class="col-4 col-12-narrower feature">
        <div class="image-wrapper first">
            <a href="/metodologia/vivenciar-para-aprender" class="image featured"><img src="/public/assets/css/images/books.png" alt="" /></a>
        </div>
        <header>
            <h3 align="center" class="height-2em">
                Vivenciar para Aprender
            </h3>
        </header>
        <ul class="actions">
            <li><a href="/metodologia/vivenciar-para-aprender" class="button">Veja Mais</a></li>
        </ul>
    </section>
    <section class="col-4 col-12-narrower feature">
        <div class="image-wrapper">
            <a href="/metodologia/plano-de-trabalho" class="image featured"><img src="/public/assets/css/images/meet.png" alt="" /></a>
        </div>
        <header>
            <h3 align="center" class="height-2em">
                Plano de trabalho
            </h3>
        </header>
        <ul class="actions">
            <li><a href="/metodologia/plano-de-trabalho" class="button">Veja
                    Mais</a></li>
        </ul>
    </section>
    <section class="col-4 col-12-narrower feature">
        <div class="image-wrapper">
            <a href="/metodologia/plano-terapeutico" class="image featured"><img src="/public/assets/css/images/talking.png" alt="" /></a>
        </div>
        <header>
            <h3 align="center" class="height-2em">Plano Terapeutico</h3>
        </header>
        <ul class="actions">
            <li><a href="/metodologia/plano-terapeutico" class="button">Veja Mais</a></li>
        </ul>
    </section>
</div>
						@endsection
