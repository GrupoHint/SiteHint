<?php
     include('connect.php');
?>
<div class="container-fluid px-4"><!-- esse documento foca um post pre selecionado e mostra seu conteudo e replies. é carregado em postlist ao se clicar qualquer div class post-->
    <div class="row">
        <div class="col-md-12">
            <?php
                include('message.php');
            ?>

                <div class="card-body">
                    
                    <?php
                        
                        $postfocus=1;
                        // $posts = "SELECT * FROM posts";
                        $posts = "SELECT p.*, c.nometag AS cname FROM newposts p,tag c WHERE c.idTag = p.tag_id AND idnewpost=1";
                        $posts_run = mysqli_query($con, $posts);
                        while($row = mysqli_fetch_array($posts_run)){
                        ?>      
                                <div id="closepost">X</div>
                                <div><h3> <?=$row["name"]?> </h3></div><br>
                                <div><p>Posted at: <?=$row["created_at"]?></p></div>
                                <div>
                                    <img src="./uploads/posts/<?= $row["image"]?>" width="400px" height="400px">
                                </div><br>

                                <div>
                                    <p><?=$row["description"]?></p>
                                </div><br>


                                <div>
                                    <h4>Tag: <?=$row["cname"]?></h4>
                                </div>
                                <input type="button" action="showreplyform()" value="Reply"> 
                            
                        <?php } ?>
                                        

                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">

                <div class="card-body">

                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            
                            <div class="col-md-6 mb-3">
                                <input type="text" value="11" name="idpost" hidden>
                                <label for="">User</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" required class="form-control" rows="$"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="replyadd" class="btn btn-primary">Post Reply</button>
                            </div>
                        </div>
                </form>

                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

                <div class="card-body">
                
                <?php
                    // $posts = "SELECT * FROM posts";
                    $replies = "SELECT * FROM reply WHERE idpost = 11";
                    $replies_run = mysqli_query($con, $replies);

                    if(mysqli_num_rows($replies_run) > 0){
                        foreach($replies_run as $reply){
                            ?>
                            <div><h3>User: <?=$reply['name']?> </h3></div><br>
                            <div><p>Posted at: <?=$reply['created_at']?></p></div>
                            <div>
                                <img src="./uploads/posts/<?= $reply['image']?>" width="400px" height="400px">
                            </div><br>

                            <div>
                                <p><?=$reply['description']?></p>
                            </div><br>

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
    </div><!--fim row-->

</div>