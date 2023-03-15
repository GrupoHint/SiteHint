<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div><!--essa pagina contem apenas a parte de adicionar jogos ao db, que o adm faria pelo dashboard-->
        <?php
            include('gameadd.php');
        ?>    
   <div>

   <div>
        <?php
            include('gamelist.php');
        ?>
   </div>
   <script src="script.js"></script>
</body>
</html>