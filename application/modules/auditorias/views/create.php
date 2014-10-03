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

if (isset($auditorias))
{
	$auditorias = (array) $auditorias;
}
$id = isset($auditorias['id']) ? $auditorias['id'] : '';

?>
<div class="admin-box">
	<h3>Nueva Auditoria</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<?php // Change the values in this array to populate your dropdown as required
				echo form_dropdown('auditorias_cod_base', $tiendas, set_value('auditorias_cod_base', isset($auditorias['cod_base']) ? $auditorias['cod_base'] : ''), 'Código Base'. lang('bf_form_label_required'), 'class = form-control');
			?>

			<input class="form-control" id='auditorias_auditor_id' type='hidden' name='auditorias_auditor_id' maxlength="3" value="<?php echo $current_user->id; ?>" />
			
			<div class="control-group <?php echo form_error('atendido_por') ? 'error' : ''; ?>">
				<?php echo form_label('Atendido Por'. lang('bf_form_label_required'), 'auditorias_atendido_por', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='auditorias_atendido_por' type='text' name='auditorias_atendido_por' maxlength="255" value="<?php echo set_value('auditorias_atendido_por', isset($auditorias['atendido_por']) ? $auditorias['atendido_por'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('atendido_por'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('cargo') ? 'error' : ''; ?>">
				<?php echo form_label('Cargo'. lang('bf_form_label_required'), 'auditorias_cargo', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input class="form-control" id='auditorias_cargo' type='text' name='auditorias_cargo' maxlength="255" value="<?php echo set_value('auditorias_cargo', isset($auditorias['cargo']) ? $auditorias['cargo'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('cargo'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				echo form_dropdown('auditorias_tipo_tienda_id', $tiendas_tipo, set_value('auditorias_tipo_tienda_id', isset($auditorias['tipo_tienda_id']) ? $auditorias['tipo_tienda_id'] : ''), 'Tipo Tienda Id'. lang('bf_form_label_required'),'class = form-control');
			?>
			<?php // Change the values in this array to populate your dropdown as required
				echo form_dropdown('auditorias_tipo_id', $auditorias_tipo, set_value('auditorias_tipo_id', isset($auditorias['auditoria_tipo_id']) ? $auditorias['auditoria_tienda_id'] : ''), 'Tipo de Auditoria'. lang('bf_form_label_required'),'class = form-control');
			?>
			<br>
			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="Crear Auditoría"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor('auditorias', 'Cancelar', 'class="btn btn-warning"'); ?>
				
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>