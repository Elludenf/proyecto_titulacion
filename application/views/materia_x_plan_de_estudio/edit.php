<?php echo validation_errors(); ?>

<?php echo form_open('materia_x_plan_de_estudio/edit/'.$materia_x_plan_de_estudio['plan_codigo']); ?>

	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>