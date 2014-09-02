<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/tiendas') ?>" id="list"><?php echo lang('tiendas_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Tiendas.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/tiendas/create') ?>" id="create_new"><?php echo lang('tiendas_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>