@extends('layouts.front-mixed')

@section('title')
<h2 align="center">Hora Marcada</h2>
@endsection

@section('content')

<article id="content">
    <header>
        <p class="txt-ore-hora">Você conhece o nosso Grupo terapêutico?</p>
    </header>
    <div class="row">
        <div class="col-5">
            <img class="img-hora-marcada" src="/public/assets/css/images/img-hora-marcada.jpg" alt="" />
        </div>
        <div class="col-7">
            <p class="txt-hora-marcada">É um grupo que oferece a oportunidade a
                jovens e adultos experienciar momentos com troca de vivências e oportunidade de adquirir
                direcionamentos para melhor desempenho e
                habilidades sociais, como assuntos relacionados a: prevenção contra as drogas, processo de luto,
                sexualidade, ingresso no mercado de trabalho, exercício da cidadania, superação das dificuldades em
                geral.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="txt-hora-marcada">
                O grupo foi criado para ofertar aos mesmos
                momentos de descontração, interação e
                acolhimento, devido as dificuldades que estes
                jovens enfrentam em seu cotidiano, guiados por uma neuropsicopedagoga
                Este acontece todas as quartas-feiras no horário das 16h no Instituto de Educação Especial Clave de
                Sol. <br />
                <b>Participem!</b></p>
        </div>
    </div>

    <div class="featured"><img src="/public/assets/css/images/img-hora-marcada.png" class="img-hora-marcada" alt=""></div>


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
