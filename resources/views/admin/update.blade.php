@extends('admin.layouts.index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Atualiza Produtos Cadastrados</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('tables') }}">Produtos</a></li>
                <li class="breadcrumb-item active">Atualizar</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    Aqui você pode alterar a descrição do produto e ela não é alterada na importação.
                    <a target="_blank" href="/precotv.com/public/65?page=1">Preço TV</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">                    
                    <i class="fas fa-table me-1"></i>
                    Produtos Cadastrados
                    <form method="GET" action="{{ route('update') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="number" name="name"
                                        value="{{ old('firstName') }}" placeholder="Codigo não importado" />
                                    <label for="inputFirstName">Código Produto</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" name="last_name"
                                        value="{{ old('lastName') }}" placeholder="Preço não importado" />
                                    <label for="inputLastName">Preço</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" type="text" name="email"
                                value="{{ old('email') }}" placeholder="Entre com uma descrição" />
                            <label for="inputEmail">Descrição</label>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputLastName" type="number" name="last_name"
                                        value="{{ old('lastName') }}" placeholder="Departamento não importado" />
                                    <label for="inputLastName">Departamento</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><a></a>
                                <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
