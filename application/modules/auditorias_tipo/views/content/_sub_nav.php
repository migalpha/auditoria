<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/auditorias_tipo') ?>" id="list"><?php echo lang('auditorias_tipo_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Auditorias_Tipo.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/auditorias_tipo/create') ?>" id="create_new"><?php echo lang('auditorias_tipo_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>