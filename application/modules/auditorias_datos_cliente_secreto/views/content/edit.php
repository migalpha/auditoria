<?php

$validation_errors = validation_errors();

if ($validation_errors) :
?>
<div class="alert alert-block alert-error fade in">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors:</h4>
	<?php echo $validation_errors; ?>
</div>
<?php
endif;

if (isset($auditorias_datos_cliente_secreto))
{
	$auditorias_datos_cliente_secreto = (array) $auditorias_datos_cliente_secreto;
}
$id = isset($auditorias_datos_cliente_secreto['id']) ? $auditorias_datos_cliente_secreto['id'] : '';

?>
<div class="admin-box">
	<h3>Auditorias Datos Cliente Secreto</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('auditoria_id') ? 'error' : ''; ?>">
				<?php echo form_label('Auditoria Id', 'auditorias_datos_cliente_secreto_auditoria_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_auditoria_id' type='text' name='auditorias_datos_cliente_secreto_auditoria_id' maxlength="15" value="<?php echo set_value('auditorias_datos_cliente_secreto_auditoria_id', isset($auditorias_datos_cliente_secreto['auditoria_id']) ? $auditorias_datos_cliente_secreto['auditoria_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('auditoria_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('nombre') ? 'error' : ''; ?>">
				<?php echo form_label('Nombre', 'auditorias_datos_cliente_secreto_nombre', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_nombre' type='text' name='auditorias_datos_cliente_secreto_nombre' maxlength="255" value="<?php echo set_value('auditorias_datos_cliente_secreto_nombre', isset($auditorias_datos_cliente_secreto['nombre']) ? $auditorias_datos_cliente_secreto['nombre'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('nombre'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('apellidos') ? 'error' : ''; ?>">
				<?php echo form_label('Apellidos', 'auditorias_datos_cliente_secreto_apellidos', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_apellidos' type='text' name='auditorias_datos_cliente_secreto_apellidos' maxlength="255" value="<?php echo set_value('auditorias_datos_cliente_secreto_apellidos', isset($auditorias_datos_cliente_secreto['apellidos']) ? $auditorias_datos_cliente_secreto['apellidos'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('apellidos'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('ci') ? 'error' : ''; ?>">
				<?php echo form_label('Ci', 'auditorias_datos_cliente_secreto_ci', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_ci' type='text' name='auditorias_datos_cliente_secreto_ci' maxlength="8" value="<?php echo set_value('auditorias_datos_cliente_secreto_ci', isset($auditorias_datos_cliente_secreto['ci']) ? $auditorias_datos_cliente_secreto['ci'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('ci'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('ciudad') ? 'error' : ''; ?>">
				<?php echo form_label('Ciudad', 'auditorias_datos_cliente_secreto_ciudad', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_ciudad' type='text' name='auditorias_datos_cliente_secreto_ciudad' maxlength="255" value="<?php echo set_value('auditorias_datos_cliente_secreto_ciudad', isset($auditorias_datos_cliente_secreto['ciudad']) ? $auditorias_datos_cliente_secreto['ciudad'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('ciudad'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('telefono') ? 'error' : ''; ?>">
				<?php echo form_label('Telefono', 'auditorias_datos_cliente_secreto_telefono', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_telefono' type='text' name='auditorias_datos_cliente_secreto_telefono' maxlength="30" value="<?php echo set_value('auditorias_datos_cliente_secreto_telefono', isset($auditorias_datos_cliente_secreto['telefono']) ? $auditorias_datos_cliente_secreto['telefono'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('telefono'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('fecha_audit') ? 'error' : ''; ?>">
				<?php echo form_label('Fecha Audit', 'auditorias_datos_cliente_secreto_fecha_audit', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_fecha_audit' type='text' name='auditorias_datos_cliente_secreto_fecha_audit' maxlength="1" value="<?php echo set_value('auditorias_datos_cliente_secreto_fecha_audit', isset($auditorias_datos_cliente_secreto['fecha_audit']) ? $auditorias_datos_cliente_secreto['fecha_audit'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('fecha_audit'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('punt_audit') ? 'error' : ''; ?>">
				<?php echo form_label('Puntaje segun auditor', 'auditorias_datos_cliente_secreto_punt_audit', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_datos_cliente_secreto_punt_audit' type='text' name='auditorias_datos_cliente_secreto_punt_audit' maxlength="11" value="<?php echo set_value('auditorias_datos_cliente_secreto_punt_audit', isset($auditorias_datos_cliente_secreto['punt_audit']) ? $auditorias_datos_cliente_secreto['punt_audit'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('punt_audit'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('auditorias_datos_cliente_secreto_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/auditorias_datos_cliente_secreto', lang('auditorias_datos_cliente_secreto_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Auditorias_Datos_Cliente_Secreto.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('auditorias_datos_cliente_secreto_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('auditorias_datos_cliente_secreto_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>