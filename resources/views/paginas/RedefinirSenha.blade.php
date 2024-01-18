@extends('paginas.indexlogin')
@section('body')

    <body class="w3-light-grey">
        <!-- Logo da empresa -->
        <div class="w3-bar w3-top w3-large navGeral" style="z-index:4">
            <span class="w3-bar-item w3-left "><img src="assets/IMG/logo.png" class="w3-circle w3-margin-left logoNav"></span>
        </div>

        <!-- Formulario de Login -->
        <div class="form-signin w-100 m-auto">
            <form style="margin-top:300px" method="POST" action="/login">
                <h1 class="h3 mb-3 fw-normal text-center">
                    Redefinir Senha
                </h1>

                <p class="text-break fs-6 text-center">Insira uma nova senha para conta</p>

                <!-- Inserir o email -->
                <div class="form-floating ">
                    <input type="text" class="form-control formLogin" placeholder="name@example.com" name="usuario"
                        id="usuario">
                    <label for="floatingInput">Nova senha </label>
                </div><br>

                <!-- Inserir a senha -->
                <div class="form-floating">
                    <input type="password" class="form-control formLogin" placeholder="Password" name="senha"
                        id="senha">
                    <label for="floatingPassword">Confirmar Nova Senha</label>
                </div>

                <!-- Botão de logar -->
                @csrf
                <button class="btn w-100 py-2 button-login" type="submit">Redefinir senha </button>
                <p class="mt-5 mb-3 text-body-secondary" _msttexthash="84994" _msthash="13">© 2023-2024 ATHOS</p>
            </form>
        </div>

    </body>
    @push('css1')
        <link rel="stylesheet" href="assets/CSS/hidrotech.css">
    @endpush
@endsection
