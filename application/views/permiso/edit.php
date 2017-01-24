<?php echo validation_errors(); ?>

<?php echo form_open('permiso/edit/'.$permiso['perm_codigo']); ?>

	<div>perm Estado : <input type="checkbox" name="perm_estado" value="1" <?php echo ($permiso['perm_estado']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>perm Creat : <input type="checkbox" name="perm_creat" value="1" <?php echo ($permiso['perm_creat']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>perm Read : <input type="checkbox" name="perm_read" value="1" <?php echo ($permiso['perm_read']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>perm Update : <input type="checkbox" name="perm_update" value="1" <?php echo ($permiso['perm_update']==1 ? 'checked="checked"' : ''); ?> /></div>
	<div>perm Delete : <input type="checkbox" name="perm_delete" value="1" <?php echo ($permiso['perm_delete']==1 ? 'checked="checked"' : ''); ?> /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>