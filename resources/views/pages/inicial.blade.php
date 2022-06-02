@extends('layouts.front')

@section('hero')
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
@endsection

@section('content')
			<!-- Features 1 -->
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <section class="col-6 col-12-narrower feature">
                            <div class="image-wrapper first">
                                <a href="#" class="image featured first"><img src="/assets/css/images/vivenciar-para-aprender.png" alt="" /></a>
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
                            <div class="image-wrapper">
                                <a href="#" class="image featured"><img src="/assets/css/images/plano-de-trabalho.png" alt="" /></a>
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

        <!-- Promo -->
            <div id="promo-wrapper">
                <section id="promo">
                    <h2>Doação é amor: preenche o coração de quem dá e de quem recebe. </h2>
                    <a href="#" class="button">Doe com Carinho</a>
                </section>
            </div>

        <!-- Features 2 -->

        <div class="wrapper">
            <section class="container">
                <header class="major">
                    <h2>Fique por dentro de nossas Novidades</h2>
                    <p>Tenha acesso a todas as nossas atualizações</p>
                </header>
                <div class="row features">
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper first">
                            <a href="#" class="image featured"><img src="/assets/css/images/piscina.png" alt="" /></a>
                        </div>
                        <p align="center">
                            As atividades que envolvem corpo e movimento favorecer o desenvolvimento global, que introduz e integra o aluno na cultura corporal de movimento e de uma forma...
                        </p>
                        <ul class="actions major">
                            <li><a href="#" class="button">Veja Mais</a></li>
                        </ul>
                    </section>
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper">
                            <a href="#" class="image featured"><img src="/assets/css/images/piscina.png" alt="" /></a>
                        </div>
                        <p align="center">
                            A piscina tem sido um espaço para os alunos se desenvolverem nas questões da autonomia, autoestima, coordenação motora e um espaço de interação social com os profissionais...
                        </p>
                        <ul class="actions major">
                            <li><a href="#" class="button">Veja Mais</a></li>
                        </ul>
                    </section>
                    <section class="col-4 col-12-narrower feature">
                        <div class="image-wrapper">
                            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
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
