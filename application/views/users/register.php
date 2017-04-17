<h2><?= $title ?></h2>
<?= validation_errors() ?>

<?= form_open('users/register') ?>
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" name="name" placeholder="Add a Name">
	</div>
	<div class="form-group">
		<label for="">ZipCode</label>
		<input type="text" class="form-control" id="" name="zipcode" placeholder="Add a Zipcode">
	</div>
	<div class="form-group">
		<label for="">E-mail</label>
		<input type="text" class="form-control" id="" name="email" placeholder="Add a E-mail">
	</div>

	<div class="form-group">
		<label for="">Username</label>
		<input type="text" class="form-control" id="" name="username" placeholder="Add a Username">
	</div>

	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" id="" name="password" placeholder="Add a Zipcode">
	</div>

	<div class="form-group">
		<label for="">Confirm Password</label>
		<input type="password" class="form-control" id="" name="password2" placeholder="Add a Zipcode">
	</div>
	<button type="submit" class="btn btn-primary">Register!</button>



<?= form_close() ?>
