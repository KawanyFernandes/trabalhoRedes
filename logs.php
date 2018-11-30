<?php
/**
 * Created by PhpStorm.
 * User: kawany.fernandes
 * Date: 28/11/2018
 * Time: 13:06
 */

include "dbFechadura.php";
include "connection.php";
session_start();
?>

<html>
<head>
    <title>Fechadura</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <i class="far fa-hand-rock"></i>
            <a class="navbar-brand" href="#">Fechadura</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 100px">
    <?php
    echo "<h3>Usuario: ".$_SESSION['usuario']['nome']."</h3>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead>";
        echo "<tr>";
            echo "<th> RFID";
            echo "</th>";
            echo "<th> Data e hora de acesso";
            echo "</th>";
        echo "</tr>";
    $logs = selectLog($conexao, $_SESSION['usuario']['idpessoa']);
    foreach ($logs as $log) {
        echo "<tbody>";
            echo "<tr>";
                echo "<td>" . $log['uid'] . "</td>";
                echo "<td>" . $log['datahora'] . "</td>";
            echo "</tr>";
        echo "</tbody>";
    }
    ?>
    <tr>
        <td><a class="btn btn-primary" href="sair.php">Sair</a></td>
    </tr>
    </table>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>


</html>
