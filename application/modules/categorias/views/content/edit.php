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
	<h3>categorias</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('Descripcion'. lang('bf_form_label_required'), 'categorias_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='categorias_descripcion' type='text' name='categorias_descripcion' maxlength="255" value="<?php echo set_value('categorias_descripcion', isset($categorias['descripcion']) ? $categorias['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('deleted') ? 'error' : ''; ?>">
				<?php echo form_label('Deleted', 'categorias_deleted', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='categorias_deleted'>
						<input type='checkbox' id='categorias_deleted' name='categorias_deleted' value='1' <?php echo (isset($categorias['deleted']) && $categorias['deleted'] == 1) ? 'checked="checked"' : set_checkbox('categorias_deleted', 1); ?>>
						<span class='help-inline'><?php echo form_error('deleted'); ?></span>
					</label>
				</div>
			</div>

			<div class="control-group <?php echo form_error('atencion') ? 'error' : ''; ?>">
				<?php echo form_label('Atencion', 'categorias_atencion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='categorias_atencion'>
						<input type='checkbox' id='categorias_atencion' name='categorias_atencion' value='1' <?php echo (isset($categorias['atencion']) && $categorias['atencion'] == 1) ? 'checked="checked"' : set_checkbox('categorias_atencion', 1); ?>>
						<span class='help-inline'><?php echo form_error('atencion'); ?></span>
					</label>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('categorias_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/categorias', lang('categorias_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Categorias.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('categorias_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('categorias_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>