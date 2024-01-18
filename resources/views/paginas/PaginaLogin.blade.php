@extends('paginas.indexlogin')
@section('body')


    <body class="w3-light-grey">

        <div class="w3-bar w3-top w3-large navGeral" style="z-index:4">
            <span class="w3-bar-item w3-left "><img src="assets/IMG/logo.png" class="w3-circle w3-margin-left logoNav"></span>
        </div>

        <div class="form-signin w-100 m-auto">
            <form style="margin-top:300px" method="POST" action="/Logar">
                <h1 class="h3 mb-3 fw-normal">
                    <center>LOGIN</center>
                </h1>

                <div class="form-floating ">
                    <input type="email" class="form-control formLogin" placeholder="name@example.com" name="email"
                        id="usuario" required autocomplete="off">
                    <label for="floatingInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control formLogin" placeholder="Password" name="password"
                        id="senha">
                    <label for="floatingPassword">Senha</label>
                </div>
                <!-- Áerea de manter login ou redefinir senha -->
                <div class="form-group">
                    <label class="form-remember">
                        <input type="checkbox">Manter conectado
                    </label>
                    <a class="form-recovery" href="/ConfirmEmail">Esqueceu a senha?</a>
                </div> <br>

                @csrf
                <button class="btn w-100 py-2 button-login" type="submit">Login </button>
                <p class="mt-5 mb-3 text-body-secondary" _msttexthash="84994" _msthash="13">© 2023 ATHOS</p>
            </form>
        </div>
        @if (Session::has('mensagem'))
            <div class="alert alert-info">{{ Session::get('mensagem') }}</div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    </body>

    @push('css1')
        <link rel="stylesheet" href="assets/CSS/hidrotech.css">
    @endpush
@endsection
