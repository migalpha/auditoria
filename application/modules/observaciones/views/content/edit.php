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

if (isset($observaciones))
{
	$observaciones = (array) $observaciones;
}
$id = isset($observaciones['id']) ? $observaciones['id'] : '';

?>
<div class="admin-box">
	<h3>Observaciones</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('auditoria_id') ? 'error' : ''; ?>">
				<?php echo form_label('Auditoria'. lang('bf_form_label_required'), 'observaciones_auditoria_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='observaciones_auditoria_id' type='text' name='observaciones_auditoria_id' maxlength="15" value="<?php echo set_value('observaciones_auditoria_id', isset($observaciones['auditoria_id']) ? $observaciones['auditoria_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('auditoria_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('preguntas_grupos_id') ? 'error' : ''; ?>">
				<?php echo form_label('Preguntas Grupos'. lang('bf_form_label_required'), 'observaciones_preguntas_grupos_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='observaciones_preguntas_grupos_id' type='text' name='observaciones_preguntas_grupos_id' maxlength="3" value="<?php echo set_value('observaciones_preguntas_grupos_id', isset($observaciones['preguntas_grupos_id']) ? $observaciones['preguntas_grupos_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('preguntas_grupos_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('observacion') ? 'error' : ''; ?>">
				<?php echo form_label('Observacion'. lang('bf_form_label_required'), 'observaciones_observacion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<?php echo form_textarea( array( 'name' => 'observaciones_observacion', 'id' => 'observaciones_observacion', 'rows' => '5', 'cols' => '80', 'value' => set_value('observaciones_observacion', isset($observaciones['observacion']) ? $observaciones['observacion'] : '') ) ); ?>
					<span class='help-inline'><?php echo form_error('observacion'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('observaciones_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/observaciones', lang('observaciones_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Observaciones.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('observaciones_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('observaciones_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>