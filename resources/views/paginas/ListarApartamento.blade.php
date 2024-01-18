@extends('paginas.indexadm')
@section('body')
    <!-- Header -->
    <div class="form-signin mw-100 m-auto">
        <!-- Button trigger modal -->
        <button type="button" class="w3-right addMorador" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Adicionar Apartamento
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" style="margin-top: 10%; color:black;" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Apartamento</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-signin w-100 m-auto">
                        <form style="font-color: black;" method="POST" action="/cadastrarApartamento">

                            <div class="form-floating mb-3" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;"
                                    type="text" name="nomeCondomino" class="form-control  formADD " id="floatingInput">
                                <label for="floatingInput" style="color: black">Nome Condôminio</label>
                            </div>
                            <br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                                    type="text" name="numeroAp" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Número Apartamento</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                                    type="text" name="numeroSensor" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Número Sensor</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;" style="color: black"
                                    type="text" name="numeroAndar" class="form-control formADD" id="floatingPassword">
                                <label for="floatingPassword" style="color: black">Número Andar</label>
                            </div><br>
                            <div class="form-floating" style="color: black">
                                    <select name="numeroBloco"  class="form-control formADD">
                                        @foreach(\App\Models\Bloco::get() as $valor)
                                        <option value="{{$valor->id}}">{{$valor->numero}}</option>
                                        @endforeach
                                    </select>
                                <label for="floatingPassword" style="color: black">Número do Bloco</label>
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
                    <th scope="col">Nome Condominio</th>
                    <th scope="col">Número Apartamento</th>
                    <th scope="col">Num Andar</th>
                    <th scope="col">Num Bloco</th>
                    <th scope="col">Num Sensor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody style="text-align:center">
                <tr>
                    @foreach ($apartamento as $chave => $item)
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nomeCondomino }}</td>
                        <td>{{ $item->numeroAp }}</td>
                        <td>{{ $item->numeroAndar }}</td>
                        <td>{{ isset($item->bloco) ? $item->bloco->numero : '' }}</td>
                        <td>{{ $item->numeroSensor }}</td>
                        @csrf
                        <td>
                            <input class="btn" type="button" style="background-color: rgb(0, 0, 119);color:white"
                                value="editar" onclick="location.href='/apartamento?id={{ $item->id }}'">
                            <input class="btn" type="button" style="background-color: rgb(174, 0, 0);color:white"
                                value="deletar" onclick="location.href='/deletar?id={{ $item->id }}&tipo=2'">
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
