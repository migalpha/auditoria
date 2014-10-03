<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/tiendas_grupos') ?>" id="list"><?php echo lang('tiendas_grupos_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Tiendas_Grupos.Content.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/content/tiendas_grupos/create') ?>" id="create_new"><?php echo lang('tiendas_grupos_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>