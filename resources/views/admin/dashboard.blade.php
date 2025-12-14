@extends('admin.layouts.index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Usuarios Cadastrados</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="users">2 Usuarios</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Atualização da Base</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('executarpython') }}">Atualizar</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Itens Cadastrados</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('tables') }}">
                                {{ $contador }} Cadastrados
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Log de Importação</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('log') }}">
                                {{ $mercadors->count() }} Produtos Importados
                            </a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- GRAFICOS
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div> --}}
                <div class="container">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Selecione para Cadastrar na Tabela:
                        </div>
                        <form method="POST" action="{{ route('dashboard.create') }}">
                            @csrf
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Departamento</th>
                                            <th>Descrição</th>
                                            <th>Preço</th>
                                            <th>Promoção</th>
                                            <th>Data Cadastro</th>
                                            <th><button type="submit" class="btn btn-success">Cadastrar</button></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Departamento</th>
                                            <th>Descrição</th>
                                            <th>Preço</th>
                                            <th>Promoção</th>
                                            <th>Data Cadastro</th>
                                            <th><button type="submit" class="btn btn-success">Cadastrar</button></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($mercadors as $mercado)
                                            <tr>
                                                <td>{{ $mercado->codigoint }}</td>
                                                <td>{{ $mercado->depto }}</td>
                                                <td>{{ $mercado->descricao_completa }}</td>
                                                <td>R${{ $mercado->valor }}</td>
                                                <td>R${{ $mercado->PrecoOferta }}</td>
                                                <td>{{ $mercado->created_at->format('d/m/Y H:i') }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="mercados[]"
                                                            value="{{ $mercado->id_parcials }}">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
     

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {!! session('success') !!}
                                            </div>
                                        @endif
                                        @if (session('warning'))
                                            <div class="alert alert-warning">
                                                {!! session('warning') !!}
                                            </div>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            const checkboxes = document.querySelectorAll("input[name='mercados[]']:checked");
            if (checkboxes.length === 0) {
                e.preventDefault();
                alert("Selecione pelo menos um produto antes de cadastrar.");
            }
        });
    </script>
@endsection
