<?php
	get_header();
?>
<main>
	<section class="main">
		<div class="main__top">
			<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="BTM Brindes"></figure>
		</div>

		<div class="main__bottom">
			<div class="main__form"><?php echo do_shortcode('[contact-form-7 id="6d6b1bb" title="Formulário"]'); ?></div>
		</div>
	</section>
</main>
<?php
    get_footer();
?>