@extends('dashboard.structure.structureDashboard')

@section('content-page')
    <main class="content-site content-system-page" style="max-width: 90%; margin: 0 auto;">
        {{-- <div class="container"> --}}
            {{-- <div class="row"> --}}
                
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
                </table>

                <style>
                    ul.pagination{
                        margin-bottom: 0px;
                    }
                </style>

                <div class="d-flex">
                    <div class="group-buttons d-flex justify-content-between align-items-center w-100">
                        <a href="" class="btn btn-danger">Limpar dados</a>
                        
                        {{ $tbody->links() }}

                        <a href="{{route('dashboard.csvGenerate')}}" class="btn btn-primary">Imprimir CSV</a>
                    </div>
                </div>


            {{-- </div> --}}
        {{-- </div> --}}
    </main>
@endsection