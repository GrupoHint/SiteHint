<div class="container-fluid px-4"><!-- esse arquivo serve como form para cadastrar jogos. ele é chamado em dahboard.php -->
        <div class="col-md-12">
            <?php include('message.php'); ?>

            <div class="card">
            
                <div class="card-body">

                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Empresa</label> <!--o codigo abaixo faz a selecao dos itens nos rows de empresas registradas e as mostram para poderem ser selecionadas-->
                                <?php
                                    $empresa ="SELECT * FROM empresa";
                                    $empresa_run = mysqli_query($con, $empresa);
                                    if(mysqli_num_rows($empresa_run) > 0){ // mysqli_num_rows conta os rows que passa por, nesse caso enquanto for maior que 0 ele continua executando ate o fim
                                        ?>
                                        <select name="empresa_id" required class="form-control">
                                            <option value="">Select empresa</option>
                                            <?php
                                            foreach($empresa_run as $empresaitem){//criado uma var $empresaitem para pegar um dado do row de empresa
                                                ?>
                                                <option value="<?=$empresaitem['IdEmpresa']?>"><?= $empresaitem['nomeEmpresa']?></option><!-- com $empresa[''] a var pega o dado no row pelo nome da coluna demarcada-->
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <?php
                                    }else{//caso nao tenha empresas registradas ou ha algum error de path para o banco de dados ele aparecera como sem empresas disponiveis
                                        ?>
                                        <h5>Sem empresa disponivel</h5>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Categoria</label><!--o codigo abaixo faz a selecao dos itens nos rows de categorias registradas e as mostram para poderem ser selecionadas-->
                                <?php
                                    $category ="SELECT * FROM categories";
                                    $category_run = mysqli_query($con, $category);
                                    if(mysqli_num_rows($category_run) > 0){
                                        ?>
                                        <select name="category_id" required class="form-control">
                                            <option value="">Select category</option>
                                            <?php
                                            foreach($category_run as $categoryitem){
                                                ?>
                                                <option value="<?=$categoryitem['id']?>"><?= $categoryitem['name']?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <?php
                                    }else{
                                        ?>
                                        <h5>Sem categoria disponivel</h5>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea type="text" name="description" required class="form-control" rows="$"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Imagem Background</label>
                                <input type="file" name="imageback" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Imagem Banner1</label>
                                <input type="file" name="imagebanner1" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Imagem Banner2</label>
                                <input type="file" name="imagebanner2" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Imagem Banner3</label>
                                <input type="file" name="imagebanner3" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Imagem icon</label>
                                <input type="file" name="imageicon" class="form-control">
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <input type="text" name="meta_keyword" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="gameadd" class="btn btn-primary">Save Game</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>