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
	<h3>auditorias</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('auditoria_id') ? 'error' : ''; ?>">
				<?php echo form_label('Auditoria Id'. lang('bf_form_label_required'), 'auditorias_auditoria_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_auditoria_id' type='text' name='auditorias_auditoria_id' maxlength="12" value="<?php echo set_value('auditorias_auditoria_id', isset($auditorias['auditoria_id']) ? $auditorias['auditoria_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('auditoria_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('cod_base') ? 'error' : ''; ?>">
				<?php echo form_label('Cod Base'. lang('bf_form_label_required'), 'auditorias_cod_base', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_cod_base' type='text' name='auditorias_cod_base' maxlength="3" value="<?php echo set_value('auditorias_cod_base', isset($auditorias['cod_base']) ? $auditorias['cod_base'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('cod_base'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('auditor_id') ? 'error' : ''; ?>">
				<?php echo form_label('Auditor Id'. lang('bf_form_label_required'), 'auditorias_auditor_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_auditor_id' type='text' name='auditorias_auditor_id' maxlength="3" value="<?php echo set_value('auditorias_auditor_id', isset($auditorias['auditor_id']) ? $auditorias['auditor_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('auditor_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('atendido_por') ? 'error' : ''; ?>">
				<?php echo form_label('Atendido Por'. lang('bf_form_label_required'), 'auditorias_atendido_por', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_atendido_por' type='text' name='auditorias_atendido_por' maxlength="255" value="<?php echo set_value('auditorias_atendido_por', isset($auditorias['atendido_por']) ? $auditorias['atendido_por'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('atendido_por'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('cargo') ? 'error' : ''; ?>">
				<?php echo form_label('Cargo'. lang('bf_form_label_required'), 'auditorias_cargo', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_cargo' type='text' name='auditorias_cargo' maxlength="255" value="<?php echo set_value('auditorias_cargo', isset($auditorias['cargo']) ? $auditorias['cargo'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('cargo'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('puntaje') ? 'error' : ''; ?>">
				<?php echo form_label('Puntaje'. lang('bf_form_label_required'), 'auditorias_puntaje', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_puntaje' type='text' name='auditorias_puntaje' maxlength="11" value="<?php echo set_value('auditorias_puntaje', isset($auditorias['puntaje']) ? $auditorias['puntaje'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('puntaje'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('deleted') ? 'error' : ''; ?>">
				<?php echo form_label('Deleted'. lang('bf_form_label_required'), 'auditorias_deleted', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<label class='checkbox' for='auditorias_deleted'>
						<input type='checkbox' id='auditorias_deleted' name='auditorias_deleted' value='1' <?php echo (isset($auditorias['deleted']) && $auditorias['deleted'] == 1) ? 'checked="checked"' : set_checkbox('auditorias_deleted', 1); ?>>
						<span class='help-inline'><?php echo form_error('deleted'); ?></span>
					</label>
				</div>
			</div>

			<div class="control-group <?php echo form_error('created_on') ? 'error' : ''; ?>">
				<?php echo form_label('Created On'. lang('bf_form_label_required'), 'auditorias_created_on', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='auditorias_created_on' type='text' name='auditorias_created_on' maxlength="1" value="<?php echo set_value('auditorias_created_on', isset($auditorias['created_on']) ? $auditorias['created_on'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('created_on'); ?></span>
				</div>
			</div>

			<?php // Change the values in this array to populate your dropdown as required
				$options = array(
					4 => 4,
				);

				echo form_dropdown('auditorias_tipo_tienda_id', $options, set_value('auditorias_tipo_tienda_id', isset($auditorias['tipo_tienda_id']) ? $auditorias['tipo_tienda_id'] : ''), 'Tipo Tienda Id'. lang('bf_form_label_required'));
			?>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('auditorias_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/auditorias', lang('auditorias_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Auditorias.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('auditorias_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('auditorias_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>