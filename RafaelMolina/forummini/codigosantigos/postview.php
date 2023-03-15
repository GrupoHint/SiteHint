<?php
     include('connect.php');
?>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-12">
<?php
                include('message.php');
            ?>

                <div class="card-body">
                    <?php
                        // $posts = "SELECT * FROM posts";
                        $posts = "SELECT p.*, c.nometag AS cname FROM posts p,tag c WHERE c.idTag = p.tag_id";
                        $posts_run = mysqli_query($con, $posts);

                        if(mysqli_num_rows($posts_run) > 0){
                            foreach($posts_run as $post){
                                ?>
                                <div><h3> <?=$post['name']?> </h3></div><br>
                                <div><p>Posted at: <?=$post['created_at']?></p></div>
                                <div>
                                    <img src="./uploads/posts/<?= $post['image']?>" width="400px" height="400px">
                                </div><br>

                                <div>
                                    <p><?=$post['description']?></p>
                                </div><br>


                                <div>
                                    <h4>Tag: <?=$post['cname']?></h4>
                                </div>
                                <input type="button" action="createreplyform()" value="Reply">

                                <div class="replydisplay">
                                    <div id="replyform">
                                    <?php
                                            include('replyadd.php');
                                        ?>
                                    </div>
                                    <div id="replyview">
                                        <?php
                                            include('replyview.php');
                                        ?>
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