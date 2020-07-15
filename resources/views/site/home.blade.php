@extends('site.structure.base')

@section('content-page')
    <section class="banner-site">
    </section>

    <section class="form-site">
        <div class="container">
            <!-- <div class="row"> -->
                <h2 class="title-standard w-100 text-center mb-5">Assine a Petição</h2>

            <form method="POST" action="{{route('site.form.action')}}" class="d-flex flex-column">
                <h2>
                    <span>PRORROGA AUXÍLIO, JÁ!</span>
                    <strong>ASSINE PELA RENDA EMERGENCIAL ATÉ O FIM DE 2020!</strong>
                </h2>

                @csrf

                @foreach($formFields as $input)
                    @if($input->tipo == 0)
                        <label for="">
                            <span>{{$input->nome}}</span>
                            <textarea 
                                class="required"
                                name="{{strtolower(preg_replace('/[^a-z0-9]/i', '_', $input->nome))}}"
                                style="width: 100%; height: 150px; padding: 7.5px 10px;"
                                placeholder="{{trim($input->placeholder)}}"
                            ></textarea>
                        </label>
                    @else
                        <label for="">
                        <span>{{$input->nome}} {{$input->required == 0 ? '' : '(Obrigatório)'}}</span>
                            <input 
                                class="{{$input->required == 0 ? '' : 'required'}}"
                                type="{{$personField[$input->tipo]}}" 
                                placeholder="{{$input->placeholder}}" 
                                name="{{strtolower(preg_replace('/[^a-z0-9]/i', '_', $input->nome))}}"
                            >
                        </label>
                    @endif
                @endforeach

                <div class="errors">
                </div>

                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center button-loader">
                    <button class="btn btn-send-js">Enviar</button>
                    <span class="load">
                        <img src="{{ asset('img/load.gif') }}" alt="">
                    </span>
                </div>
            </form>

            <div class="social-media-standard1">
                <p>Ajude nossa petição compartilhando nas redes!</p>

                <ul class="d-flex justify-content-center justify-content-lg-start mb-0">
                    <li><a href="">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </a></li>
                    <li><a href="">
                        <img src="{{ asset('img/twitter.png') }}" alt="">
                    </a></li>
                </ul>
            </div>
        </div>
        <!-- </div> -->
    </section>

    <main 
    class="content-site content-system-page"
    >
        <div class="container">
            <h1 class="text-center mb-4 w-100">Prorroga Auxílio, Já! Assine pela renda emergencial até o fim de 2020!</h1>

            <p class="text-center mb-5 p-content">Recentemente, o Governo Federal anunciou que o pagamento do auxílio emergencial será estendido por somente dois meses. Um absurdo!
                <br>
                <br>
                O povo precisa ser assistido, pelo menos, até o fim de 2020! A renda emergencial foi criada em abril para ajudar trabalhadores sem carteira assinada, autônomos, MEIs e desempregados durante a crise gerada pela pandemia do coronavírus. O número de beneficiários do auxílio chega a 64,1 milhões. 
                <br>
                <br>
                Com o aumento crescente de desempregados, como os brasileiros sobreviverão a essa crise? Durante a pandemia, quase 8 milhões de pessoas perderam seus postos de trabalho, segundo o IBGE. Trabalhadores informais foram os mais afetados: 5,8 milhões ficaram sem emprego. Em maio, a taxa de desocupação ficou em 12,3%, a maior desde o início da série do IBGE em 2012. 
                <br>
                <br>
                Além disso,  14 milhões de brasileiros podem chegar à pobreza, segundo estudo de pesquisadores ingleses e australianos junto com o Instituto Mundial das Nações Unidas (UNU-WIDER). Segundo Instituto Data Favela, mais de um terço dos quase 14 milhões de moradores de comunidades tiveram a renda zerada durante a pandemia.
                <br>
                <br>
                Nós queremos que o auxílio emergencial seja prorrogado com o pagamento integral das parcelas até o fim de 2020 – pelo menos!
                <br>
                <br>
                Se você concorda, assine essa petição e leve essa ideia adiante.</p>

            <div class="extra d-flex flex-column align-items-center w-100 mt-5">
                <div class="link-pad d-flex flex-column align-items-center mb-5">
                    <p class="text-center">Para falar comigo no WhatsApp</p>
                    <a href="" class="btn">Clique aqui</a>
                </div>
                <div class="link-pad d-flex flex-column align-items-center">
                    <p class="text-center">Veja aqui outros lutas e projetos de lei do mandato</p>
                    <a href="" class="btn">Clique aqui</a>
                </div>
            </div>
        </div>
    </main>
@endsection