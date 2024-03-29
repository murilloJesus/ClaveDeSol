@extends('layouts.front-mixed')
@section('content')
<article id="content">

                                @section('title')
                                Trabalhe Conosco
                                @endsection
                                
<article id="content">
<div class="container">
        @if ( isset($response) && $response)
        <div align=center>
            <h2 class="color-secundary">{{$response}}</h2>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <form action="/message" method="POST">
                        @csrf
                        <div class="fields row">
                            <div class="field col-6 col-12-medium">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" placeholder="Nome">
                            </div>
                            <div class="field col-6 col-12-medium">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="field col-6 col-12-medium">
                                <label for="phone" >Telefones</label>
                                <input type="text" name="phone" id="phone" placeholder="Telefone">
                            </div>
                            <div class="field col-6 col-12-medium"> 
                                <label for="arquivo" >Encaminhar Curriculo</label>
                                <input type="file" name="curriculo" id="curriculo">
                            </div>
                            <div class="field col-6 col-12-medium">
                                <label for="reason">Faça uma Breve Descrição Sobre Você</label>
                                <input type="text" name="motivo" id="motivo" placeholder="faça uma Breve Descrição Sobre Você">
                            </div>
                            <div class="field col-12 col-12-medium"> 
                                <div class="actions">
                                    <input type="submit" value="Enviar">
                                </div>
                            </div> .

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
