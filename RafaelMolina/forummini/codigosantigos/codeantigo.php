<?php
    include('connect.php');

    if(isset($_POST['gameadd'])){ //pegar os elementos do form em gameadd.php e passar para variaveis
        $empresa_id = $_POST['empresa_id'];
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $meta_keyword = $_POST['meta_keyword'];
       
        // $imagebanner = $_FILES['imagebanner']['name'];// linha 12-14 cria um name para o arquivo e a extensao 
        // $image_extension1 = pathinfo($imagebanner, PATHINFO_EXTENSION);
        // $filename1 = time(). '.' .$image_extension1;

        // $imageicon = $_FILES['imageicon']['name'];// linha 16-18 mesmo que o do baner mas este é para o icone na listgem de jogos
        // $image_extension2 = pathinfo($imageicon, PATHINFO_EXTENSION);
        // $filename2 = time(). '.' .$image_extension2;
        $uploadimagebannerTo = null;
        if(isset($_FILES['imagebanner'])){
        $imagebanner_image_name = $_FILES['imagebanner']['name'];
        $imagebanner_image_size = $_FILES['imagebanner']['size'];
        $imagebanner_image_tmp = $_FILES['imagebanner']['tmp_name'];
        $uploadimagebannerTo = './uploads/posts/'.$imagebanner_image_name;
        $moveimagebanner = move_uploaded_file($imagebanner_image_tmp,$uploadimagebannerTo);
        }

        $uploadimageiconTo = null;
        if(isset($_FILES['imageicon'])){
        $imageicon_image_name = $_FILES['imageicon']['name'];
        $imageicon_image_size = $_FILES['imageicon']['size'];
        $imageicon_image_tmp = $_FILES['imageicon']['tmp_name'];
        $uploadimageiconTo = './uploads/posts/'.$imageicon_image_name;
        $moveimageicon = move_uploaded_file($imageicon_image_tmp,$uploadimageiconTo);
        }
         
        //linha 21-23 sao para conectar ao DB
        $query = "INSERT INTO game (idEmpresa,category_id,gameName,slug,description,imagebanner,imageIcon,keyword) VALUES 
        ('$empresa_id','$category_id','$name','$slug','$description','$imagebanner_image_name','$imageicon_image_name','$meta_keyword')";
        $query_run = mysqli_query($con,$query);

        //linha 26-34 sao para dar upload do arquivo de imagem banner para a pasta no banco de dados
        // if($query_run){
        //     move_uploaded_file($_FILES['imagebanner']['tmp_name'], './uploads/posts/'.$filename1);
        //     $_SESSION['message'] = "Post Imagem banner Sucessful";
        //     header('gameadd.php');
        //     // exit(0);
        // }else{
        //     $_SESSION['message'] = "Post Imagem banner Failed";
        //     header('gameadd.php');
        //     // exit(0);
        // }
        //linha 37-46 sao para dar upload do arquivo de imagem icone para a pasta no banco de dados
        
    }

    if(isset($_POST['postadd'])){
        $tag_id = $_POST['tag_id'];
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];

        $meta_title = $_POST['meta_title'];
        $meta_description = $_POST['meta_description'];
        $meta_keyword = $_POST['meta_keyword'];

        $image = $_FILES['image']['name'];
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time(). '.' .$image_extension;
        
        $query = "INSERT INTO posts (tag_id,name,slug,description,image,meta_title,meta_description,meta_keyword) VALUES 
        ('$tag_id','$name','$slug','$description','$filename','$meta_title','$meta_description','$meta_keyword')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/posts/'.$filename);
            $_SESSION['message'] = "Post Sucessful";
            header('index.php');
            exit(0);
        }else{
            $_SESSION['message'] = "Post Failed";
            header('index.php');
            exit(0);
        }
    }



    
    if(isset($_POST['replyadd'])){
        $idpost = $_POST['idpost'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time(). '.' .$image_extension;
        
        $query = "INSERT INTO reply (idpost,name,description,image) VALUES 
        ('$idpost','$name','$description','$filename')";
        $query_run = mysqli_query($con,$query);

        if($query_run){
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/posts/'.$filename);
            $_SESSION['message'] = "Post Sucessful";
            header('index.php');
            exit(0);
        }else{
            $_SESSION['message'] = "Post Failed";
            header('index.php');
            exit(0);
        }
    }
?>