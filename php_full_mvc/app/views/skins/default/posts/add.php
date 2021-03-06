<a href="<?= APP_URL; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
<div class="card card-body bg-light mt-5">
  <h2>Add Post</h2>
  <p>Create a post with this form</p>
  <form action="<?= APP_URL; ?>/posts/add" method="post">
    <div class="form-group">
        <label>Title:<sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['title']; ?>" placeholder="Add a title...">
        <span class="invalid-feedback"><?= $data['title_err']; ?></span>
    </div>    
    <div class="form-group">
        <label>Body:<sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add some text..."><?= $data['body']; ?></textarea>
        <span class="invalid-feedback"><?= $data['body_err']; ?></span>
    </div>
    <input type="submit" class="btn btn-success" value="Submit">
  </form>
</div>

