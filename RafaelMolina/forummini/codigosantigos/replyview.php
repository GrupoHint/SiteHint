<?php
     include('connect.php');
?>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-12">
            <?php
                include('message.php');
            ?>

            <div class="card">

                <div class="card-body">
                    <?php
                        // $posts = "SELECT * FROM posts";
                        $replies = "SELECT r.*, p.idpost AS pname FROM reply r,posts p WHERE p.idpost = 1";
                        $replies_run = mysqli_query($con, $replies);

                        if(mysqli_num_rows($replies_run) > 0){
                            foreach($replies_run as $reply){
                                ?>
                                <div><h3> <?=$reply['name']?> </h3></div><br>
                                <div><p>Posted at: <?=$reply['created_at']?></p></div>
                                <div>
                                    <img src="./uploads/posts/<?= $reply['image']?>" width="400px" height="400px">
                                </div><br>

                                <div>
                                    <p><?=$reply['description']?></p>
                                </div><br>

                                <input type="button" action="createreplyform()" value="Reply">


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
<script src="script.js"></script>