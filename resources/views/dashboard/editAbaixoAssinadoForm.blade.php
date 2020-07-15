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

                                @if($errors->all())
                                    <div class="alert alert-danger w-100">
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="d-flex justify-content-between">
                                    <a href="{{route('dashboard.home')}}" class="btn btn-dark">Cancelar</a>
                                    <a href="#" class="btn btn-primary buttonAddsField-js">Adicionar campo</a>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditForm-js">
                                        Ativar Campanha
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="v-pills-conteudo" role="tabpanel" aria-labelledby="v-pills-conteudo-tab">
                            <form class="d-flex flex-column justify-content-end">
                                
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Link:</label>
                                    <div class="col-sm-10">
                                        <span>/abaixo-assinado-em-prol-de-uma-causa</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o nome do abaixo-assinado">
                                    </div>
                                </div>

                                <div class="group-field">

                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile" data-browse="Selecionar um arquivo"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Titulo</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite um título p/ a página">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Subtítulo</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite um título p/ a página">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Conteúdo</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="Required example textarea" rows="4">Digite um texto p/ a página</textarea>
                                    </div>
                                </div>

                                <div class="form-group row align-items-end">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">WhatssApp</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite seu WhatsApp, ex: 19983127035">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Facebook">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Twitter</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Twitter">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="Digite o link do seu Instagram">
                                    </div>
                                </div>
                                
                                <a href="" class="btn btn-primary mt-3 align-self-end">Enviar</a>
                            </form>
                        </div>
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