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

if (isset($preguntas))
{
	$preguntas = (array) $preguntas;
}
$id = isset($preguntas['id']) ? $preguntas['id'] : '';

?>
<div class="admin-box">
	<h3>Preguntas</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('Descripcion'. lang('bf_form_label_required'), 'preguntas_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='preguntas_descripcion' type='text' name='preguntas_descripcion' maxlength="1000" value="<?php echo set_value('preguntas_descripcion', isset($preguntas['descripcion']) ? $preguntas['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('puntuacion') ? 'error' : ''; ?>">
				<?php echo form_label('Puntuacion'. lang('bf_form_label_required'), 'preguntas_puntuacion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='preguntas_puntuacion' type='text' name='preguntas_puntuacion' maxlength="10" value="<?php echo set_value('preguntas_puntuacion', isset($preguntas['puntuacion']) ? $preguntas['puntuacion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('puntuacion'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					10 => 10,
				);

				echo form_dropdown('preguntas_categoria_id', $options, set_value('preguntas_categoria_id', isset($preguntas['categoria_id']) ? $preguntas['categoria_id'] : ''), 'Categoria Id'. lang('bf_form_label_required'));
			?>

			<div class="control-group <?php echo form_error('deleted') ? 'error' : ''; ?>">
				<?php echo form_label('Deleted'. lang('bf_form_label_required'), 'preguntas_deleted', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='preguntas_deleted'>
						<input type='checkbox' id='preguntas_deleted' name='preguntas_deleted' value='1' <?php echo (isset($preguntas['deleted']) && $preguntas['deleted'] == 1) ? 'checked="checked"' : set_checkbox('preguntas_deleted', 1); ?>>
						<span class='help-inline'><?php echo form_error('deleted'); ?></span>
					</label>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					4 => 4,
				);

				echo form_dropdown('preguntas_tipo_pregunta', $options, set_value('preguntas_tipo_pregunta', isset($preguntas['tipo_pregunta']) ? $preguntas['tipo_pregunta'] : ''), 'Tipo Pregunta'. lang('bf_form_label_required'));
			?>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					11 => 11,
				);

				echo form_dropdown('preguntas_preguntas_grupos_id', $options, set_value('preguntas_preguntas_grupos_id', isset($preguntas['preguntas_grupos_id']) ? $preguntas['preguntas_grupos_id'] : ''), 'Preguntas Grupos Id'. lang('bf_form_label_required'));
			?>

			<div class="control-group <?php echo form_error('orden') ? 'error' : ''; ?>">
				<?php echo form_label('Orden'. lang('bf_form_label_required'), 'preguntas_orden', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='preguntas_orden' type='text' name='preguntas_orden' maxlength="11" value="<?php echo set_value('preguntas_orden', isset($preguntas['orden']) ? $preguntas['orden'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('orden'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('atencion') ? 'error' : ''; ?>">
				<?php echo form_label('Atencion'. lang('bf_form_label_required'), 'preguntas_atencion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='preguntas_atencion'>
						<input type='checkbox' id='preguntas_atencion' name='preguntas_atencion' value='1' <?php echo (isset($preguntas['atencion']) && $preguntas['atencion'] == 1) ? 'checked="checked"' : set_checkbox('preguntas_atencion', 1); ?>>
						<span class='help-inline'><?php echo form_error('atencion'); ?></span>
					</label>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('preguntas_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/preguntas', lang('preguntas_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Preguntas.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('preguntas_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('preguntas_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>