<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Los siguientes campos presentan errores:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;
?>
<div class="admin-box">
	<h2>Nuevo Cliente Secreto</h2>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<input class="form-control" id='auditorias_auditor_id' type='hidden' name='auditorias_auditor_id' maxlength="3" value="<?php echo $current_user->id; ?>" />
			
			<div class="control-group <?php echo form_error('nombre') ? 'error' : ''; ?>">
				<?php echo form_label('Nombres'. lang('bf_form_label_required'), 'nombre', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='nombre' type='text' name='nombre' maxlength="255" value="<?php echo set_value('nombre', isset($auditorias['atendido_por']) ? $auditorias['atendido_por'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('nombre'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('apellido') ? 'error' : ''; ?>">
				<?php echo form_label('Apellidos'. lang('bf_form_label_required'), 'apellido', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='apellido' type='text' name='apellido' maxlength="255" value="<?php echo set_value('apellido', isset($auditorias['atendido_por']) ? $auditorias['atendido_por'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('apellido'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('ci') ? 'error' : ''; ?>">
				<?php echo form_label('Documento de Identidad'. lang('bf_form_label_required'), 'ci', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='ci' type='text' name='ci' maxlength="255" value="<?php echo set_value('ci', isset($auditorias['cargo']) ? $auditorias['cargo'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('ci'); ?></span>
				</div>
			</div>
			<div class="control-group <?php echo form_error('ciudad') ? 'error' : ''; ?>">
				<?php echo form_label('Ciudad'. lang('bf_form_label_required'), 'ciudad', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='ciudad' type='text' name='ciudad' maxlength="255" value="<?php echo set_value('ciudad', isset($auditorias['atendido_por']) ? $auditorias['atendido_por'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('ciudad'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('telf') ? 'error' : ''; ?>">
				<?php echo form_label('Teléfono'. lang('bf_form_label_required'), 'telf', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='telf' type='text' name='telf' maxlength="255" value="<?php echo set_value('telf', isset($auditorias['cargo']) ? $auditorias['cargo'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('telf'); ?></span>
				</div>
			</div>
			
			<div class="control-group <?php echo form_error('fecha_audit') ? 'error' : ''; ?>">
				<?php echo form_label('Fecha Auditoría'. lang('bf_form_label_required'), 'fecha_audit', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='fecha_audit' type='text' name='fecha_audit' maxlength="1" value="<?php echo set_value('fecha_audit', isset($auditorias['fecha_audit']) ? $auditorias['fecha_audit'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('fecha_audit'); ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"><?php echo form_dropdown('horas', $horas, '09','Horas', 'class = form-control'); ?></div>
				<div class="col-md-1"><?php echo form_dropdown('minutos', $minutos, '','Minutos', 'class = form-control'); ?></div>
			</div>
			<?php // Change the values in this array to populate your dropdown as required
				echo form_dropdown('auditorias_cod_base', $tiendas, set_value('auditorias_cod_base', isset($auditorias['cod_base']) ? $auditorias['cod_base'] : ''), 'Código Base'. lang('bf_form_label_required'), 'class = form-control');
			?>

			<br>
			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="Crear Auditoría"  />
				<?php echo anchor('auditorias', 'Cancelar', 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>