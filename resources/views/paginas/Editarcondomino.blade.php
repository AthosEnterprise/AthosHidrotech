@extends('paginas.indexadm')
@section('body')
    <!-- Header -->
    <div class="form-signin mw-100 m-auto">

        <body class="w3-light-grey">
            <h1 style="margin-top: 50px;text-align: center">Editar Moradores</h1>

            <form style="font-color: black;" method="POST" action="/salvarcondomino">
                <div class="editar">

                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;" type="text"
                            name="id" class="form-control  formADD " id="nome" value="{{ $condominos['id'] }}">
                        <label for="floatingInput" style="color: black">Id</label>
                    </div><br>

                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;" type="text"
                            name="nome" class="form-control  formADD " id="nome" value="{{ $condominos['nome'] }}">
                        <label for="floatingInput" style="color: black">Condômino</label>
                    </div>
                    <br>
                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                            type="email" name="email" class="form-control formADD" id="floatingPassword"
                            value="{{ $condominos['email'] }}">
                        <label for="floatingPassword" style="color: black">E-mail</label>
                    </div><br>
                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;" type="number"
                            name="numeroAp" class="form-control formADD" id="floatingPassword"
                            value="{{ $condominos['numeroAp'] }}">
                        <label for="floatingPassword" style="color: black">Número do Apartamento</label>
                    </div><br>
                    @csrf
                    <button class="btn w-100 py-2 salvarEdit" type="submit"
                        style="background-color: rgb(0, 0, 119);color:white">Salvar</button>
                </div>
            </form>
        </body>

        @push('css3')
            <link rel="stylesheet" href="assets/CSS/hidrotech.css">
        @endpush
    @endsection
