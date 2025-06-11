<form method="post" action="<?php echo base_url("main/submitFile");?>" enctype="multipart/form-data">
    <div>
        <label for="logo" class="form-label">Logo závodu</label>
        <input type="file" class="form-control" id="logo" name="logo" accept=".jpg, .png, .jpeg, .svg">
    </div>
</form>