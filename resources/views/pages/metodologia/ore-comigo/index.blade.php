@extends('layouts.front-mixed')

@section('title')
<h2 align="center">Ore Comigo</h2>
@endsection


@section('content')
<article id="content">
    <header>
        <p class="txt-ore-hora">O projeto está disponível toda quinta-feira.
            <br />
            Para todos os interessados seja criança, jovem ou adulto.</p>
    </header>
    <div class="row">
        <div class="col-6">
            <img class="img-ore-comigo" src="/public/assets/css/images/img-ore-comigo.png" alt="" />
            <p class="img-ore-comigo">Eu oro por você, você ora por mim <br />
                e Deus age em nós</p>
        </div>
        <div class="col-6">
            <p class="txt-ore-comigo">O Projeto tem o <b>objetivo de escuta, acolhimento e oração,</b> independente de religião, crença ou
                qualquer outra denominação.</p>
            <p class="txt-ore-comigo"> Os atendimentos são <b>agendados previamente na secretaria do Instituto</b> e tem a duração de até 1 hora.
                Se precisar, estaremos aqui!</p>
        </div>
    </div>
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
