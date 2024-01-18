@extends('paginas.indexadm')
@section('body')

<!-- Header -->
<div class="form-signin mw-100 m-auto">

<body class="w3-light-grey">
    <h1 style="margin-top: 50px;text-align: center">Editar Caixa D'água</h1>


    <form style="font-color: black;" method="POST" action="/salvarcaixadagua">
        <div class="editar">

        <div class="form-floating mb-3" style="color: black">
            <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;"
                type="text" name="id" class="form-control  formADD " id="floatingInput" value="{{$caixadagua['id']}}">
            <label for="floatingInput" style="color: black">Id</label>
        </div>
        <div class="form-floating mb-3" style="color: black">
            <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;"
                type="text" name="capacidade" class="form-control  formADD " id="floatingInput" value="{{$caixadagua['capacidade']}}">
            <label for="floatingInput" style="color: black">Capacidade</label>
        </div>
        <br>
        <div class="form-floating" style="color: black">
            <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;"
                style="color: black" type="text" name="nivelAgua" class="form-control formADD"
                id="floatingPassword" value="{{$caixadagua['nivelAgua']}}">
            <label for="floatingPassword" style="color: black">Nivel de Agua</label>
        </div><br>
        <div class="form-floating" style="color: black">
            <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;"
                style="color: black" type="text" name="numeroSensor" class="form-control formADD"
                id="floatingPassword" value="{{$caixadagua['numeroSensor']}}">
            <label for="floatingPassword" style="color: black">Número Sensor</label>
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