<?php echo validation_errors(); ?>

<?php echo form_open('zusuario/add'); ?>

	<div>
				Zrolcodigo : 
				<select name="zrolcodigo">
					<option value="">select zrole</option>
					<?php 
					foreach($all_zroles as $zrole)
					{
						$selected = ($zrole['zrolcodigo'] == $this->input->post('zrolcodigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$zrole['zrolcodigo'].'" '.$selected.'>'.$zrole['zroldescripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>
				Per Codigo : 
				<select name="per_codigo">
					<option value="">select profesor</option>
					<?php 
					foreach($all_profesor as $profesor)
					{
						$selected = ($profesor['per_codigo'] == $this->input->post('per_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_codigo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Zusrnombre : <input type="text" name="zusrnombre" value="<?php echo $this->input->post('zusrnombre'); ?>" /></div>
	<div>Zusrclave : <input type="text" name="zusrclave" value="<?php echo $this->input->post('zusrclave'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>