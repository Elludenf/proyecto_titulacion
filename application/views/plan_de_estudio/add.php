<?php echo validation_errors(); ?>

<?php echo form_open('plan_de_estudio/add'); ?>

	<div>
				Carr Codigo : 
				<select name="carr_codigo">
					<option value="">select carrera</option>
					<?php 
					foreach($all_carreras as $carrera)
					{
						$selected = ($carrera['carr_codigo'] == $this->input->post('carr_codigo')) ? ' selected="selected"' : null;

						echo '<option value="'.$carrera['carr_codigo'].'" '.$selected.'>'.$carrera['carr_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Plan Descripcion : <input type="text" name="plan_descripcion" value="<?php echo $this->input->post('plan_descripcion'); ?>" /></div>
	<div>Plan Fechainicio : <input type="text" name="plan_fechainicio" value="<?php echo $this->input->post('plan_fechainicio'); ?>" /></div>
	<div>Plan Vigencia : <input type="checkbox" name="plan_vigencia" value="1" value="<?php echo $this->input->post('plan_vigencia'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>