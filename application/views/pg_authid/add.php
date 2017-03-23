<?php if(validation_errors() == true) {?>

    <div id="val_errors"  title="Error"> <?php echo validation_errors(); ?></div>

<?php  }?>

<?php echo form_open('pg_authid/add'); ?>

	<div>Nombre de Usuario : <input type="text" name="rolname" value="<?php echo $this->input->post('rolname'); ?>" /></div>
	<div>Password : <input type="password" name="rolpassword" value="<?php echo $this->input->post('rolpassword'); ?>" /></div>
    <div>Rol :
        <select name="rol">
            <option value="">Seleccione un rol:</option>
            <?php

            echo '<option value="R_ADMINISTRADOR">Administrador</option>';
            echo '<option value="R_AUDITOR">Auditor</option>';
            echo '<option value="R_DIRECTOR_T_TITULACION">Director Trabajo Titulacion</option>';
            echo '<option value="R_ESTUDIANTE">Estudiante</option>';
            echo '<option value="R_OPERADOR">Operador</option>';
            echo '<option value="R_PROFESOR">Profesor</option>';
            echo '<option value="R_REVISOR_T_TITULACION">Revisor Trabajo Titulacion</option>';
            echo '<option value="R_VISTA">Solo Vista</option>';
            ?>
        </select>
    </div>
	<button type="submit">Save</button>

<?php echo form_close(); ?>