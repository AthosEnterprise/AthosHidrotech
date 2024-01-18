@extends('paginas.indexadm')
@section('body')
    <!-- Header -->
    <div class="form-signin mw-100 m-auto">

        <body class="w3-light-grey">
            <h1 style="  margin-top: 50px; text-align: center">Editar Apartamento</h1>

            <form style="font-color: black;" method="POST" action="/salvarapartamento">
                <div class="editar">
                    <div class="form-floating mb-3" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;" type="text"
                            name="id" class="form-control  formADD " id="floatingInput"
                            value="{{ $apartamento['id'] }}">
                        <label for="floatingInput" style="color: black">Id</label>
                    </div>
                    <div class="form-floating mb-3" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;" type="text"
                            name="nomeCondomino" class="form-control  formADD " id="floatingInput"
                            value="{{ $apartamento['nomeCondomino'] }}">
                        <label for="floatingInput" style="color: black">Nome Condôminio</label>
                    </div>
                    <br>
                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                            type="text" name="numeroAp" class="form-control formADD" id="floatingPassword"
                            value="{{ $apartamento['numeroAp'] }}">
                        <label for="floatingPassword" style="color: black">Número Apartamento</label>
                    </div><br>
                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                            type="text" name="numeroSensor" class="form-control formADD" id="floatingPassword"
                            value="{{ $apartamento['numeroSensor'] }}">
                        <label for="floatingPassword" style="color: black">Número Sensor</label>
                    </div><br>
                    <div class="form-floating" style="color: black">
                        <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;" type="text"
                            name="numeroAndar" class="form-control formADD" id="floatingPassword"
                            value="{{ $apartamento['numeroAndar'] }}">
                        <label for="floatingPassword" style="color: black">Número Andar</label>
                    </div><br>
                    <div class="form-floating" style="color: black">
                        <select name="numeroBloco" class="form-control formADD">
                            @foreach (\App\Models\Bloco::get() as $valor)
                                <option value="{{ $valor->id }}">{{ $valor->numero }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    @csrf
                    <button class="btn w-100 py-2 salvarEdit" type="submit"
                        style="background-color: rgb(0, 0, 119);color:white">Salvar</button>
                </div>
            </form>
    </div>
    </body>

    @push('css3')
        <link rel="stylesheet" href="assets/CSS/hidrotech.css">
    @endpush
@endsection
