<!DOCTYPE html>
<html>

<head>
    <title>HIDROTECH</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('css3')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body>
    <div class="w3-bar w3-top w3-black w3-large navGeral" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"
            onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <a href="/homeadm"><span class="w3-bar-item w3-left"><img src="assets/IMG/logo.png"
                    class="w3-circle w3-margin-left logoNav"></span></a>
    </div>

    <nav class="w3-sidebar w3-collapse w3-animate-left navbar" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container w3-row">
            <div class="w3-col s4">

            </div>
            <div class="w3-col s8 w3-bar">
                <span>Bem Vindo,<br>{{ Auth::guard('administrador')->user()->nome }} </span><br>
                <a href="#" class="w3-bar-item w3-button" data-bs-toggle="modal"
                    data-bs-target="#modalUsuario"><img style="height: 20px" src="assets/IMG/perfil.png"
                        alt=""></a>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5> Consumos</h5>
        </div>
        <div class="w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black"
                onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            <a href="/homeadm" class="w3-bar-item w3-button w3-padding"><img style="height: 15px"
                    src="assets/IMG/agua.png" alt="">
                Água</a> <br>
            <div class="w3-container">
                <h5> Listar</h5>
            </div>
            <a href="Listar" class="w3-bar-item w3-button w3-padding"><img style="height: 20px"
                    src="assets/IMG/moradores.png" alt="">
                Condôminos</a>
            <a href="ListarCaixa" class="w3-bar-item w3-button w3-padding"><img style="height: 15px"
                    src="assets/IMG/caixa.png" alt="">
                Caixas D'aguas</a>
            <a href="ListarSensor" class="w3-bar-item w3-button w3-padding"><img style="height: 15px"
                    src="assets/IMG/sensor.png" alt="">
                Sensores</a>
            <a href="ListarApartamento" class="w3-bar-item w3-button w3-padding"><img style="height: 15px"
                    src="assets/IMG/apartamento.png" alt="">
                Apartamentos</a>
            <a href="ListarBloco" class="w3-bar-item w3-button w3-padding"><img style="height: 15px"
                    src="assets/IMG/apartamento.png" alt="">
                Bloco</a>

        </div>
    </nav>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-collapse" style="margin-left:300px; margin-top:90px;" style="color:rgb(255, 255, 255)">

        <div class="modal fade" style="margin-top: 10%; color:black;" id="modalUsuario" tabindex="-1"
            aria-labelledby="modalUsuarioLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalUsuarioLabel"><strong>Área do Usuário</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container" style="text-align: center">
                            <img src="assets/IMG/user.png" alt=""
                                style="width: 200px; height: 200px; border-radius: 100%;">
                        </div>
                        <div class="form-signin w-100 m-auto">
                            <form style="font-color: black;" method="POST" action="/editarDados">

                                <div class="form-floating mb-3" style="color: black">
                                    <input
                                        style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px; color: black;"
                                        type="text" name="nome" class="form-control  formADD "
                                        id="floatingInput" value="{{ Auth::guard('administrador')->user()->nome }}">
                                    <label for="floatingInput" style="color: black">Nome</label>
                                </div>
                                <br>
                                <div class="form-floating" style="color: black">
                                    <input style="border: solid rgb(29, 28, 28) 1px; border-radius: 10px;"
                                        style="color: black" type="email" name="email"
                                        class="form-control formADD" id="floatingPassword"
                                        value="{{ Auth::guard('administrador')->user()->email }}">
                                    <label for="floatingPassword" style="color: black">E-mail</label>
                                </div><br>
                                <div class="container" style="text-align: center;  width: 150px;">
                                    <button class="btn py-2 teste" type="button"
                                        style="background-color: rgb(167, 0, 0);color:white;  width: 150px;"
                                        onclick="location.href='/logout'">Sair</button>
                                    @csrf
                                    <button class="btn py-2 teste" type="submit"
                                        style="background-color: rgb(0, 0, 119);color:white;  width: 150px;">Editar</button>

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @yield('body')

        <!-- End page content -->
    </div>
    <center>
        <!-- Footer -->
        <footer class="w3-container w3-padding-16 w3-light-grey footer">
            <p>Desenvolvido por ATHOS</p>
        </footer>
    </center>
</body>

@stack('javascript')

</html>
