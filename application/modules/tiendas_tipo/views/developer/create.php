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

if (isset($tiendas_tipo))
{
	$tiendas_tipo = (array) $tiendas_tipo;
}
$id = isset($tiendas_tipo['id']) ? $tiendas_tipo['id'] : '';

?>
<div class="admin-box">
	<h3>Tiendas Tipo</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('Descripcion'. lang('bf_form_label_required'), 'tiendas_tipo_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_tipo_descripcion' type='text' name='tiendas_tipo_descripcion' maxlength="255" value="<?php echo set_value('tiendas_tipo_descripcion', isset($tiendas_tipo['descripcion']) ? $tiendas_tipo['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('tiendas_tipo_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/developer/tiendas_tipo', lang('tiendas_tipo_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>