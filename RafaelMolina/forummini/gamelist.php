<?php
     include('connect.php');
?>

<div class="container-fluid px-4"> <!--esse arquivo mostra uma lista dos jogos cadastrados e o conteudo salvo. serve mais para visualizar se funcionou o newpost.php-->
    <div class="row">
        <div class="col-md-12">
            <?php
                include('message.php');
            ?>

                <div class="card-body">
                    <?php
                        // $posts = "SELECT * FROM posts";
                        $gamel = "SELECT p.*, c.name AS cname FROM game p,categories c WHERE c.id = p.category_id";
                        // $gamel = "SELECT *FROM game ORDER BY idgame DESC";
                        $gamel_run = mysqli_query($con, $gamel);

                        if(mysqli_num_rows($gamel_run) > 0){
                            foreach($gamel_run as $gamel){
                                ?>
                                <div><h3> <?=$gamel['gameName']?> </h3></div><br>
                                
                                <div>
                                    <img src="./uploads/posts/<?= $gamel['imageback']?>" width="auto" height="400px">
                                </div><br>
                                <div>
                                    <img src="./uploads/posts/<?= $gamel['imagebanner1']?>" width="auto" height="400px">
                                </div><br>
                                <div>
                                    <img src="./uploads/posts/<?= $gamel['imagebanner2']?>" width="auto" height="400px">
                                </div><br>
                                <div>
                                    <img src="./uploads/posts/<?= $gamel['imagebanner3']?>" width="auto" height="400px">
                                </div><br>
                                <div>
                                    <img src="./uploads/posts/<?= $gamel['imageIcon']?>" width="auto" height="400px">
                                </div><br>
                                

                                <div>
                                    <p><?=$gamel['descricao']?></p>
                                </div><br>


                                <div>
                                    <h4>Categoria: <?=$gamel['cname']?></h4>
                                </div>
                                
                                </div>


                            <?php    
                            }
                        }else{
                            ?>
                                <div><h2>No posts found!</h2></div>
                            <?php
                        }

                    ?>


                </div>

                </div>
            </div>
        </div>
    </div>
</div>