<?php echo validation_errors(); ?>

<?php echo form_open('zusuario/edit/'.$zusuario['zusrcodigo']); ?>

	<div>
				Zrolcodigo : 
				<select name="zrolcodigo">
					<option value="">select zrole</option>
					<?php 
					foreach($all_zroles as $zrole)
					{
						$selected = ($zrole['zrolcodigo'] == $zusuario['zrolcodigo']) ? ' selected="selected"' : null;

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
						$selected = ($profesor['per_codigo'] == $zusuario['per_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$profesor['per_codigo'].'" '.$selected.'>'.$profesor['per_codigo'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Zusrnombre : <input type="text" name="zusrnombre" value="<?php echo ($this->input->post('zusrnombre') ? $this->input->post('zusrnombre') : $zusuario['zusrnombre']); ?>" /></div>
	<div>Zusrclave : <input type="text" name="zusrclave" value="<?php echo ($this->input->post('zusrclave') ? $this->input->post('zusrclave') : $zusuario['zusrclave']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>