<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
</head>
<body>

<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">Add Users</a>
	</div>
</div>
	<div class="container" style="padding-top: 15px;">
		<h2>Add User</h2>
		<hr>
		<form method="post" name="createUser" action="<?php echo base_url().'index.php/User/create';?>">
			<div class="row form-group">
				<div class="col-lg-3"> User Name : </div>
				<div class="col-lg-6">
					<input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>" class="form-control">
					<?php echo form_error('user_name'); ?>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-3"> User E-Mail : </div>
				<div class="col-lg-6">
					<input type="email" name="user_email" value="<?php echo set_value('user_email'); ?>" class="form-control">
					<?php echo form_error('user_email'); ?>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-3"> User Contact Number : </div>
				<div class="col-lg-6">
					<input type="text" name="user_contact" value="<?php echo set_value('user_contact'); ?>" class="form-control">
					<?php echo form_error('user_contact'); ?>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-12 text-center">
					<input type="submit" name="submit" class="btn btn-success" value="Submit">
					<a href="<?php echo base_url().'index.php/user/index';?>" class="btn-secondary btn">Cancel</a>
				</div>
			</div>	
		</form>
	</div>

</body>
</html>