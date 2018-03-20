<?php
    session_start();
    if(!isset($_SESSION["loggedin"])){
        header("Location: http://127.0.0.1/Hack/Login");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <base href="http://127.0.0.1/Hack/">
</head>
<body>
    <!-- Navbar -->    
        <?php include 'template/nav.php';?>
    <!-- navbar end -->
    <!-- Body -->
    <div class="jumbotron">
        <h1 class="text-center">Dashboard</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active"href="#overview" data-toggle="tab">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#database" data-toggle="tab">Database</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane fade in active show">
                            <div class="card-body">
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <canvas id="myChart1" height="40vh" width="80vw"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <canvas id="myChart2" height="40vh" width="80vw"></canvas>
                                    </div>
                                </div>
                                </div>
                                <!-- facebook -->
                                <br>
                            </div>
                        </div>
                        
                        <div id="database" class="tab-pane fade">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="m-card">
                                        More data will be here
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        
                        </div>
                        <!-- Tutorial END HERE -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body END HERE -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        var ctx = {};
        ctx[0] = document.getElementById("myChart1");
        ctx[1] = document.getElementById("myChart2");
        var myChart = new Chart(ctx[0], {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19],
                datasets: [{
                    label: 'Rajasthan',
                    data: [112,144,188,123,152,156,155,177,122,112,144,188,123,152,156,411,155,177,122],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 5
                }]
            }
        });
        var myChart = new Chart(ctx[1], {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7,8,9,10],
                datasets: [{
                    label: 'New Delhi',
                    data: [123,152,156,155,177,122,511,112,144,188],
                    backgroundColor: [
                        'rgba(0, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(0,99,132,1)',
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>