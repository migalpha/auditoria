<div>
	<h1 class="page-header">Auditorias Datos Cliente Secreto</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
		<th>Auditoria Id</th>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Ci</th>
		<th>Ciudad</th>
		<th>Telefono</th>
		<th>Fecha Audit</th>
		<th>Puntaje segun auditor</th>
			</tr>
		</thead>
		<tbody>
		
		<?php foreach ($records as $record) : ?>
			<?php $record = (array)$record;?>
			<tr>
			<?php foreach($record as $field => $value) : ?>
				
				<?php if ($field != 'id') : ?>
					<td>
						<?php if ($field == 'deleted'): ?>
							<?php e(($value > 0) ? lang('auditorias_datos_cliente_secreto_true') : lang('auditorias_datos_cliente_secreto_false')); ?>
						<?php else: ?>
							<?php e($value); ?>
						<?php endif ?>
					</td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>