<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" id="" name="title" placeholder="Add a Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="editor1" class="body" name="body" placeholder="Add a Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20" >
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
