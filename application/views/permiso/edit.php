<?php echo validation_errors(); ?>

<?php echo form_open('permiso/edit/'.$permiso['zpermcodigo']); ?>

	<div>Zperm Estado : <input type="checkbox" name="zperm_estado" value="1" <?php echo ($permiso['zperm_estado']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>Zperm Creat : <input type="checkbox" name="zperm_creat" value="1" <?php echo ($permiso['zperm_creat']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>Zperm Read : <input type="checkbox" name="zperm_read" value="1" <?php echo ($permiso['zperm_read']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>Zperm Update : <input type="checkbox" name="zperm_update" value="1" <?php echo ($permiso['zperm_update']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>Zperm Delete : <input type="checkbox" name="zperm_delete" value="1" <?php echo ($permiso['zperm_delete']==1 ? 'checked="checked"' : ''); ?> /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>