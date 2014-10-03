<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/auditorias_datos_cliente_secreto') ?>" id="list"><?php echo lang('auditorias_datos_cliente_secreto_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Auditorias_Datos_Cliente_Secreto.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/auditorias_datos_cliente_secreto/create') ?>" id="create_new"><?php echo lang('auditorias_datos_cliente_secreto_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>