
@extends('layouts.init_front')

@section('hero')
    <section id="hero" class="container">
        <header>
            <h2>Instituto de Educação Especial
            <br /> Clave de Sol </h2>
        </header>
        <p id="a">Contamos com Vocês para podermos continuar cuidando
        <br /> de nossas Pequenas Estrelas</p>
        <ul class="actions">
            <li><a href="#" class="button" data-toggle="modal" data-target="#exampleModal">Faça sua Doação</a></li>
        </ul>
    </section>
@endsection

@section('content')
			<!-- Features 1 -->
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <section class="col-6 col-12-narrower feature">
                            <div class="image-wrapper first">
                                <a href="/metodologia/vivenciar-para-aprender/" class="image featured first"><img src="/public/assets/css/images/books.png" alt="" /></a>
                            </div>
                            <header>
                                <h2>Vivenciar para Aprender</h2>
                            </header>
                            <p>
                                Essa metodologia, que renova completamente o Ensino desse Instituto, visa favorecertodos os alunos a vivência do ensino na prática, antes da assimilação concreta (registro), de todo trabalho pedagógico.
                            </p>
                            <ul class="actions">
                                <li><a href="/metodologia/vivenciar-para-aprender/" class="button">Veja Mais</a></li>
                            </ul>
                        </section>
                        <section class="col-6 col-12-narrower feature">
                            <div class="image-wrapper first">
                                <a href="/metodologia/plano-de-trabalho/" class="image featured"><img src="/public/assets/css/images/meet.png" alt="" /></a>
                            </div>
                            <header>
                                <h2>Plano de Trabalho</h2>
                            </header>
                            <p>
                                esse plano foi desenvolvido para alunos que precisam de autonomia e independência em seus afazeres, que possam ter uma qualidade de vida. um desenvolvimento social, afetivo e seja estimulado cognitivamente
                            </p>
                            <ul class="actions">
                                <li><a href="/metodologia/plano-de-trabalho/" class="button">Veja Mais</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promo -->
        <div id="promo-wrapper">
            <section id="promo" class="img-fundo" >
           
                <h2>Doação é amor: preenche o coração de quem dá e de quem recebe. </h2>
                <button type="button" class="button" data-toggle="modal" data-target="#exampleModal">Doe com Carinho</a>
            </section>
        </div>

        <x-modal-doacoes></x-modal-doacoes>



        <!-- Features 2 -->

        <div class="wrapper">
            <section class="container">
                <header class="major">
                    <h2>Fique por dentro de nossas Novidades</h2>
                    <p id="a">Tenha acesso a todas as nossas atualizações</p>
                </header>
                <div class="row features">
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper first">
                            <a href="/metodologia/educacao-fisica" class="image featured"><img src="/public/assets/css/images/computer.png" alt="" /></a>
                        </div>
                        <p align="center">
                            As aulas de informática são realizadas com o objetivo de proporcionar ao aluno o contato com o computador, materiais digitais, além de favorecer a coordenação motora...
                        </p>
                        <ul class="actions major">
                            <li><a href="/metodologia/educacao-fisica" class="button">Veja Mais</a></li>
                        </ul>
                    </section>
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper">
                            <a href="/metodologia/piscina" class="image featured"><img src="/public/assets/css/images/pscina.png" alt="" /></a>
                        </div>
                        <p align="center">
                            A piscina tem sido um espaço para os alunos se desenvolverem nas questões da autonomia, autoestima, coordenação motora e um espaço de interação social com os profissionais...
                        </p>
                        <ul class="actions major">
                            <li><a href="/metodologia/piscina" class="button">Veja Mais</a></li>
                        </ul>
                    </section>
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper">
                            <a href="/metodologia/vivenciar-para-aprender/Metodologia-de-Ensino-Pedagogico-do-Instituto-de-E" class="image featured"><img src="/public/assets/css/images/books.png" alt="" /></a>
                        </div>
                        <p align="center">
                                Dar oportunidade, isso é fundamental para que nossos alunos tenham interesse e consigam adquirir a independência e autonomia que tanto desejamos! Primeiramente é importante.
                        </p>
                        <ul class="actions major">
                            <li><a href="#" class="button">Veja Mais</a></li>
                        </ul>
                    </section>
                </div>
            </section>
        </div>
@endsection
