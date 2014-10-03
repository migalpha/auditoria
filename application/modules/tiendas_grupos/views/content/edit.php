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

if (isset($tiendas_grupos))
{
	$tiendas_grupos = (array) $tiendas_grupos;
}
$id = isset($tiendas_grupos['id']) ? $tiendas_grupos['id'] : '';

?>
<div class="admin-box">
	<h3>Tiendas Grupos</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('cod_grupo_base') ? 'error' : ''; ?>">
				<?php echo form_label('Codigo Grupo Base', 'tiendas_grupos_cod_grupo_base', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_grupos_cod_grupo_base' type='text' name='tiendas_grupos_cod_grupo_base'  value="<?php echo set_value('tiendas_grupos_cod_grupo_base', isset($tiendas_grupos['cod_grupo_base']) ? $tiendas_grupos['cod_grupo_base'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('cod_grupo_base'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('descripcion') ? 'error' : ''; ?>">
				<?php echo form_label('Descripcion', 'tiendas_grupos_descripcion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_grupos_descripcion' type='text' name='tiendas_grupos_descripcion' maxlength="255" value="<?php echo set_value('tiendas_grupos_descripcion', isset($tiendas_grupos['descripcion']) ? $tiendas_grupos['descripcion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('descripcion'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('tiendas_grupos_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/tiendas_grupos', lang('tiendas_grupos_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Tiendas_Grupos.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('tiendas_grupos_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('tiendas_grupos_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>