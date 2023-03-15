<div class="card-body">

<form action="code.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-6 mb-3">
            <input type="text" value="<?=$post['idpost']?>" name="idpost" hidden>
            <label for="">Name</label>
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
            <button type="submit" name="replyadd" class="btn btn-primary">Save Post</button>
        </div>
    </div>
</form>
</div>
