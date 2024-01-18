@extends('paginas.indexadm')
@section('body')
    <!-- Header -->
    <div class="form-signin mw-100 m-auto">
        <!-- Button trigger modal -->
        <button type="button" class="w3-right addMorador" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Adicionar Sensor
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" style="margin-top: 10%; color:black;" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Sensor</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-signin w-100 m-auto">
                        <form style="font-color: black;" method="POST" action="/cadastrarSensor">


                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                                    type="text" name="idAp" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Id Apartamento</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color:black;"
                                    type="number" name="idCaixaAgua" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Id Caixa</label>
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
                    <th scope="col">Id Apartamento</th>
                    <th scope="col">Id Caixa d'gua</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody style="text-align:center">
                <tr>
                    @foreach ($sensor as $chave => $item)
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['idAp'] }}</td>
                        <td>{{ $item['idCaixaAgua'] }}</td>
                        @csrf
                        <td>
                            <input class="btn" type="button" style="background-color: rgb(0, 0, 119);color:white"
                                value="editar" onclick="location.href='/sensor?id={{ $item['id'] }}'">
                            <input class="btn" type="button" style="background-color: rgb(174, 0, 0);color:white"
                                value="deletar" onclick="location.href='/deletar?id={{ $item['id'] }}&tipo=3'">
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
