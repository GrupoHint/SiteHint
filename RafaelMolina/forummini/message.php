<?php

    if(isset($_SESSION['message'])){//serve como area de alerta para ver acoes do php deram certo ou errado, como exemplo o cadastro de games
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?=$_SESSION['message'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
        </div>    

        <?php
        unset($_SESSION['message']);
    }

?>