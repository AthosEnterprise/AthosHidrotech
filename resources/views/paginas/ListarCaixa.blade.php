@extends('paginas.indexadm')
@section('body')
    <!-- Header -->
    <div class="form-signin mw-100 m-auto">
        <!-- Button trigger modal -->
        <button type="button" class="w3-right addMorador" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Adicionar Caixa
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" style="margin-top: 10%; color:black;" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Caixa</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-signin w-100 m-auto">
                        <form style="font-color: black;" method="POST" action="/cadastrarCaixa">



                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;"
                                    type="number" name="capacidade" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Capacidade</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;"
                                    type="number" name="nivelagua" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Nível Água</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;"
                                    type="number" name="numeroSensor" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Número Sensor</label>
                            </div><br>
                            @csrf
                            <button class="btn w-100 py-2 teste" type="submit"
                                style="background-color: rgb(0, 0, 119);color:white">Cadastrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <form style="margin-top:100px">
        <table class="table table-striped table-hover">
            <thead style="text-align:center">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Capacidade</th>
                    <th scope="col">Nivel de Agua</th>
                    <th scope="col">Numero do sensor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody style="text-align:center">
                <tr>
                    @foreach ($caixa as $chave => $item)
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['capacidade'] }}</td>
                        <td>{{ $item['nivelAgua'] }}</td>
                        <td>{{ $item['numeroSensor'] }}</td>
                        @csrf
                        <td>
                            <input class="btn" type="button" style="background-color: rgb(0, 0, 119);color:white"
                                value="editar" onclick="location.href='/caixadagua?id={{ $item['id'] }}'">
                            <input class="btn" type="button" style="background-color: rgb(174, 0, 0);color:white"
                                value="deletar" onclick="location.href='/deletar?id={{ $item['id'] }}&tipo=4'">
                        </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </form>
    </div>



    </body>
    @push('css3')
        <link rel="stylesheet" href="assets/CSS/hidrotech.css">
    @endpush
@endsection
