<?php
    include('connect.php');

    if(isset($_POST['gameadd'])){ //pegar os elementos do form em gameadd.php e passar para variaveis
        $empresa_id = $_POST['empresa_id'];
        $category_id = $_POST['category_id'];
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $descricao = $_POST['description'];
        $meta_keyword = $_POST['meta_keyword'];

        $uploadimagebackTo = null;//o path do arquivo comeca nullo para primeiro ser criado um temp e depois setado por ele, caso contrario ele so armazena um dado por form
        if(isset($_FILES['imageback'])){
        $imageback_image_name = $_FILES['imageback']['name'];//nomeia o arquivo em uma var
        $imageback_image_size = $_FILES['imageback']['size'];//define o tamanho dele, bom para limitar o tamanho no futuro
        $imageback_image_tmp = $_FILES['imageback']['tmp_name'];//cria um arquivo temporario para a imagem para podermos enviar depois
        $uploadimagebackTo = './uploads/posts/'.$imageback_image_name;// define agora o path e nome do arquivo a ser salvo
        $moveimageback = move_uploaded_file($imageback_image_tmp,$uploadimagebackTo);//pega o arquivo temporario e o path para fazer o upload com omove_uploaded_file
        };

        $uploadimagebanner1To = null;//o path do arquivo comeca nullo para primeiro ser criado um temp e depois setado por ele, caso contrario ele so armazena um dado por form
        if(isset($_FILES['imagebanner1'])){
        $imagebanner1_image_name = $_FILES['imagebanner1']['name'];//nomeia o arquivo em uma var
        $imagebanner1_image_size = $_FILES['imagebanner1']['size'];//define o tamanho dele, bom para limitar o tamanho no futuro
        $imagebanner1_image_tmp = $_FILES['imagebanner1']['tmp_name'];//cria um arquivo temporario para a imagem para podermos enviar depois
        $uploadimagebanner1To = './uploads/posts/'.$imagebanner1_image_name;// define agora o path e nome do arquivo a ser salvo
        $moveimagebanner1 = move_uploaded_file($imagebanner1_image_tmp,$uploadimagebanner1To);//pega o arquivo temporario e o path para fazer o upload com omove_uploaded_file
        };

        $uploadimagebanner2To = null;//o path do arquivo comeca nullo para primeiro ser criado um temp e depois setado por ele, caso contrario ele so armazena um dado por form
        if(isset($_FILES['imagebanner2'])){
        $imagebanner2_image_name = $_FILES['imagebanner2']['name'];//nomeia o arquivo em uma var
        $imagebanner2_image_size = $_FILES['imagebanner2']['size'];//define o tamanho dele, bom para limitar o tamanho no futuro
        $imagebanner2_image_tmp = $_FILES['imagebanner2']['tmp_name'];//cria um arquivo temporario para a imagem para podermos enviar depois
        $uploadimagebanner2To = './uploads/posts/'.$imagebanner2_image_name;// define agora o path e nome do arquivo a ser salvo
        $moveimagebanner2 = move_uploaded_file($imagebanner2_image_tmp,$uploadimagebanner2To);//pega o arquivo temporario e o path para fazer o upload com omove_uploaded_file
        };

        $uploadimagebanner3To = null;//o path do arquivo comeca nullo para primeiro ser criado um temp e depois setado por ele, caso contrario ele so armazena um dado por form
        if(isset($_FILES['imagebanner3'])){
        $imagebanner3_image_name = $_FILES['imagebanner3']['name'];//nomeia o arquivo em uma var
        $imagebanner3_image_size = $_FILES['imagebanner3']['size'];//define o tamanho dele, bom para limitar o tamanho no futuro
        $imagebanner3_image_tmp = $_FILES['imagebanner3']['tmp_name'];//cria um arquivo temporario para a imagem para podermos enviar depois
        $uploadimagebanner3To = './uploads/posts/'.$imagebanner3_image_name;// define agora o path e nome do arquivo a ser salvo
        $moveimagebanner3 = move_uploaded_file($imagebanner3_image_tmp,$uploadimagebanner3To);//pega o arquivo temporario e o path para fazer o upload com omove_uploaded_file
        };

        $uploadimageiconTo = null;
        if(isset($_FILES['imageicon'])){
        $imageicon_image_name = $_FILES['imageicon']['name'];
        $imageicon_image_size = $_FILES['imageicon']['size'];
        $imageicon_image_tmp = $_FILES['imageicon']['tmp_name'];
        $uploadimageiconTo = './uploads/posts/'.$imageicon_image_name;
        $moveimageicon = move_uploaded_file($imageicon_image_tmp,$uploadimageiconTo);
        };
         
        //linha 21-23 sao para conectar ao DB e inserir os valores nas colunas
        $query = ("INSERT INTO `game` (`idEmpresa`,`category_id`,`gameName`,`slug`,`descricao`,`imageback`,`imagebanner1`,`imagebanner2`,`imagebanner3`,`imageIcon`,`keyword`) VALUES ('$empresa_id','$category_id','$name','$slug','$descricao','$imageback_image_name','$imagebanner1_image_name','$imagebanner2_image_name','$imagebanner3_image_name','$imageicon_image_name','$meta_keyword')");
        $query_run = mysqli_query($con, $query);
        header('Location:http://localhost/forummini/dashboard.php');
        exit();
       
        
    }


    if(isset($_POST['newpost'])){//pegar os elementos do form em postadd.php e passar para variaveis
        $tag_id = $_POST['tag_id'];
        $name = $_POST['name'];
        $slug=preg_replace('/\s+/u', '_', $name);
        $description = $_POST['description'];
        $spoiler = $_POST['spoiler'];
        $mature = $_POST['mature'];

        $meta_keyword = $_POST['meta_keyword'];

        // $files = array_filter($_FILES['image']['name']); //Use something similar before processing files.
        // // Count the number of uploaded files in array
        // $total_count = count($_FILES['image']['name']);
        // // Loop through every file
        // for( $i=0 ; $i < 5 ; $i++ ) {
        // //The temp file path is obtained
        // $tmpFilePath = $_FILES['image']['tmp_name'][$i];
        // //A file path needs to be present
        // if ($tmpFilePath != ""){
        //     //Setup our new file path
        //     $newFilePath = "./upload/posts/" . $_FILES['image']['name'][$i];
        //     //File is uploaded to temp dir
        //     $moveimage = move_uploaded_file($tmpFilePath, $newFilePath);
        // }
        // }
        // if(isset($_FILES['image'])){
        //     $image = $_FILES['image'];

        //     $imageName = $image ['name'];
        //     $newimageName = uniqid();
        //     $extensao = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
        //     $upload = move_uploaded_file($image["tmp_name"], './uploads/posts/' . $newimageName . "." . $extensao);
        // }
        $uploadimageTo = null;//o path do arquivo comeca nullo para primeiro ser criado um temp e depois setado por ele, caso contrario ele so armazena um dado por form
        if(isset($_FILES['image'])){
        $image_name = $_FILES['image']['name'];//nomeia o arquivo em uma var
        $image_size = $_FILES['image']['size'];//define o tamanho dele, bom para limitar o tamanho no futuro
        $image_tmp = $_FILES['image']['tmp_name'];//cria um arquivo temporario para a imagem para podermos enviar depois
        $uploadimageTo = './uploads/posts/'.$image_name;// define agora o path e nome do arquivo a ser salvo
        $moveimagebanner = move_uploaded_file($image_tmp,$uploadimageTo);//pega o arquivo temporario e o path para fazer o upload com omove_uploaded_file
        }

        $query = "INSERT INTO newposts (tag_id,name,slug,description,spoiler,mature,image,meta_keyword) VALUES 
        ('$tag_id','$name','$slug','$description','$spoiler','$mature','$image_name','$meta_keyword')";
        $query_run = mysqli_query($con,$query);

    }

    if(isset($_POST['replyadd'])){//igual aos de cima essa codigo usa o mesmo metodo para enviar replies. o form esta em postreply.php com um idpost pai predeterminado
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