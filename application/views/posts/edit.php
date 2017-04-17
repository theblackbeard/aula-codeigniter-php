<h2><?= $title ?></h2>

<?= validation_errors() ?>

<?= form_open('posts/update'); ?>
  <input type="hidden" name="id" value="<?= $post['id'] ?>">
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" id="" name="title" placeholder="Add a Title" value="<?= $post['title'] ?>">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" id="editor1" class="body" name="body" placeholder="Add a Body"><?= $post['body'] ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
