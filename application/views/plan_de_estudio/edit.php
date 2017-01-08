<?php echo validation_errors(); ?>

<?php echo form_open('plan_de_estudio/edit/'.$plan_de_estudio['plan_codigo']); ?>

	<div>
				Carr Codigo : 
				<select name="carr_codigo">
					<option value="">select carrera</option>
					<?php 
					foreach($all_carreras as $carrera)
					{
						$selected = ($carrera['carr_codigo'] == $plan_de_estudio['carr_codigo']) ? ' selected="selected"' : null;

						echo '<option value="'.$carrera['carr_codigo'].'" '.$selected.'>'.$carrera['carr_descripcion'].'</option>';
					} 
					?>
				</select>
		</div>
	<div>Plan Descripcion : <input type="text" name="plan_descripcion" value="<?php echo ($this->input->post('plan_descripcion') ? $this->input->post('plan_descripcion') : $plan_de_estudio['plan_descripcion']); ?>" /></div>
	<div>Plan Fechainicio : <input type="text" name="plan_fechainicio" value="<?php echo ($this->input->post('plan_fechainicio') ? $this->input->post('plan_fechainicio') : $plan_de_estudio['plan_fechainicio']); ?>" /></div>
	<div>Plan Vigencia : <input type="checkbox" name="plan_vigencia" value="1" <?php echo ($plan_de_estudio['plan_vigencia']==1 ? 'checked="checked"' : ''); ?> /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>