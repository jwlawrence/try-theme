<?php get_template_part('partials/head'); ?>
<body <?php body_class(); ?>>
	<?php
		do_action('get_header');
		get_template_part('partials/header');
	?>

	<main class="main">
		<div class="container">
			<?php try_get_template(); ?>
		</div>
	</main>

	<?php
		do_action('get_footer');
		get_template_part('partials/footer');
	?>
</body>
</html>