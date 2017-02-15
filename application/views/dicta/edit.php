<?php echo validation_errors(); ?>

<?php echo form_open('dicta/edit/'.$dicta['prof_codigo']); ?>

	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>