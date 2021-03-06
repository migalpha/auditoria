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

if (isset($preguntas_grupos))
{
	$preguntas_grupos = (array) $preguntas_grupos;
}
$id = isset($preguntas_grupos['id']) ? $preguntas_grupos['id'] : '';

?>
<div class="admin-box">
	<h3>Preguntas Grupos</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('Descripcion'. lang('bf_form_label_required'), 'preguntas_grupos_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='preguntas_grupos_descripcion' type='text' name='preguntas_grupos_descripcion' maxlength="255" value="<?php echo set_value('preguntas_grupos_descripcion', isset($preguntas_grupos['descripcion']) ? $preguntas_grupos['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('preguntas_grupos_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/preguntas_grupos', lang('preguntas_grupos_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>