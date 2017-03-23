<?php if(validation_errors() == true) {?>

    <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

<?php  }?>

<?php echo form_open('pg_authid/edit/'.$pg_authid['rolname']); ?>

	<div>Usuario : <?php echo $pg_authid['rolname'] ?></div>
	<div>Password : <input type="password" name="rolpassword" value="" /></div>


	<button type="submit">Save</button>
	
<?php echo form_close(); ?>