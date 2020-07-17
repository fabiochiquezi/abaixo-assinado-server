<div class="tab-pane fade" id="v-pills-conteudo" role="tabpanel" aria-labelledby="v-pills-conteudo-tab">
    <form 
        class="d-flex flex-column justify-content-end" 
        action="{{ route('dashboard.editSite') }}" 
        method="POST"
        enctype='multipart/form-data'
    >
        @csrf
        {{-- <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Link:</label>
            <div class="col-sm-10">
                <span>/abaixo-assinado-em-prol-de-uma-causa</span>
            </div>
        </div> --}}

        <h4>Geral</h4>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input 
                    name="nome_site"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    value="{{ $siteData->nome_site }}"
                    placeholder="O 'Nome' aparecerá no google e outros meios de compatilhamento"
                >
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                <input 
                    name="descricao_site"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    value="{{ $siteData->descricao_site }}"
                    placeholder="A 'Descrição' aparecerá no google e outros meios de compatilhamento"
                >
            </div>
        </div>

        <div class="form-group row align-items-end">
            <label for="colFormLabel" class="col-sm-2 col-form-label">WhatssApp</label>
            <div class="col-sm-10">
                <input 
                    name="whatsapp_site"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    value="{{ $siteData->whatsapp_site }}"
                    placeholder="Digite seu WhatsApp, ex: 19983127035"
                >
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
                <input 
                    name="facebook_site"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    value="{{ $siteData->facebook_site }}"
                    placeholder="Digite o link do seu Facebook"
                >
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Twitter</label>
            <div class="col-sm-10">
                <input 
                    name="twitter_site"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    value="{{ $siteData->twitter_site }}"
                    placeholder="Digite o link do seu Twitter"
                >
            </div>
        </div>

        <h4 class="mt-4">Banner</h4>

        <div class="group-field">

            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Arquivo</label>
                <div class="col-3">
                    <input 
                        name="mobile_banner"
                        type="file" 
                        class="custom-file-input" 
                        id="customFile" 
                        value="{{ $siteData->mobile_banner }}"
                        placeholder="Banner Mobile"
                    >
                    <label class="custom-file-label" for="customFile" data-browse="640 x 400"></label>
                </div>
                <div class="col-3">
                    <input 
                        name="tablet_banner"
                        type="file" 
                        class="custom-file-input" 
                        id="customFile"
                        value="{{ $siteData->tablet_banner }}"
                        placeholder="Banner Tablet"
                    >
                    <label class="custom-file-label" for="customFile" data-browse="992 x 526"></label>
                </div>
                <div class="col-3">
                    <input 
                        name="desktop_banner"
                        type="file" 
                        class="custom-file-input" 
                        id="customFile"
                        value="{{ $siteData->desktop_banner }}"
                        placeholder="Banner Desktop"
                    >
                    <label class="custom-file-label" for="customFile" data-browse="1520 x 526"></label>
                </div>
            </div>
        </div>

        <h4 class="mt-4">Formulário</h4>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input 
                    name="title_form"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    placeholder="Digite um título p/ esta seção"
                    value="{{ $siteData->title_form }}"
                >
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Subtítulo</label>
            <div class="col-sm-10">
                <input 
                    name="subtitulo_form"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    placeholder="Digite um subtítulo p/ esta seção"
                    value="{{ $siteData->subtitulo_form }}"
                >
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Subtítulo 2</label>
            <div class="col-sm-10">
                <input 
                    name="subtitulo2_form"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    placeholder="Digite um subtítulo p/ esta seção"
                    value="{{ $siteData->subtitulo2_form }}"
                >
            </div>
        </div>

        <h4 class="mt-4">Conteúdo</h4>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input 
                    name="title_content"
                    type="text" 
                    class="form-control" 
                    id="colFormLabel" 
                    placeholder="Digite um título p/ esta seção"
                    value="{{ $siteData->title_content }}"
                >
            </div>
        </div>

        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Texto</label>
            <div class="col-sm-10">
                <textarea 
                    name="text_content"
                    class="form-control" 
                    placeholder="Digite um Texto p/ esta seção" 
                    rows="4"
                    value="{{ $siteData->text_content }}"
                ></textarea>
            </div>
        </div>

        <input type="submit" value="Enviar" class="btn btn-primary mt-3 align-self-end">
        
        {{-- <a href="" class="btn btn-primary mt-3 align-self-end">Enviar</a> --}}
    </form>
</div>