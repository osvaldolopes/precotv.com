@extends('admin.layouts.default')
@section('content')
    <div class="col-lg-7">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Criar Conta</h3>
            </div>
            <div class="card-body">
                @foreach ($errors->all as $error)
                    {{ $error }}
                @endforeach
                <form method="POST" action="{{ route('register.registered') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputFirstName" type="text" name="name" value="{{ old('firstName') }}"
                                    placeholder="Enter your first name" />
                                <label for="inputFirstName">Primeiro Nome</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="inputLastName" type="text" name="last_name" value="{{ old('lastName') }}"
                                    placeholder="Enter your last name" />
                                <label for="inputLastName">Sobrenome</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" />
                        <label for="inputEmail">Email</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPassword" type="password"  name="password" required
                                    placeholder="Create a password" />
                                <label for="inputPassword">Senha</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="inputPasswordConfirm" type="password" required
                                    placeholder="Confirm password" />
                                <label for="inputPasswordConfirm">Confirmar Senha</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-0">
                        <div class="d-grid"><a></a>
                        <button type="submit" class="btn btn-primary btn-block">Criar Conta</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center py-3">
                <div class="small"><a href="login">Ja tenho Conta: Login</a></div>
            </div>
        </div>
    </div>
@endsection
