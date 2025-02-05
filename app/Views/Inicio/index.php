<?php 
$session = session();
$primeiro_nome = $session->get('primeiro_nome');
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Seja Bem Vindo <?= $primeiro_nome ?></h1>
                </div>
            </div>
        </div>
    </div>

    <!--ICONES-->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
           
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Clientes</span>
                            <span class="info-box-number"><?= $total_de_clientes ?></span>
                        </div>
                    </div>
                </div>

            
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Funcionários</span>
                            <span class="info-box-number"><?= $total_de_funcionarios ?></span>
                        </div>
                    </div>
                </div>

            
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-box-open"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Produtos</span>
                            <span class="info-box-number"><?= $total_de_produtos ?></span>
                        </div>
                    </div>
                </div>
            </div>
    <!--GRAFICOS-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gráfico de Barras</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="chartjs-1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Gráfico de Pizza</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="chartjs-4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
new Chart(document.getElementById("chartjs-1"), {
    type: "bar",
    data: {
        labels: ["Clientes", "Funcionários", "Produtos"],
        datasets: [{
            label: "Total",
            data: [<?= $total_de_clientes ?>, <?= $total_de_funcionarios ?>, <?= $total_de_produtos ?>],
            backgroundColor: [
                "rgb(243, 8, 28)",
                "rgb(25, 160, 250)",
                "#ffc107"
            ],
            borderColor: [
                  "rgb(243, 8, 28)",
                "rgb(25, 160, 250)",
                "rgb(225, 236, 18)"
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

new Chart(document.getElementById("chartjs-4"), {
    type: "doughnut",
    data: {
        labels: ["Clientes", "Funcionários", "Produtos"],
        datasets: [{
            label: "Total",
            data: [<?= $total_de_clientes ?>, <?= $total_de_funcionarios ?>, <?= $total_de_produtos ?>],
            backgroundColor: [
                "rgb(243, 8, 28)",
                "rgb(25, 160, 250)",
                "#ffc107"
            ]
        }]
    }
});
</script>