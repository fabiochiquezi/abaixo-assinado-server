@extends('site.structure.base')

@section('content-page')
<main class="success-form">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <div>
            <h2 class="title-standard w-100 text-center mb-5">Sucesso !!</h2>
            <p class="text-center mb-5">Os dados foram enviados com sucesso!! Obrigado pela participação. Ajude-nos compartilhando nas redes sociais.</p>
            
            <div class="social-media-standard1">
                <!-- <p>Ajude nossa petição compartilhando nas redes!</p> -->

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
    </div>
</main>

@endsection