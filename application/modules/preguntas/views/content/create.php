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
					<input id='preguntas_puntuacion' type='text' name='preguntas_puntuacion' maxlength="4" value="<?php echo set_value('preguntas_puntuacion', isset($preguntas['puntuacion']) ? $preguntas['puntuacion'] : ''); ?>" />
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
					<input id='preguntas_deleted' type='text' name='preguntas_deleted' maxlength="1" value="<?php echo set_value('preguntas_deleted', isset($preguntas['deleted']) ? $preguntas['deleted'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('deleted'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					4 => 4,
				);

				echo form_dropdown('preguntas_tipo_pregunta', $options, set_value('preguntas_tipo_pregunta', isset($preguntas['tipo_pregunta']) ? $preguntas['tipo_pregunta'] : ''), 'Tipo Pregunta'. lang('bf_form_label_required'));
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('preguntas_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/preguntas', lang('preguntas_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>