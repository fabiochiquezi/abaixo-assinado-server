@extends('site.structure.base')

@section('content-page')

    <style>
        .banner-site{
            background: url("./storage/{{$content->mobile_banner}}") no-repeat center center;
            background-size: cover;
        }
        @media(min-width: 640px){
            .banner-site{
                background: url("./storage/{{$content->tablet_banner}}") no-repeat center center;
                background-size: cover;
            }
        }
        @media(min-width: 992px){
            .banner-site{
                background: url("./storage/{{$content->desktop_banner}}") no-repeat center center;
                background-size: cover;
            }
        }
    </style>

    <section class="banner-site">
    </section>

    <section class="form-site">
        <div class="container">
            <!-- <div class="row"> -->
            <h2 class="title-standard w-100 text-center mb-5">{{$content->title_form}}</h2>

            <form method="POST" action="{{route('site.form.action')}}" class="d-flex flex-column">
                <h2>
                    <span>{{$content->subtitulo_form}}</span>
                    <strong>{{$content->subtitulo2_form}}</strong>
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
                <p>Ajude nosso projeto compartilhando nas redes!</p>

                <ul class="d-flex justify-content-center justify-content-lg-start mb-0">
                    <li><a href="{{$content->facebook_site}}">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </a></li>
                    <li><a href="{{$content->twitter_site}}">
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
            
            <h1 class="text-center mb-4 w-100">{{ $content->title_content }}</h1>

            <div class="text-center mb-5 p-content">{!! $content->text_content !!}</div>

            <div class="extra d-flex flex-column align-items-center w-100 mt-5">
                <div class="link-pad d-flex flex-column align-items-center mb-5">
                    <p class="text-center">Para falar comigo no WhatsApp</p>
                    <a href="https://wa.me/{{$content->whatsapp_site}}" target="_blank" class="btn">Clique aqui</a>
                </div>
                <div class="link-pad d-flex flex-column align-items-center">
                    <p class="text-center">Veja aqui outros lutas e projetos de lei do mandato</p>
                    <a href="https://marianacontipsol.com.br/atuacao/projetos-de-lei/" class="btn">Clique aqui</a>
                </div>
            </div>
        </div>
    </main>
@endsection