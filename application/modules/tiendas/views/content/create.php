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

if (isset($tiendas))
{
	$tiendas = (array) $tiendas;
}
$id = isset($tiendas['id']) ? $tiendas['id'] : '';

?>
<div class="admin-box">
	<h3>Tiendas</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('cod_base') ? 'error' : ''; ?>">
				<?php echo form_label('Codigo Base'. lang('bf_form_label_required'), 'tiendas_cod_base', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_cod_base' type='text' name='tiendas_cod_base' maxlength="4" value="<?php echo set_value('tiendas_cod_base', isset($tiendas['cod_base']) ? $tiendas['cod_base'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('cod_base'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('nombre') ? 'error' : ''; ?>">
				<?php echo form_label('Nombre'. lang('bf_form_label_required'), 'tiendas_nombre', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_nombre' type='text' name='tiendas_nombre' maxlength="255" value="<?php echo set_value('tiendas_nombre', isset($tiendas['nombre']) ? $tiendas['nombre'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('nombre'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('empresa') ? 'error' : ''; ?>">
				<?php echo form_label('Empresa'. lang('bf_form_label_required'), 'tiendas_empresa', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='tiendas_empresa' type='text' name='tiendas_empresa' maxlength="255" value="<?php echo set_value('tiendas_empresa', isset($tiendas['empresa']) ? $tiendas['empresa'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('empresa'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('tiendas_action_create'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/tiendas', lang('tiendas_cancel'), 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>