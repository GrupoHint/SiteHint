<?php 

    //Conecta LocalHost
    $srvRoot = "localhost";
    $loginRoot = "root";
    $passRoot = "";
    $dbNameRoot = "forumini";

    $con = mysqli_connect($srvRoot, $loginRoot, $passRoot, $dbNameRoot) or die ("Não foi possivel realizar a conexão");

    mysqli_set_charset($con, "utf8");
    
?>