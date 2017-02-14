<?php echo validation_errors(); ?>

<?php echo form_open('elabora/add'); ?>

	<div>Estudiante :
		<select name="est_codigo">
			<option value="">Seleccione el estudiante</option>
			<?php
			foreach($all_estudiantes as $estudiante)
			{
				$selected = ($estudiante['est_codigo'] == $this->input->post('est_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$estudiante['est_codigo'].'" '.$selected.'>'.$estudiante['est_apellido1'].$estudiante['est_nombre1'].'</option>';
			}
			?>
		</select>
	</div>
	<div>Trabajo Disertacion :
		<select name="dis_codigo">
			<option value="">select disertacion</option>
			<?php
			foreach($all_trabajos as $trabajo_disertacion)
			{
				$selected = ($trabajo_disertacion['dis_codigo'] == $this->input->post('dis_codigo')) ? ' selected="selected"' : null;

				echo '<option value="'.$trabajo_disertacion['dis_codigo'].'" '.$selected.'>'.$trabajo_disertacion['dis_titulo'].'</option>';
			}
			?>
		</select>
	</div>
	<div>Elb Nota Horal : <input type="text" name="elb_nota_horal" value="<?php echo $this->input->post('elb_nota_horal'); ?>" /></div>
	<div>Elb Nota Escrito : <input type="text" name="elb_nota_escrito" value="<?php echo $this->input->post('elb_nota_escrito'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>