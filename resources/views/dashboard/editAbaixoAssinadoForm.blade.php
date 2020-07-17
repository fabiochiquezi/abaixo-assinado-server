@extends('dashboard.structure.structureDashboard')

@section('content-page')
    <main class="content-site content-system-page d-none d-lg-block mb-5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 tab-header mb-4">
                    <div class="nav flex-md-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link col-6 col-md-12 active" id="v-pills-formulario-tab" data-toggle="pill" href="#v-pills-formulario" role="tab" aria-controls="v-pills-formulario" aria-selected="false">
                            Formulário
                        </a>

                        <a class="nav-link col-6 col-md-12" id="v-pills-conteudo-tab" data-toggle="pill" href="#v-pills-conteudo" role="tab" aria-controls="v-pills-conteudo" aria-selected="false">
                            Conteúdo Geral
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-formulario" role="tabpanel" aria-labelledby="v-pills-formulario-tab">
                            <form 
                                action="{{ route('dashboard.editFormSite.action') }}"
                                method="POST"
                                class="d-flex flex-column justify-content-end col-12 formEditAbaixoAssinado-js"
                            >

                                @csrf
                                <div class="group-field edit-form-system mb-4">
                                    <p class="mb-3">Os campos nome, email e whatsapp são padrões do formulário e serão inseridos no início dele automáticamente.</p>
                                    <ul class="form-list"></ul>
                                </div>

                               
                                    <div class="alert alert-danger w-100 d-none">
                                        <ul class="mb-0">
                                            @if($errors->all())
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                

                                <div class="d-flex justify-content-between">
                                    <a href="{{route('dashboard.editForm')}}" class="btn btn-dark">Cancelar</a>
                                    <a href="#" class="btn btn-primary buttonAddsField-js">Adicionar campo</a>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditForm-js">
                                        Ativar Campanha
                                    </button>
                                </div>
                            </form>
                        </div>

                        @include('dashboard.partials.conteudoGeral')
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalEditForm-js" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Você tem certeza que deseja concluir esta ação?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    Ao confirmar essa ação, voce removerá o formulário antigo e com ele todos os dados cadastrados.
                    Somente aplique essa ação caso queira criar um novo formulário.
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary buttonSend-js">Salvar alterações</button>
                </div>
            </div>
        </div>
    </div>
@endsection