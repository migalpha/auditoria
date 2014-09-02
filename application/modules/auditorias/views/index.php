<div>
	<h1 class="page-header">auditorias</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				
		<th>Auditoria Id</th>
		<th>Cod Base</th>
		<th>Auditor Id</th>
		<th>Atendido Por</th>
		<th>Cargo</th>
		<th>Puntaje</th>
		<th>Deleted</th>
		<th>Created On</th>
		<th>Tipo Tienda Id</th>
		<th>Deleted</th>
		<th>Created</th>
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
							<?php e(($value > 0) ? lang('auditorias_true') : lang('auditorias_false')); ?>
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