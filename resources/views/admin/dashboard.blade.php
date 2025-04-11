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
                        <div class="card-body">Produtos Promoção</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">10 Promoção</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Itens Cadastrados</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="tables">5 Produtos</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- GRAFICOS
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
                                    </div>
                                    -->
                <div class="container">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Selecione para Cadastrar na Tabela:
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
                                        <th><button type="button" class="btn btn-success">Cadastrar</button></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descrição</th>
                                        <th>Preço</th>
                                        <th>Promoção</th>
                                        <th>Data Cadastro</th>
                                        <th><button type="button" class="btn btn-success">Cadastrar</button></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->prod_id }}</td>
                                            <td>{{ $product->prod_description }}</td>
                                            <td>R${{ $product->prod_price }}</td>
                                            <td>R${{ $product->prod_promo }}</td>
                                            <td>{{ $product->created_at->format('d/m/Y H:i') }}</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault" {{ $product->prod_checked }}>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
