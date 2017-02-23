<?php echo validation_errors(); ?>

<?php echo form_open('pg_authid/edit/'.$pg_authid['rolname']); ?>

	<div>Usuario : <?php echo $pg_authid['rolname'] ?></div>
	<div>Password : <input type="password" name="rolpassword" value="" /></div>


	<button type="submit">Save</button>
	
<?php echo form_close(); ?>