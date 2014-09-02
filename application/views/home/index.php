<div class="jumbotron" text-align="center">
	<h1>Welcome to Bonfire</h1>

	<?php if (isset($current_user->email)) : ?>
		<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Go to the Admin area</a>
	<?php else :?>
		<a href="<?php echo site_url(LOGIN_URL); ?>" class="btn btn-large btn-primary"><?php echo lang('bf_action_login'); ?></a>
	<?php endif;?>

	<br/><br/><a href="<?php echo site_url('/docs') ?>" class="btn btn-large btn-info">Browse the Docs</a>
</div>


