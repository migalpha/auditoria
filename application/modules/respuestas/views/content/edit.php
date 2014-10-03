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

if (isset($respuestas))
{
	$respuestas = (array) $respuestas;
}
$id = isset($respuestas['id']) ? $respuestas['id'] : '';

?>
<div class="admin-box">
	<h3>Respuestas</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
		<fieldset>

			<div class="control-group <?php echo form_error('auditoria_id') ? 'error' : ''; ?>">
				<?php echo form_label('Auditoria Id'. lang('bf_form_label_required'), 'respuestas_auditoria_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='respuestas_auditoria_id' type='text' name='respuestas_auditoria_id' maxlength="15" value="<?php echo set_value('respuestas_auditoria_id', isset($respuestas['auditoria_id']) ? $respuestas['auditoria_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('auditoria_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('pregunta_id') ? 'error' : ''; ?>">
				<?php echo form_label('Pregunta Id'. lang('bf_form_label_required'), 'respuestas_pregunta_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='respuestas_pregunta_id' type='text' name='respuestas_pregunta_id' maxlength="11" value="<?php echo set_value('respuestas_pregunta_id', isset($respuestas['pregunta_id']) ? $respuestas['pregunta_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('pregunta_id'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('valor') ? 'error' : ''; ?>">
				<?php echo form_label('Valor'. lang('bf_form_label_required'), 'respuestas_valor', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='respuestas_valor' type='text' name='respuestas_valor' maxlength="255" value="<?php echo set_value('respuestas_valor', isset($respuestas['valor']) ? $respuestas['valor'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('valor'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('puntuacion') ? 'error' : ''; ?>">
				<?php echo form_label('Puntuacion'. lang('bf_form_label_required'), 'respuestas_puntuacion', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='respuestas_puntuacion' type='text' name='respuestas_puntuacion' maxlength="11" value="<?php echo set_value('respuestas_puntuacion', isset($respuestas['puntuacion']) ? $respuestas['puntuacion'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('puntuacion'); ?></span>
				</div>
			</div>

			<div class="control-group <?php echo form_error('preguntas_grupos_id') ? 'error' : ''; ?>">
				<?php echo form_label('Preguntas Grupos Id'. lang('bf_form_label_required'), 'respuestas_preguntas_grupos_id', array('class' => 'control-label') ); ?>
				<div class='controls'>
					<input id='respuestas_preguntas_grupos_id' type='text' name='respuestas_preguntas_grupos_id' maxlength="3" value="<?php echo set_value('respuestas_preguntas_grupos_id', isset($respuestas['preguntas_grupos_id']) ? $respuestas['preguntas_grupos_id'] : ''); ?>" />
					<span class='help-inline'><?php echo form_error('preguntas_grupos_id'); ?></span>
				</div>
			</div>

			<div class="form-actions">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo lang('respuestas_action_edit'); ?>"  />
				<?php echo lang('bf_or'); ?>
				<?php echo anchor(SITE_AREA .'/content/respuestas', lang('respuestas_cancel'), 'class="btn btn-warning"'); ?>
				
			<?php if ($this->auth->has_permission('Respuestas.Content.Delete')) : ?>
				or
				<button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('respuestas_delete_confirm'))); ?>'); ">
					<span class="icon-trash icon-white"></span>&nbsp;<?php echo lang('respuestas_delete_record'); ?>
				</button>
			<?php endif; ?>
			</div>
		</fieldset>
    <?php echo form_close(); ?>
</div>