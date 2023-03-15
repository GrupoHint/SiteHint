<div class="container-fluid px-4">
        <div class="col-md-12">
            <?php include('message.php'); ?>

            <div class="card">
            
                <div class="card-body">

                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Tipo de Post</label>
                                <?php
                                    $tag ="SELECT * FROM tag";
                                    $tag_run = mysqli_query($con, $tag);
                                    if(mysqli_num_rows($tag_run) > 0){
                                        ?>
                                        <select name="tag_id" required class="form-control">
                                            <option value="">Select Tag</option>
                                            <?php
                                            foreach($tag_run as $tagitem){
                                                ?>
                                                <option value="<?=$tagitem['idTag']?>"><?= $tagitem['nometag']?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <?php
                                    }else{
                                        ?>
                                        <h5>No tag avaible</h5>
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
                                <label for="">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Description</label>
                                <input type="text" name="meta_description" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Keywords</label>
                                <input type="text" name="meta_keyword" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" name="postadd" class="btn btn-primary">Save Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>