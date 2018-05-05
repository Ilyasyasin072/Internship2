@extends('admin.index')
@section('content')
</br>
</br>
</br>
<div class="container">
        <div class="row">
                         <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Forecasting Regresi Linier</h4>
                                <p class="category">Hydrponics Assistant</p>
<?php
//variabel X yaitu dosis pupuk pada tanaman
$x = [
    1,
2.5,
4,
5,
7,
7.7,
5.95
];
//vairabel Y yaitu jumlah pupuk A dan B
$y = [
200,
500,
800,
1000,
1400,
1540,
1190
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Regresi Linier</title>
    <script src="Chart.min.js"></script>    
</head>
<body>
<canvas id="graph" width=500 height="150"></canvas>
<script>
    ctx = document.getElementById('graph');
    var chart = new Chart(ctx, {
        type : 'line',
        data: {
            labels: [<?=implode(",",$x)?>],
            datasets: [
                {
                label: 'Relasi Dosis Pupuk',
                data: [<?=implode(",", $x)?>],
                backgroundColor: 'rgba(12, 199, 132, 0.2)',
                borderWidth: 1
                },
                {
                label: 'Regresi Jumlah Pupuk',
                data: [<?=implode(",", $y)?>],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 1
                },
            ]
        }
    });
</script>
</body>
</html>
@endsection