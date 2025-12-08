@extends('admin.layouts.index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tabelas de Produtos Cadastrados</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Aqui estão os produtos que aparecem nos monitores de cada departamento.
                    <a target="_blank" href="/">Preço TV</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produtos Cadastrados
                    <div class="card-body col-3">
                        <form method="GET" action="{{ route('tables') }}">
                            <select name="departamento" class="form-select" onchange="this.form.submit()">
                                <option value="65" {{ request('departamento') == 65 ? 'selected' : '' }}>Padaria</option>
                                <option value="38" {{ request('departamento') == 38 ? 'selected' : '' }}>Padaria/Ilha</option>
                                <option value="37" {{ request('departamento') == 37 ? 'selected' : '' }}>Açougue</option>
                                <option value="35" {{ request('departamento') == 35 ? 'selected' : '' }}>Frios</option>
                                <option value="32" {{ request('departamento') == 32 ? 'selected' : '' }}>FLV</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Promoção</th>
                                <th>Data Cadastro</th>
                                <th><button type="button" class="btn btn-danger"> Deletar</button></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Codigo</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                                <th>Promoção</th>
                                <th>Data Cadastro</th>
                                <th><button type="button" class="btn btn-danger"> Deletar</button></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($mercador_views as $mercador_view)
                                <tr>
                                    <td>{{ $mercador_view->prod_cod }}</td>
                                    <td>{{ $mercador_view->prod_description }}</td>
                                    <td>R${{ $mercador_view->valor }}</td>
                                    <td>R${{ $mercador_view->PrecoOferta }}</td>
                                    <td>{{ $mercador_view->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
