<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <h1>DATA PENDUDUK Di Pulau Jawa</h1><br>
    <style>
        table {
        font-family: sans-serif;
        color: #444;
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #f2f5f7;
        }   
 
        #nota tr th{
        background: #35A9DB;
        color: #fff;
        font-weight: normal;
        }
 
        #nota, th, td {
        padding: 8px 20px;
        text-align: center;
        }
 
        #nota tr:hover {
        background-color: #f5f5f5;
        }
 
        #nota tr:nth-child(even) {
        background-color: #f2f2f2;
        }   
        
        h1,
        .text-center{
            text-align:center;
        }
        .abandoned:hover,
        .abandoned{
            background-color : white;
        }
    </style>
</head>



<?php
$jml1 = $_GET['jml1'];
$jml2 = $_GET['jml2'];
$jml3 = $_GET['jml3'];
$datas = [
    ['no' =>1,
    'Provinsi' => 'JAWA ' . $_GET['Provinsi1'] . '<br>',
    'harga' => $jml1
],
[
    'no' =>2,
    'Provinsi' => 'JAWA ' . $_GET['Provinsi2'] . '<br>',
    'harga' => $jml2
],
[
    'no' =>3,
    'Provinsi' => 'JAWA ' . $_GET['Provinsi3'] . '<br>',
    'harga' => $jml3
],
];

$total = 0;

?>
<body>
    <table id="nota">
        <tr>
            <th>No.</th>
            <th>Provinsi</th>
            <th>Penduduk</th>
            <th>Total Penduduk</th>
        </tr>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td class="text-center"><?= $data['no'];?></td>
            <td><?= $data['Provinsi']; ?></td>
            <td class="text-center"><?=number_format($data['harga'],0,",","."); ?></td>
            <?php $total +=$data['harga']?>
            <td class="text-center"><?=number_format($data['harga'],0,",","."); ?></td>
        </tr>

    <?php endforeach; ?>
        <tr>
            <td colspan="2" rowspan="3" class="abandoned"></td>
            <td>Total Penduduk</td>
            <td class ="text-center"><?= number_format($total,0,",","."); ?></td>
        </tr>
    </tr>
    </table>
        <form method="post" action="2-check.php">
            <input type="hidden" name="logout" value="1"/>
            <input type="submit" value="Logout"/>
        </form>
        </body> 

      

</html>