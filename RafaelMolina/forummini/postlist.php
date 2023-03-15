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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.post').on('click', function() {
                $("#openpost").load('postreply.php');
                $('.postlist').hide();
            });

            $('#closepost').on('click', function() {
                $("#openpost").empty();
                $('.post').html(result).show();  
            });
        });

    </script>   
</head>
<body>
<div>
    <?php 
        include('newpost.php');
    ?>
</div>

<div id="openpost">

</div>
<div class="postlist">
<?php
        
        $postlist = "SELECT * FROM newposts ORDER BY idnewpost";
        $postlist_run = mysqli_query($con, $postlist);

        if(mysqli_num_rows($postlist_run) > 0){
            foreach($postlist_run as $post){
                ?>
            <div class="post">
                <div><h3> <?=$post['name']?> </h3></div><br>
                <div><p>Posted at: <?=$post['created_at']?></p></div><br>
                <div><p>by: Jane Doe</p></div>
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

</body>
</html>

