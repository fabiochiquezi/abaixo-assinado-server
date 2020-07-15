@extends('dashboard.structure.structureDashboard')

@section('content-page')

    <main class="content-site content-system-page" style="max-width: 90%; margin: 0 auto;">
                
        @if($errors->all())
            <div class="alert alert-danger w-100 mb-4">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table class="table mb-4">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    @foreach($thead as $th)
                        <th>{{$th->nome}}</th>
                    @endforeach
                </tr>
            </thead>

            <tbody>
                @foreach($tbody as $tr)
                    <tr>
                        <td>{{$tr->id}}</td>

                        @foreach($thead as $td)
                            <?php 
                                $properti = strtolower(
                                    preg_replace(
                                        '/[^a-z0-9]/i', '_', $td->nome
                                        )
                                    )
                            ?>
                            <td>{{$tr->$properti}}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if(!count($tbody))
            <p class="h4 text-center mt-5 mb-5 d-block">Sem nenhum dado no momento</p>
        @endif

        <style>
            ul.pagination{
                margin-bottom: 0px;
            }
        </style>

        <div class="d-flex">
            <div class="group-buttons d-flex justify-content-between align-items-center w-100">
                <a href="{{ route('dashboard.cleanData') }}" class="btn btn-danger">Limpar dados</a>
                
                {{ $tbody->links() }}

                <a href="{{route('dashboard.csvGenerate')}}" class="btn btn-primary">Imprimir CSV</a>
            </div>
        </div>

    </main>
@endsection