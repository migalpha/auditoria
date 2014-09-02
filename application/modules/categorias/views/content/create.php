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

if (isset($categorias))
{
	$categorias = (array) $categorias;
}
$id = isset($categorias['id']) ? $categorias['id'] : '';

?>
<div class="admin-box">
	<h3>Categorias</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('descripcion'. lang('bf_form_label_required'), 'categorias_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='categorias_descripcion' type='text' name='categorias_descripcion' maxlength="255" value="<?php echo set_value('categorias_descripcion', isset($categorias['descripcion']) ? $categorias['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('categorias_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/categorias', lang('categorias_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>