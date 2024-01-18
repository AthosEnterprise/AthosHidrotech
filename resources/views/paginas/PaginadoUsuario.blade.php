@extends('paginas.index')
@section('body')

    <body class="w3-light-grey">

        <!-- Header -->
        <header class="w3-container" style="padding-top:22px;">
            <h5><b><i class="fa fa-dashboard"></i>Dashboard</b></h5>
        </header>

        <div class="w3-panel">
            <div class="w3-row-padding" style="margin:0">
                <div class="w3-container">
                    <h5>Consumo de Água/Últimos 5 Meses</h5>
                    <canvas id="myChart1" style="width:100%;max-width:1000px;"></canvas>
                </div>
            </div>
        </div>
        <div class="w3-panel">
            <div class="w3-container">
                <h5>Consumo de Água/Diário</h5>
                <canvas id="myChart" style="width:100%;max-width:1000px;"></canvas>
            </div>
        </div>
        <div class="w3-panel">
            <div class="w3-container">
                <h5>Consumo de Água/Diário</h5>
                <canvas id="myChart2" style="width:100%;max-width:1000px;"></canvas>
            </div>
        </div>
        <hr>
        </div><br><br><br>


    </body>
    @push('css3')
        <link rel="stylesheet" href="assets/CSS/hidrotech.css">
    @endpush
    @push('javascript')
        <script src="assets/js/teste.js"></script>
    @endpush
@endsection
