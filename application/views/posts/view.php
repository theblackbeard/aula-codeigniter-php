<h2><?= $post['title'] ?></h2>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small>
  <img class="img-responsive" src="<?= site_url() ?>assets/images/posts/<?= $post['post_image'] ?>">
<div class="post-body">
    <?= $post['body'] ?>
</div>

<?php if($this->session->userdata('user_id')== $post['user_id']) : ?>
<hr>
<a href="<?= base_url(); ?>posts/edit/<?= $post['slug'] ?>" class='btn btn-default pull-left'>Edit</a>

<?= form_open('/posts/delete/' . $post['id']) ?>
  <input type="submit" value="Delete" class="btn btn-danger" >
</form>

<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
	<?php foreach ($comments as $commet): ?>
		<div class="well">
			<h5><?= $commet['body'] ?> [by <strong><?= $commet['name'] ?>]</strong></h5>
		</div>
	<?php endforeach;?>
<?php else: ?>
	<p>No Comments to display :(</p>
<?php endif; ?>


<hr>
<h3>Add Comment</h3>
<?= validation_errors(); ?>
<?= form_open('comments/create/' . $post['id'])?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
<div class="form-group">
	<label>E-Mail</label>
	<input type="email" name="email" class="form-control">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?= $post['slug'] ?>">
<button type="submit" class="btn btn-primary">Submit</button>
</form>


