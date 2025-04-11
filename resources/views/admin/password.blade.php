@extends('admin.layouts.default')
@section('content')
    <div class="col-lg-5">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Recuperação de Senha</h3>
            </div>
            <div class="card-body">
                <div class="small mb-3 text-muted">Digite seu endereço de e-mail e lhe enviaremos um link para redefinir sua
                    senha.</div>
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <a class="small" href="login">Retornar ao login</a>
                        <a class="btn btn-primary" href="login">Reset Senha</a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="register">Não tenho conta? Criar!</a></div>
            </div>
        </div>
    </div>
@endsection
